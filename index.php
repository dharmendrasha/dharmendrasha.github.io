<?php
if (isset($_GET['url'])) {
    
    $mainRec = 'touchlcdIndia@gmail.com';
    $admin = "dharmonly1999@gmail.com";
    $host = 'smtp.elasticemail.com'; // the smtp host
    $uname = 'touchlcdindia@gmail.com'; //smtp user name
    $pass = '377d7399-ff49-4c61-beb1-35896528d198'; // smtp password
    $port = 2525;  //smtp port


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    switch ($_GET['url']) {
        case '':
            require 'app/home.php';
            break;
        case 'contact':
            require 'mail.php';
            break;
        case 'thanks':
            require 'thanksPage.php';
            break;
        case 'jobs':
            require 'app/recruitment.php';
            break;
        case 'cvSubmit':
            require 'app/cvSubmit.php';
        break;
        default:
            require '404.php';
            break;
    }
} else {
    require 'app/home.php';
}
