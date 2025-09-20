<?php
/**
 * Simple Form Test - No Email Dependencies
 */

// Test form submission without email functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $projectType = $_POST['projectType'] ?? '';
    $message = $_POST['message'] ?? '';

    // Simple validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($projectType) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
        exit;
    }

    // Log submission (no email sent)
    error_log("Form submitted: $email - $projectType");

    // Always return success
    echo json_encode(['success' => true, 'message' => 'Thank you! Your inquiry has been received.']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        .form-group { margin: 10px 0; }
        input, select, textarea { width: 100%; padding: 8px; }
        button { background: #007cba; color: white; padding: 10px 20px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Simple Contact Form Test</h1>
    <form method="POST">
        <div class="form-group">
            <label>First Name *</label>
            <input type="text" name="firstName" required>
        </div>
        <div class="form-group">
            <label>Last Name *</label>
            <input type="text" name="lastName" required>
        </div>
        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="phone">
        </div>
        <div class="form-group">
            <label>Project Type *</label>
            <select name="projectType" required>
                <option value="">Select...</option>
                <option value="living">Living Room</option>
                <option value="bedroom">Bedroom</option>
                <option value="kitchen">Kitchen</option>
                <option value="office">Office</option>
            </select>
        </div>
        <div class="form-group">
            <label>Message *</label>
            <textarea name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

    <div id="result"></div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('result').innerHTML =
                    '<p style="color: ' + (data.success ? 'green' : 'red') + '">' + data.message + '</p>';
            });
        });
    </script>
</body>
</html>
