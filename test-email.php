<?php
/**
 * Test script for email functionality
 */

// Include necessary files
define('SECURE_ACCESS', true);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/email-config.php';
require_once __DIR__ . '/includes/pdf-generator.php';

// Test form data
$testData = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'email' => 'test@example.com',
    'phone' => '9876543210',
    'projectType' => 'Home Renovation',
    'budget' => '₹10-15 Lakhs',
    'timeline' => '3-6 months',
    'message' => 'This is a test message to verify email functionality.'
];

// Generate test PDF
$pdfGenerator = new ContactFormPDF($testData);
$pdfFilename = 'test_contact_form_' . date('Y-m-d_His') . '.pdf';
$pdfPath = $pdfGenerator->savePDF($pdfFilename);

if (!file_exists($pdfPath)) {
    die("Error: Failed to generate test PDF");
}

// Test email sending
$startTime = microtime(true);
$result = send_contact_email($testData, $pdfPath);
$endTime = microtime(true);

// Clean up test PDF
if (file_exists($pdfPath)) {
    unlink($pdfPath);
}

// Output results
echo "<h1>Email Test Results</h1>";
echo "<p>Test completed in " . number_format(($endTime - $startTime), 4) . " seconds</p>";

if ($result) {
    echo "<div style='color: green; font-weight: bold;'>✅ Email sent successfully!</div>";
    
    // Check if submission was saved
    $submissionsDir = __DIR__ . '/includes/submissions';
    $latestFile = '';
    $latestTime = 0;
    
    if (is_dir($submissionsDir)) {
        $files = glob($submissionsDir . '/contact_submission_*.txt');
        foreach ($files as $file) {
            $fileTime = filemtime($file);
            if ($fileTime > $latestTime) {
                $latestTime = $fileTime;
                $latestFile = $file;
            }
        }
    }
    
    if ($latestFile && (time() - $latestTime) < 60) { // Check if file was created in the last minute
        echo "<div style='margin-top: 20px;'>";
        echo "<h3>Submission Details:</h3>";
        echo "<pre style='background: #f5f5f5; padding: 15px; border: 1px solid #ddd; border-radius: 4px;'>";
        echo htmlspecialchars(file_get_contents($latestFile));
        echo "</pre>";
        echo "</div>";
    } else {
        echo "<div style='color: orange;'>Note: Could not verify if submission was saved to file.</div>";
    }
} else {
    echo "<div style='color: red; font-weight: bold;'>❌ Failed to send email. Please check your server's mail configuration.</div>";
}

// Display email configuration
echo "<div style='margin-top: 30px; padding: 15px; background: #f0f8ff; border: 1px solid #b3d9ff; border-radius: 4px;'>";
echo "<h3>Email Configuration:</h3>";
echo "<p><strong>Recipient:</strong> zathishkumar@gmail.com</p>";
echo "<p><strong>From:</strong> " . $testData['email'] . " (test@example.com in this test)</p>";
echo "<p><strong>PDF Attachment:</strong> " . ($pdfPath ? 'Generated and attached' : 'Failed to generate') . "</p>";
echo "</div>";
?>
