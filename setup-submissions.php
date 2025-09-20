<?php
/**
 * Script to set up the submissions directory
 */

// Directory path
$submissionsDir = __DIR__ . '/includes/submissions';

// Try to create the directory if it doesn't exist
if (!is_dir($submissionsDir)) {
    if (mkdir($submissionsDir, 0755, true)) {
        echo "✅ Successfully created directory: $submissionsDir<br>";
        
        // Create an index.html file to prevent directory listing
        file_put_contents("$submissionsDir/index.html", '<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><h1>Directory access is forbidden</h1></body></html>');
        echo "✅ Created index.html to prevent directory listing<br>";
        
        // Create a test file to verify write permissions
        $testFile = "$submissionsDir/test_" . time() . ".txt";
        if (file_put_contents($testFile, 'Test file created at ' . date('Y-m-d H:i:s'))) {
            echo "✅ Successfully created test file: " . basename($testFile) . "<br>";
            
            // Test file permissions
            $perms = fileperms($testFile);
            echo "🔒 File permissions: " . substr(sprintf('%o', $perms), -4) . "<br>";
            echo "📝 File content: " . file_get_contents($testFile) . "<br>";
            
            // Clean up test file
            unlink($testFile);
            echo "🗑️  Cleaned up test file<br>";
        } else {
            echo "❌ Could not create test file. Check directory permissions.<br>";
        }
    } else {
        echo "❌ Failed to create directory: $submissionsDir<br>";
        echo "Please create the directory manually with write permissions.<br>";
    }
} else {
    echo "ℹ️ Directory already exists: $submissionsDir<br>";
    
    // Check if we can write to the directory
    $testFile = "$submissionsDir/test_" . time() . ".txt";
    if (file_put_contents($testFile, 'Test file created at ' . date('Y-m-d H:i:s'))) {
        echo "✅ Directory is writable<br>";
        unlink($testFile);
    } else {
        echo "❌ Directory is not writable. Please check permissions.<br>";
    }
}

// Display directory information
echo "<h3>Directory Information:</h3>";
echo "<pre>";
echo "Path: $submissionsDir\n";
echo "Exists: " . (file_exists($submissionsDir) ? 'Yes' : 'No') . "\n";

if (is_dir($submissionsDir)) {
    echo "Is Directory: Yes\n";
    echo "Is Writable: " . (is_writable($submissionsDir) ? 'Yes' : 'No') . "\n";
    echo "Permissions: " . substr(sprintf('%o', fileperms($submissionsDir)), -4) . "\n";
    
    // List files in the directory
    $files = scandir($submissionsDir);
    $files = array_diff($files, array('.', '..'));
    
    if (count($files) > 0) {
        echo "\nFiles in directory:\n";
        foreach ($files as $file) {
            $filePath = $submissionsDir . '/' . $file;
            echo "- $file (" . filesize($filePath) . " bytes, " . 
                 date('Y-m-d H:i:s', filemtime($filePath)) . ")\n";
        }
    } else {
        echo "\nDirectory is empty.\n";
    }
} else {
    echo "Is Directory: No\n";
}

echo "</pre>";

// Display PHP user and group information
echo "<h3>PHP User Information:</h3>";
echo "<pre>";
if (function_exists('posix_getpwuid') && function_exists('posix_geteuid')) {
    $processUser = posix_getpwuid(posix_geteuid());
    echo "PHP running as user: " . $processUser['name'] . "\n";
} else {
    echo "posix functions not available.\n";
}

echo "Current user: " . get_current_user() . "\n";

// Display directory owner on Windows
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo "\nWindows directory owner (run as administrator to see details):\n";
    $output = [];
    $return_var = 0;
    exec('icacls "' . str_replace('/', '\\', $submissionsDir) . '"', $output, $return_var);
    
    if ($return_var === 0) {
        echo implode("\n", $output);
    } else {
        echo "Could not retrieve directory permissions. Run as administrator for details.\n";
    }
}

echo "</pre>";

echo "<div style='margin-top: 20px; padding: 15px; background: #e9f7ef; border: 1px solid #a3d9b1; border-radius: 4px;'>";
echo "<h3>Next Steps:</h3>";
echo "<ol>";
echo "<li>Run the <a href='test-simple-email.php'>email test script</a> again</li>";
echo "<li>Check if submissions are now being saved to the directory</li>";
echo "<li>If you still have issues, check the <a href='test-simple-email.php'>email test page</a> for configuration details</li>";
echo "</ol>";
echo "</div>";
?>
