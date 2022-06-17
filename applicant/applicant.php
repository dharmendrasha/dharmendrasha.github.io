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
    $mail->addAddress($email, $name);     // Add a recipient
   // $mail->addAddress('dharm050@TAPI.RE');               // Name is optional
   // $mail->addReplyTo('dharm050@TAPI.RE', 'Information');
   // $mail->addCC('dharm050@TAPI.RE');
   // $mail->addBCC('dharm050@TAPI.RE');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Dear '.$name.' dharmendraShah. is reviewing your CV.';
    $mail->Body    = "Dear $name <br/> I am so happy that you are applied with me for doing some exciting projects together in near future we will work together on many projects as your expertise. <br/> We will call you as soon as possible we can";
  //  $mail->AltBody = $bodey;

    //$mail->send();
    //echo 'Message has been sent';
    if($mail->send()){
      //  require "clientmail.php";
     // echo "mail has been sent";//\
     //this should has to be sent to the applicant
     $uploadApplicant = "UPDATE `applicants` SET `mail` = 'sent' WHERE `applicants`.`mail` = '$email'";
    // $updateAPlo = $conn->exec($uploadApplicant);
     if($conn->exec($uploadApplicant)){
        echo "
        <script>
         window.location = '/thanks';
        </script>
        ";
        }else{
            echo "
            <script>
             alert('Something Happen Wrong. Please Try Again later');
             window.location = '/';
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