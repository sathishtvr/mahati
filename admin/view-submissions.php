<?php
/**
 * Admin Panel - View Contact Form Submissions
 * For development environment without email setup
 */

require_once '../includes/config.php';
require_once '../includes/email-config.php';

// Simple authentication (for development only)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['admin_password']) && $_POST['admin_password'] === 'mahati2025') {
        $_SESSION['admin_logged_in'] = true;
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Admin Login - Mahati Interior Design</title>
            <style>
                body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 50px; }
                .login-form { max-width: 400px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; }
                input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
                button { background: #00d4aa; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; }
            </style>
        </head>
        <body>
            <div class="login-form">
                <h2>Admin Access</h2>
                <form method="POST">
                    <input type="password" name="admin_password" placeholder="Enter admin password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

$submissions = get_contact_submissions();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Submissions - Mahati Interior Design</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .header { background: linear-gradient(135deg, #00d4aa, #00b894); color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; }
        .submission { background: white; margin: 15px 0; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .submission-header { background: #f8f9fa; padding: 15px; margin: -20px -20px 15px -20px; border-radius: 10px 10px 0 0; }
        .field { margin: 8px 0; }
        .label { font-weight: bold; color: #333; }
        .value { color: #666; margin-left: 10px; }
        .message { background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .logout { float: right; background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 5px; text-decoration: none; color: white; }
        .no-submissions { text-align: center; color: #666; padding: 50px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Contact Form Submissions</h1>
        <p>Mahati Interior Design - Admin Panel</p>
        <a href="?logout=1" class="logout">Logout</a>
    </div>

    <?php if (isset($_GET['logout'])): session_destroy(); header('Location: view-submissions.php'); exit; endif; ?>

    <?php if (empty($submissions)): ?>
        <div class="no-submissions">
            <h3>No submissions yet</h3>
            <p>Contact form submissions will appear here when the form is used.</p>
        </div>
    <?php else: ?>
        <?php foreach ($submissions as $submission): ?>
            <div class="submission">
                <div class="submission-header">
                    <strong>Submission: <?= basename($submission['file']) ?></strong>
                    <span style="float: right; color: #666;">
                        <?= date('F j, Y \a\t g:i A', $submission['date']) ?>
                    </span>
                </div>
                <pre style="white-space: pre-wrap; font-family: Arial, sans-serif; line-height: 1.6;"><?= htmlspecialchars($submission['content']) ?></pre>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <div style="text-align: center; margin-top: 30px; color: #666;">
        <p>Total Submissions: <?= count($submissions) ?></p>
        <p><small>This is a development interface. In production, use proper email configuration.</small></p>
    </div>
</body>
</html>
