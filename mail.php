<?php
if (isset($_POST['submit'])) {

    //set time and date
    date_default_timezone_set('Asia/Kolkata'); 
    $thisTime = date("Y-m-d h:i:sa");


    $mainRec = 'dharm050@TAPI.RE';
    $host = 'smtp.elasticemail.com'; // the smtp host
    $uname = 'touchlcdindia@gmail.com'; //smtp user name
    $pass = '377d7399-ff49-4c61-beb1-35896528d198'; // smtp password
    $port = 2525;  //smtp port


$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $message = $_POST['message'];



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personnelwebsite";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = "INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `message`, `time`, `sent`, `client`) VALUES (NULL, '$name', '$phone', '$email', '$message', '', '', '')";
    
    if($conn->exec($sql)){
        $bodey = "Phone = $phone, email = $email name = $name, <br/> message => <br/> $message";
        require 'mailPhpmail.php';
        }

    //body
} else {
    echo
        "
    <script>
        alert('You are not allowed on this page');
        window.location = '/';
    </script>
    ";
}
