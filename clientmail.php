<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
echo "<br/> <h1>This is client side mail</h1>";
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
    $mail->addAddress($email, 'Dharmendra Shah');     // Add a recipient
   // $mail->addAddress('dharm050@TAPI.RE');               // Name is optional
   // $mail->addReplyTo('dharm050@TAPI.RE', 'Information');
   // $mail->addCC('dharm050@TAPI.RE');
   // $mail->addBCC('dharm050@TAPI.RE');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thank you note from Dharmendra Shah';
    $mail->Body    = "Dear $name <br/> I am very hopeful that you are contacted me through my website I will read it by my self try to understand what i can do about your message. Thanks <br/> dharmendra soni. <br/><small>NOTE :- This is a system generated message do not take it seriously! But keep in mind that it is true.</small>";
   // $mail->AltBody = $bodey;

    //$mail->send();
    //echo 'Message has been sent';
    if($mail->send()){
        $updateSQl = "UPDATE `messages` SET `sent` = 'true', `time` = '$thisTime' WHERE `messages`.`email` = '$email'";
        if($conn->exec($updateSQl)){
           // echo "The mail has been sent to the client and also updated to the database";
         echo "
         <script>
            window.location = '/thanks';
         </script>
         ";
        
        }
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