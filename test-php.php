<?php
/**
 * Simple PHP Test Page
 * This helps identify if PHP is working correctly
 */

// Display PHP information
phpinfo();

// Test basic PHP functionality
echo "<h2>PHP Test Results</h2>";

try {
    // Test 1: Basic PHP functionality
    echo "<h3>Test 1: Basic PHP</h3>";
    echo "PHP Version: " . phpversion() . "<br>";
    echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Not available') . "<br>";
    echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Not available') . "<br>";
    
    // Test 2: File system access
    echo "<h3>Test 2: File System</h3>";
    $testDir = __DIR__ . '/test-dir';
    $testFile = $testDir . '/test.txt';
    
    // Create test directory
    if (!is_dir($testDir) && !mkdir($testDir, 0755, true)) {
        throw new Exception("Failed to create test directory");
    }
    
    // Write test file
    if (file_put_contents($testFile, 'Test content') === false) {
        throw new Exception("Failed to write test file");
    }
    
    // Read test file
    $content = file_get_contents($testFile);
    if ($content !== 'Test content') {
        throw new Exception("Failed to read test file");
    }
    
    // Clean up
    unlink($testFile);
    rmdir($testDir);
    
    echo "✅ File system tests passed<br>";
    
    // Test 3: Check required extensions
    echo "<h3>Test 3: Required Extensions</h3>";
    $requiredExtensions = ['pdo', 'pdo_mysql', 'openssl', 'mbstring', 'fileinfo', 'json'];
    $allExtensions = get_loaded_extensions();
    $missing = [];
    
    foreach ($requiredExtensions as $ext) {
        if (!in_array($ext, $allExtensions)) {
            $missing[] = $ext;
        }
    }
    
    if (empty($missing)) {
        echo "✅ All required extensions are loaded<br>";
    } else {
        echo "❌ Missing extensions: " . implode(', ', $missing) . "<br>";
    }
    
    // Test 4: Check permissions
    echo "<h3>Test 4: Directory Permissions</h3>";
    $dirsToCheck = [
        __DIR__ => 'Root directory',
        __DIR__ . '/includes' => 'Includes directory',
        __DIR__ . '/assets' => 'Assets directory',
        __DIR__ . '/admin' => 'Admin directory'
    ];
    
    foreach ($dirsToCheck as $dir => $label) {
        $writable = is_writable($dir) ? '✅' : '❌';
        $exists = file_exists($dir) ? 'Exists' : 'Does not exist';
        echo "{$writable} {$label} ({$dir}): {$exists}, " . 
             (is_writable($dir) ? 'Writable' : 'Not Writable') . "<br>";
    }
    
    // Test 5: Check PHP configuration
    echo "<h3>Test 5: PHP Configuration</h3>";
    $settings = [
        'allow_url_fopen',
        'file_uploads',
        'upload_max_filesize',
        'post_max_size',
        'max_execution_time',
        'memory_limit',
        'display_errors',
        'error_log'
    ];
    
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Setting</th><th>Value</th></tr>";
    
    foreach ($settings as $setting) {
        $value = ini_get($setting);
        echo "<tr><td>{$setting}</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    
    echo "</table>";
    
    // Test 6: Check if we can send mail
    echo "<h3>Test 6: Mail Function</h3>";
    if (function_exists('mail')) {
        echo "✅ mail() function is available<br>";
        
        // Test sending a simple email
        $testEmail = 'test@example.com';
        $subject = 'Test Email from ' . $_SERVER['HTTP_HOST'];
        $message = 'This is a test email to verify mail() function works.';
        $headers = 'From: webmaster@' . $_SERVER['HTTP_HOST'] . "\r\n" .
                 'Reply-To: webmaster@' . $_SERVER['HTTP_HOST'] . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
        
        if (mail($testEmail, $subject, $message, $headers)) {
            echo "✅ Test email sent to {$testEmail} (check your mail server logs)<br>";
        } else {
            echo "❌ Failed to send test email. Check your mail server configuration.<br>";
        }
    } else {
        echo "❌ mail() function is not available<br>";
    }
    
} catch (Exception $e) {
    echo "❌ Test failed: " . $e->getMessage() . "<br>";
    echo "File: " . $e->getFile() . " (Line: " . $e->getLine() . ")<br>";
}

// Show all defined constants
echo "<h3>Defined Constants</h3>";
$constants = get_defined_constants(true);
if (isset($constants['user'])) {
    echo "<pre>" . print_r($constants['user'], true) . "</pre>";
} else {
    echo "No user-defined constants found.";
}
?>
