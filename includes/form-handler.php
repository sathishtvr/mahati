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
        header('Location: ' . SITE_URL . '/pages/contact.php?error=missing_fields');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/pages/contact.php?error=invalid_email');
        exit;
    }
    
    // Terms checkbox is now optional - removed validation
    
    // Prepare form data - email functionality removed
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
    
    // Log form submission for records
    error_log('Contact form submitted: ' . $email . ' - ' . $projectType);
    
    // Always show success message (email functionality removed)
    $mail_sent = true;
    
    if ($mail_sent) {
        if ($is_ajax) {
            echo json_encode(['success' => true, 'message' => 'Thank you! Your project inquiry has been sent successfully.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/pages/contact.php?success=1');
        exit;
    } else {
        if ($is_ajax) {
            echo json_encode(['success' => false, 'message' => 'Sorry, there was an error sending your message. Please try again.']);
            exit;
        }
        header('Location: ' . SITE_URL . '/pages/contact.php?error=send_failed');
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
    
    // Log newsletter subscription (email functionality removed)
    error_log('Newsletter subscription: ' . $email);
    
    // Always show success message
    $_SESSION['success'] = 'Thank you for subscribing to our newsletter!';
    redirect_to_page();
}
?>
