<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $host;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $uname;                     // SMTP username
    $mail->Password   = $pass;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = $port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('touchlcdindia@gmail.com', 'Administrator');
    $mail->addAddress($admin, 'Dharmendra Shah');     // Add a recipient
   // $mail->addAddress('dharm050@TAPI.RE');               // Name is optional
   // $mail->addReplyTo('dharm050@TAPI.RE', 'Information');
   // $mail->addCC('dharm050@TAPI.RE');
   // $mail->addBCC('dharm050@TAPI.RE');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'This is the serious message from your personnel message';
    $mail->Body    = $bodey;
    $mail->AltBody = $bodey;

    //$mail->send();
    //echo 'Message has been sent';
    if($mail->send()){
        require "clientmail.php";
    }
} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   echo "
   <script>
    alert('Something Happen Wrong. Please Try Again later');
    window.location = '/';
   </script>
   ";
}