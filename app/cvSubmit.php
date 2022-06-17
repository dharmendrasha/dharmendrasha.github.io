<?php
if(isset($_POST['cvSubmit'])){
    $name = $_POST['Full_Name'];
    $phone = $_POST['PhoneNum'];
    $email = $_POST['email'];
    $feild = $_POST['feild'];
    $explain = $_POST['explainYourself'];
    
    if(isset($_FILES['cv'])){
    
        //file upload script
        $fileName = $_FILES['cv']['name'];
        $fileTmpName = $_FILES['cv']['tmp_name'];
        $fileSize = $_FILES['cv']['size'];
        $fileError = $_FILES['cv']['error'];
        $fileType = $_FILES['cv']['type'];
     
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
     
        $allowed = array('pdf');
     
     
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 500000){
                    $fileNameNew = uniqid('', true)."__$name"."__cv__".$phone."__.".$fileActualExt;
                    $cvUpload = 'resume/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $cvUpload);
                    require "app/userdatabase.php";
                }else 
                echo
                "
            <script>
                alert('The file you are trying to upload is Big Please try to upload the small file size < 4.8 MB');
                window.location = '/jobs';
            </script>
            ";            }else {
                echo
                "
            <script>
                alert('There is an error to upload the file. Please try again later');
                window.location = '/jobs';
            </script>
            ";            }
        }else
        {
            echo
            "
        <script>
            alert('The file you are trying to upload is not valid please upload a PDF to upload');
            window.location = '/jobs';
        </script>
        ";
        }
        //insert into variable
       // $pgmark = $_FILES['cv'];
    }else{
        echo
    "
<script>
    alert('Please select the PDF file to continue');
    window.location = '/jobs';
</script>
";
    }
    
    }else{
    echo
    "
<script>
    alert('You are not allowed on this page');
    window.location = '/jobs';
</script>
";
}