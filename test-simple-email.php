<?php
/**
 * Simple Email Test Script
 */

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Test email parameters
$to = 'zathishkumar@gmail.com';
$subject = 'Test Email from Mahati Interiors';
$message = 'This is a test email from your Mahati Interiors website.';
$headers = [
    'From' => 'noreply@mahatiinteriors.com',
    'Reply-To' => 'noreply@mahatiinteriors.com',
    'X-Mailer' => 'PHP/' . phpversion()
];

// Format headers
$headers_str = '';
foreach ($headers as $key => $value) {
    $headers_str .= "$key: $value\r\n";
}

// Try to send email
$start_time = microtime(true);
$result = mail($to, $subject, $message, $headers_str);
$end_time = microtime(true);

// Check result
if ($result) {
    echo "<h2 style='color: green;'>✅ Email sent successfully!</h2>";
} else {
    $error = error_get_last();
    echo "<h2 style='color: red;'>❌ Failed to send email</h2>";
    
    if ($error) {
        echo "<p><strong>Error:</strong> " . htmlspecialchars($error['message']) . "</p>";
    } else {
        echo "<p>No specific error message was returned. This typically means the mail server is not properly configured.</p>";
    }
}

// Display debug information
echo "<h3>Debug Information:</h3>";
echo "<pre>";
echo "To: $to\n";
echo "Subject: $subject\n";
echo "Headers: " . print_r($headers, true) . "\n";
echo "Execution Time: " . number_format(($end_time - $start_time), 4) . " seconds\n";
echo "PHP Version: " . phpversion() . "\n";

// Check if mail function is available
if (!function_exists('mail')) {
    echo "WARNING: mail() function is not available!\n";
}

// Check mail log file (common locations)
$mail_logs = [
    'C:\xampp\sendmail\sendmail.log',
    'C:\xampp\mailoutput\',
    'C:\xampp\php\logs\php_error_log',
    'C:\xampp\apache\logs\error.log'
];

echo "\nChecking mail logs...\n";
foreach ($mail_logs as $log) {
    if (file_exists($log)) {
        echo "Found log file: $log\n";
        if (is_dir($log)) {
            $files = glob($log . '/*');
            if (!empty($files)) {
                echo "  Contains files: " . implode(", ", $files) . "\n";
            }
        } else {
            $size = filesize($log);
            if ($size > 0) {
                echo "  Log file size: $size bytes\n";
                echo "  Last 5 lines:\n";
                $lines = file($log);
                $last_lines = array_slice($lines, -5);
                foreach ($last_lines as $line) {
                    echo "    " . htmlspecialchars($line) . "\n";
                }
            } else {
                echo "  Log file is empty\n";
            }
        }
    }
}

echo "</pre>";

// Check PHP mail configuration
echo "<h3>PHP Mail Configuration:</h3>";
echo "<pre>";
$mail_config = [
    'SMTP' => ini_get('SMTP'),
    'smtp_port' => ini_get('smtp_port'),
    'sendmail_from' => ini_get('sendmail_from'),
    'sendmail_path' => ini_get('sendmail_path'),
    'mail.add_x_header' => ini_get('mail.add_x_header'),
    'mail.log' => ini_get('mail.log')
];

foreach ($mail_config as $key => $value) {
    echo str_pad($key, 20) . ": " . (empty($value) ? 'Not set' : $value) . "\n";
}
echo "</pre>";

// Suggestion for local development
echo "<div style='margin-top: 30px; padding: 15px; background: #fff3cd; border: 1px solid #ffeeba; border-radius: 4px;'>";
echo "<h3>Local Development Suggestion:</h3>";
echo "<p>For local development, it's recommended to use a local mail testing tool like <a href='https://github.com/maildev/maildev' target='_blank'>MailDev</a> or <a href='https://github.com/mailhog/MailHog' target='_blank'>MailHog</a>.</p>";
echo "<p>Alternatively, you can use a free SMTP service like <a href='https://mailtrap.io/' target='_blank'>Mailtrap.io</a> for testing.</p>";
echo "</div>";
?>
