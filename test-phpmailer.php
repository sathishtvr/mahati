<?php
/**
 * PHPMailer Test Script
 */

// Include PHPMailer
require __DIR__ . '/vendor/autoload.php';

// Test form data
$testData = [
    'firstName' => 'Test',
    'lastName' => 'User',
    'email' => 'test@example.com',
    'phone' => '1234567890',
    'projectType' => 'Website Test',
    'budget' => 'Test Budget',
    'timeline' => 'ASAP',
    'message' => 'This is a test message from the PHPMailer test script.'
];

echo "<h1>PHPMailer Test</h1>";

try {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    // Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP();
    
    // Gmail SMTP Configuration (example)
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';  // Update with your email
    $mail->Password = 'your-app-password';     // Update with your app password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Recipients
    $mail->setFrom('noreply@mahatiinteriors.com', 'Mahati Test');
    $mail->addAddress('zathishkumar@gmail.com', 'Zathish Kumar');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'PHPMailer Test';
    $mail->Body    = '<h1>PHPMailer Test</h1><p>This is a test email from PHPMailer.</p>';
    $mail->AltBody = 'This is a test email from PHPMailer.';
    
    $mail->send();
    echo "<p style='color: green;'>✅ Test 1: Basic email sent successfully!</p>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Test 1 Failed: " . $e->getMessage() . "</p>";
    echo "<p>Debug info: " . $mail->ErrorInfo . "</p>";
}

// Test 2: Using our custom function
echo "<h2>Test 2: Custom send_phpmailer_email() Test</h2>";

try {
    $result = send_phpmailer_email($testData);
    
    if ($result['success']) {
        echo "<p style='color: green;'>✅ Test 2: Custom function email sent successfully!</p>";
    } else {
        echo "<p style='color: red;'>❌ Test 2 Failed: " . $result['message'] . "</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Test 2 Exception: " . $e->getMessage() . "</p>";
}

// Display PHP mail configuration
echo "<h2>PHP Mail Configuration</h2>";
echo "<pre>";
$mail_config = [
    'SMTP' => ini_get('SMTP'),
    'smtp_port' => ini_get('smtp_port'),
    'sendmail_from' => ini_get('sendmail_from'),
    'sendmail_path' => ini_get('sendmail_path'),
    'mail.add_x_header' => ini_get('mail.add_x_header'),
    'mail.log' => ini_get('mail.log'),
    'PHP Version' => phpversion(),
    'OpenSSL' => extension_loaded('openssl') ? 'Enabled' : 'Not enabled',
    'allow_url_fopen' => ini_get('allow_url_fopen')
];

foreach ($mail_config as $key => $value) {
    echo str_pad($key, 20) . ": " . (empty($value) ? 'Not set' : $value) . "\n";
}

echo "\nLoaded Extensions:\n";
$extensions = get_loaded_extensions();
sort($extensions);
echo implode(", ", $extensions);

echo "</pre>";
?>
