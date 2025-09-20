<?php
/**
 * Email Configuration for Development Environment
 * Alternative email handling for XAMPP without SMTP setup
 */

function send_contact_email($formData, $pdfPath = null) {
    // Save form submission to file for development
    $timestamp = date('Y-m-d_H-i-s');
    $filename = "contact_submission_{$timestamp}.txt";
    $filepath = __DIR__ . "/submissions/{$filename}";
    
    // Create submissions directory if it doesn't exist
    $dir = __DIR__ . "/submissions";
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    
    // Set recipient email
    $to = 'zathishkumar@gmail.com';
    
    // Format submission data
    $content = "=== CONTACT FORM SUBMISSION ===\n";
    $content .= "Submitted: " . date('F j, Y \a\t g:i A') . "\n";
    $content .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
    
    $content .= "CLIENT INFORMATION:\n";
    $content .= "Name: {$formData['firstName']} {$formData['lastName']}\n";
    $content .= "Email: {$formData['email']}\n";
    $content .= "Phone: " . ($formData['phone'] ?: 'Not provided') . "\n\n";
    
    $content .= "PROJECT DETAILS:\n";
    $content .= "Project Type: {$formData['projectType']}\n";
    $content .= "Budget Range: " . ($formData['budget'] ?: 'Not specified') . "\n";
    $content .= "Timeline: " . ($formData['timeline'] ?: 'Not specified') . "\n\n";
    
    $content .= "PROJECT DESCRIPTION:\n";
    $content .= $formData['message'] . "\n\n";
    
    // Add uploaded files information
    if (!empty($formData['uploadedFiles'])) {
        $content .= "UPLOADED DOCUMENTS:\n";
        foreach ($formData['uploadedFiles'] as $file) {
            $content .= "- {$file['original_name']} ({$file['file_size']} bytes)\n";
            $content .= "  Stored as: {$file['stored_name']}\n";
            $content .= "  Path: {$file['file_path']}\n";
        }
        $content .= "\n";
    } else {
        $content .= "UPLOADED DOCUMENTS: None\n\n";
    }
    
    if ($pdfPath && file_exists($pdfPath)) {
        $content .= "PDF Generated: Yes\n";
        $content .= "PDF Path: {$pdfPath}\n";
    } else {
        $content .= "PDF Generated: No\n";
    }
    
    $content .= "\n" . str_repeat("=", 50) . "\n";
    
    // Save to file
    file_put_contents($filepath, $content);
    
    // Send email with form data
    $subject = "New Project Inquiry - " . ($formData['projectType'] ?? 'Website Form');
    $headers = "From: " . ($formData['email'] ?? 'noreply@mahatiinteriors.com') . "\r\n";
    $headers .= "Reply-To: " . ($formData['email'] ?? 'noreply@mahatiinteriors.com') . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send the email
    $mail_sent = mail($to, $subject, $content, $headers);
    
    // Return true if mail was sent successfully, false otherwise
    return $mail_sent;
}

/**
 * Get all contact submissions for admin review
 */
function get_contact_submissions() {
    $dir = __DIR__ . "/submissions";
    $submissions = [];
    
    if (is_dir($dir)) {
        $files = glob($dir . "/contact_submission_*.txt");
        foreach ($files as $file) {
            $submissions[] = [
                'file' => basename($file),
                'date' => filemtime($file),
                'content' => file_get_contents($file)
            ];
        }
        
        // Sort by date (newest first)
        usort($submissions, function($a, $b) {
            return $b['date'] - $a['date'];
        });
    }
    
    return $submissions;
}
?>
