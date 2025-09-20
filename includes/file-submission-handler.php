<?php
/**
 * File-based form submission handler
 * Saves form submissions to files for debugging
 */

// Create submissions directory if it doesn't exist
$submissionsDir = __DIR__ . '/submissions';
if (!is_dir($submissionsDir)) {
    mkdir($submissionsDir, 0755, true);
    
    // Add .htaccess to prevent directory listing
    file_put_contents(
        $submissionsDir . '/.htaccess',
        "Order Deny,Allow\nDeny from all"
    );
}

/**
 * Save form submission to a file
 */
function save_form_submission($formData) {
    global $submissionsDir;
    
    // Create a unique filename
    $timestamp = date('Y-m-d_His');
    $filename = "submission_{$timestamp}_" . uniqid() . ".txt";
    $filepath = $submissionsDir . '/' . $filename;
    
    // Format the submission data
    $content = "=== FORM SUBMISSION ===\n";
    $content .= "Date: " . date('Y-m-d H:i:s') . "\n";
    $content .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
    
    foreach ($formData as $key => $value) {
        $content .= str_pad(ucfirst($key) . ':', 15) . ' ' . 
                   (is_array($value) ? print_r($value, true) : $value) . "\n";
    }
    
    // Save to file
    if (file_put_contents($filepath, $content) !== false) {
        return ['success' => true, 'file' => $filename];
    }
    
    return ['success' => false, 'error' => 'Could not save submission'];
}

/**
 * Get all saved submissions
 */
function get_saved_submissions() {
    global $submissionsDir;
    $submissions = [];
    
    if (is_dir($submissionsDir)) {
        $files = glob($submissionsDir . '/submission_*.txt');
        rsort($files); // Newest first
        
        foreach ($files as $file) {
            $submissions[] = [
                'filename' => basename($file),
                'path' => $file,
                'timestamp' => filemtime($file),
                'content' => file_get_contents($file)
            ];
        }
    }
    
    return $submissions;
}
?>
