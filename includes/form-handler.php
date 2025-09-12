<?php
/**
 * Form Handler for Mahati Interior Design Website
 * Handles contact form and newsletter submissions with PDF generation
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    define('SECURE_ACCESS', true);
}

require_once 'config.php';

// Check if this is an AJAX request
$is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

// Only process POST requests
if (!is_post_request()) {
    if ($is_ajax) {
        echo json_encode(['success' => false, 'message' => 'Invalid request method']);
        exit;
    }
    redirect_to_page('contact');
}

// Verify CSRF token
$csrf_token = get_post_data(CSRF_TOKEN_NAME);
if (!verify_csrf_token($csrf_token)) {
    if ($is_ajax) {
        echo json_encode(['success' => false, 'message' => 'Security token validation failed. Please try again.']);
        exit;
    }
    $_SESSION['error'] = 'Security token validation failed. Please try again.';
    redirect_to_page('contact');
}

$form_type = get_post_data('form_type');

switch ($form_type) {
    case 'contact':
        handle_contact_form();
        break;
    case 'newsletter':
        handle_newsletter_form();
        break;
    default:
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Invalid form submission.']);
            exit;
        }
        $_SESSION['error'] = 'Invalid form submission.';
        redirect_to_page('contact');
}

/**
 * Handle contact form submission
 */
function handle_contact_form() {
    global $is_ajax;
    
    $firstName = sanitize_input($_POST['firstName'] ?? '');
    $lastName = sanitize_input($_POST['lastName'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $projectType = sanitize_input($_POST['projectType'] ?? '');
    $budget = sanitize_input($_POST['budget'] ?? '');
    $timeline = sanitize_input($_POST['timeline'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    // Validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($projectType) || empty($message)) {
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/mahati/pages/contact.php?error=missing_fields');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/mahati/pages/contact.php?error=invalid_email');
        exit;
    }
    
    // Terms checkbox is now optional - removed validation
    
    // Generate PDF with form data
    require_once 'pdf-generator.php';
    $formData = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'phone' => $phone,
        'projectType' => $projectType,
        'budget' => $budget,
        'timeline' => $timeline,
        'message' => $message
    ];
    
    $pdfGenerator = new ContactFormPDF($formData);
    $pdfFilename = 'contact_form_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.pdf';
    $pdfPath = $pdfGenerator->savePDF($pdfFilename);
    
    // Prepare email content
    $subject = "New Project Inquiry - " . $projectType;
    $email_body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: linear-gradient(135deg, #00d4aa, #00b894); color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .field { margin: 10px 0; padding: 10px; background: #f9f9f9; border-left: 4px solid #00d4aa; }
            .label { font-weight: bold; color: #333; }
            .value { margin-top: 5px; }
            .footer { background: #f5f5f5; padding: 15px; text-align: center; color: #666; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>New Project Inquiry</h2>
            <p>Mahati Interior Design</p>
        </div>
        
        <div class='content'>
            <div class='field'>
                <div class='label'>Client Name:</div>
                <div class='value'>{$firstName} {$lastName}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Email Address:</div>
                <div class='value'>{$email}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Phone Number:</div>
                <div class='value'>" . ($phone ?: 'Not provided') . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Type:</div>
                <div class='value'>{$projectType}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Budget Range:</div>
                <div class='value'>" . ($budget ?: 'Not specified') . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Timeline:</div>
                <div class='value'>" . ($timeline ?: 'Not specified') . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Details:</div>
                <div class='value'>" . nl2br($message) . "</div>
            </div>
            
        </div>
        
        <div class='footer'>
            <p><strong>Submitted:</strong> " . date('F j, Y \a\t g:i A') . "</p>
            <p>Please find the detailed form submission attached as PDF.</p>
        </div>
    </body>
    </html>
    ";
    
    // Email headers with attachment
    $boundary = md5(time());
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"" . "\r\n";
    $headers .= "From: Mahati Interior Design <noreply@mahati.com>" . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Email body with attachment
    $email_message = "--{$boundary}\r\n";
    $email_message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $email_message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $email_message .= $email_body . "\r\n";
    
    // Add PDF attachment
    if (file_exists($pdfPath)) {
        $pdf_content = file_get_contents($pdfPath);
        $pdf_encoded = chunk_split(base64_encode($pdf_content));
        
        $email_message .= "--{$boundary}\r\n";
        $email_message .= "Content-Type: application/pdf; name=\"{$pdfFilename}\"\r\n";
        $email_message .= "Content-Transfer-Encoding: base64\r\n";
        $email_message .= "Content-Disposition: attachment; filename=\"{$pdfFilename}\"\r\n\r\n";
        $email_message .= $pdf_encoded . "\r\n";
    }
    
    $email_message .= "--{$boundary}--";
    
    // Use alternative email handling for development
    require_once 'email-config.php';
    $mail_sent = send_contact_email($formData, $pdfPath);
    
    // Clean up temporary PDF file
    if (file_exists($pdfPath)) {
        unlink($pdfPath);
    }
    
    if ($mail_sent) {
        if ($is_ajax) {
            echo json_encode(['success' => true, 'message' => 'Thank you! Your project inquiry has been sent successfully with detailed PDF attachment.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/mahati/pages/contact.php?success=1');
        exit;
    } else {
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Sorry, there was an error sending your message. Please try again.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/mahati/pages/contact.php?error=send_failed');
        exit;
    }
}

/**
 * Handle newsletter subscription
 */
function handle_newsletter_form() {
    $email = get_post_data('email');
    
    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Please enter a valid email address.';
        redirect_to_page();
    }
    
    // Prepare email content
    $to = SITE_EMAIL;
    $subject = "New Newsletter Subscription - " . SITE_NAME;
    
    $body = "
    New newsletter subscription:
    
    Email: {$email}
    
    ---
    Subscribed on: " . date('Y-m-d H:i:s') . "
    IP Address: " . $_SERVER['REMOTE_ADDR'] . "
    ";
    
    $headers = "From: noreply@" . parse_url(SITE_URL, PHP_URL_HOST) . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send notification email
    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['success'] = 'Thank you for subscribing to our newsletter!';
    } else {
        $_SESSION['error'] = 'Sorry, there was an error processing your subscription. Please try again later.';
    }
    
    redirect_to_page();
}
?>
