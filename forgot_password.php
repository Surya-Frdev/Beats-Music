<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer

if (isset($_POST['forgot_submit'])) {
    $to_email = $_POST['forgot_email']; // Get user email

    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Your Gmail
        $mail->Password = 'your-app-password'; // Your App Password (not your Gmail password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Settings
        $mail->setFrom('your-email@gmail.com', 'Beats Music');
        $mail->addAddress($to_email);
        $mail->Subject = "Password Reset Request";
        $reset_link = "https://example.com/reset-password?token=" . md5($to_email . time());
        $mail->Body = "Click this link to reset your password: " . $reset_link;
        $mail->send();

        echo "A password reset link has been sent to " . $to_email;
    } catch (Exception $e) {
        echo "Email sending failed: " . $mail->ErrorInfo;
    }
}
?>
