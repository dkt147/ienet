<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['EMAIL']) && isset($_GET['location'])) {

        $email = trim($_GET['EMAIL']);
        // $email = 'huzaifa2582003@gmail.com';
        $location = trim($_GET['location']);
        $location = htmlspecialchars($location, ENT_QUOTES, 'UTF-8');
        // Determine if it's an email or phone

        $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        $label = $isEmail ? 'Email' : 'WhatsApp';

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                         //Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'server230.web-hosting.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'test@walanet.online';                     //SMTP username
        $mail->Password   = 'KF?-(^p1T$5(';                               //SMTP password
        $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->setFrom('test@walanet.online', 'Admin');
        //Add a recipient
        $mail->addAddress($email, $email);
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'User Check Availability';
        $mail->Body = "
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .header {
      background-color: #007BFF;
      color: white;
      padding: 10px 20px;
      border-radius: 6px 6px 0 0;
      font-size: 20px;
    }
    .content {
      padding: 20px;
    }
    .footer {
      font-size: 12px;
      color: #777;
      text-align: center;
      margin-top: 20px;
    }
    .highlight {
      font-weight: bold;
      color: #007BFF;
    }
  </style>
</head>
<body>
  <div class='container'>
    <div class='header'>🚨 New Request Received</div>
    <div class='content'>
      <p>Hi Team,</p>
      <p>You have received a new request with the following details:</p>
      <p><strong>$label:</strong> <span class='highlight'>$email</span></p>
      <p><strong>Location:</strong> <span class='highlight'>$location</span></p>
      <p>Please review and take the necessary action.</p>
      <p>Thanks,<br>www.ienet-php-main/index-one-page</p>
    </div>
    <div class='footer'>
      This is an automated message. Please do not reply.
    </div>
  </div>
</body>
</html>";


        if ($mail->send()) {
            $is_email = 1;
            echo json_encode(["status" => 200, "message" => "Email Sent successfully."]);
            exit;
        } else {
            echo json_encode([
                'status' => 400,
                'message' => "Something went wrong in email sending."
            ]);
        }
    } else {
        echo json_encode([
            'status' => 400,
            'message' => "Missing required fields."
        ]);
    }
} else {
    echo json_encode([
        'status' => 405,
        'message' => "Invalid request method"
    ]);
}
