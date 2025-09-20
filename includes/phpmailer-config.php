<?php
/**
 * PHPMailer Configuration for Mahati Interiors
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Require Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

/**
 * Send an email using PHPMailer
 * 
 * @param array $formData Form data to include in the email
 * @param string|null $pdfPath Path to PDF attachment (optional)
 * @param array $attachments Additional file attachments (optional)
 * @return array Result with status and message
 */
function send_phpmailer_email($formData, $pdfPath = null, $attachments = []) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings with detailed debugging
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output
        $mail->Debugoutput = function($str, $level) {
            error_log("PHPMailer: $str");
        };
        $mail->isSMTP();
        
        // SMTP Configuration
        $mail->Host = 'smtp.hostinger.com';  // Update with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@mahatiinteriors.com';  // Your SMTP username
        $mail->Password = 'YourSMTPPassword';             // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Use SSL/TLS
        $mail->Port = 465;                                // SSL port for SMTP
        
        // For local development, you can enable debug mode
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        // $mail->Debugoutput = function($str, $level) {
        //     error_log("PHPMailer: $str");
        // };
        
        // Recipients
        $mail->setFrom('noreply@mahatiinteriors.com', 'Mahati Interiors');
        
        // Add admin email as recipient
        $adminEmail = 'zathishkumar@gmail.com';
        $adminName = 'Zathish Kumar';
        $mail->addAddress($adminEmail, $adminName);
        
        // Add sender as reply-to
        if (!empty($formData['email'])) {
            $replyToName = !empty($formData['firstName']) ? 
                $formData['firstName'] . ' ' . ($formData['lastName'] ?? '') : 
                'Website Visitor';
            $mail->addReplyTo($formData['email'], $replyToName);
        }
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Project Inquiry: ' . ($formData['projectType'] ?? 'Website Form');
        
        // Email body
        $mail->Body = create_email_body($formData);
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $mail->Body));
        
        // Add PDF attachment if provided
        if ($pdfPath && file_exists($pdfPath)) {
            $pdfName = 'Project_Details_' . date('Y-m-d') . '.pdf';
            $mail->addAttachment($pdfPath, $pdfName);
        }
        
        // Add any additional attachments
        foreach ($attachments as $attachment) {
            if (file_exists($attachment['path'])) {
                $mail->addAttachment(
                    $attachment['path'],
                    $attachment['name'] ?? basename($attachment['path'])
                );
            }
        }
        
        // Send the email
        $mail->send();
        
        // Log successful email sending
        error_log('Email sent successfully to: ' . $adminEmail . 
                 ' from: ' . ($formData['email'] ?? 'unknown') . 
                 ' - Subject: ' . $mail->Subject);
                 
        return [
            'success' => true,
            'message' => 'Email has been sent successfully!'
        ];
        
    } catch (Exception $e) {
        // Log detailed error information
        $errorMsg = 'Email sending failed: ' . $e->getMessage() . 
                   ' | Error Info: ' . ($mail->ErrorInfo ?? 'No error info') .
                   ' | SMTP Debug: ' . $mail->SMTPDebug;
        error_log($errorMsg);
        
        return [
            'success' => false,
            'message' => "An error occurred while sending your message. Please try again later.",
            'debug' => $mail->ErrorInfo
        ];
    }
}

/**
 * Create HTML email body from form data
 */
function create_email_body($formData) {
    $name = htmlspecialchars($formData['firstName'] . ' ' . $formData['lastName']);
    $email = htmlspecialchars($formData['email']);
    $phone = !empty($formData['phone']) ? htmlspecialchars($formData['phone']) : 'Not provided';
    $projectType = htmlspecialchars($formData['projectType'] ?? 'Not specified');
    $budget = !empty($formData['budget']) ? htmlspecialchars($formData['budget']) : 'Not specified';
    $timeline = !empty($formData['timeline']) ? htmlspecialchars($formData['timeline']) : 'Not specified';
    $message = nl2br(htmlspecialchars($formData['message'] ?? ''));
    
    return "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; }
            .header { background: linear-gradient(135deg, #00d4aa, #00b894); color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .field { margin: 15px 0; padding: 10px; background: #f9f9f9; border-left: 4px solid #00d4aa; }
            .label { font-weight: bold; color: #333; }
            .value { margin-top: 5px; }
            .footer { margin-top: 20px; padding: 15px; text-align: center; color: #666; font-size: 0.9em; }
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
                <div class='value'>{$name}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Email Address:</div>
                <div class='value'>{$email}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Phone Number:</div>
                <div class='value'>{$phone}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Type:</div>
                <div class='value'>{$projectType}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Budget Range:</div>
                <div class='value'>{$budget}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Timeline:</div>
                <div class='value'>{$timeline}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Project Details:</div>
                <div class='value'>{$message}</div>
            </div>
        </div>
        
        <div class='footer'>
            <p><strong>Submitted:</strong> " . date('F j, Y \a\t g:i A') . "</p>
            <p>This email was sent from the contact form on Mahati Interiors website.</p>
        </div>
    </body>
    </html>";
}
?>
