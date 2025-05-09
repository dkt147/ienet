<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['EMAIL']) && isset($_GET['location'])) {
        $email = trim($_GET['EMAIL']);
        $location = htmlspecialchars(trim($_GET['location']), ENT_QUOTES, 'UTF-8');

        $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        $label = $isEmail ? 'Email' : 'WhatsApp';

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'server230.web-hosting.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'test@walanet.online';
            $mail->Password = 'KF?-(^p1T$5('; // Make sure this is secured in production!
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->setFrom('test@walanet.online', 'Admin');
            $mail->addAddress('test@walanet.online', 'New Request');
            $mail->isHTML(true);
            $mail->Subject = 'User Check Availability';
            $mail->Body = "<html><body><h3>New Request</h3><p><strong>$label:</strong> $email</p><p><strong>Location:</strong> $location</p></body></html>";

            if ($mail->send()) {
                echo json_encode(["status" => 200, "message" => "Email Sent successfully."]);
            } else {
                echo json_encode(["status" => 400, "message" => "Email sending failed."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => 500, "message" => "Mailer Error: " . $e->getMessage()]);
        }
    } else {
        echo json_encode(["status" => 400, "message" => "Missing required fields."]);
    }
} else {
    echo json_encode(["status" => 405, "message" => "Invalid request method"]);
}
