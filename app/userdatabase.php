<?php

date_default_timezone_set('Asia/Kolkata'); 
$thisTime = date("Y-m-d h:i:sa");

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

 $applicant = "INSERT INTO `applicants` (`id`, `name`, `phone`, `email`, `expertise`, `explaination`, `cvFile`, `hired`, `note`, `applytime`, `mail`) VALUES (NULL, '$name', '$phone', '$email', '$feild', '$explain', '$cvUpload', '', '', '$thisTime', '')";
  echo $applicant;
 $reqAppli = $conn->exec($applicant);
 if($reqAppli = true){
     //send mail to the applicant and the autor
     require "applicant/mailsys.php";
 }else{
    echo
    "
<script>
    alert('Something happen wrong in our side please try again later.');
    window.location = '/jobs';
</script>
";
 }