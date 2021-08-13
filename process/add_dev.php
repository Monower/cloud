<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$dname=$_POST['dev_name'];
$dmail=$_POST['dev_mail'];
$dphn=$_POST['dev_num'];
$dc=$_POST['dev_c'];
$dlink=$_POST['dev_link'];
$dskill=$_POST['dev_skill'];
$dtext=$_POST['dev_text'];

if (empty($dskill) and empty($dtext)) {
    header('location: ../pages/signup.php?error2=please specify at least one skill');
    //echo $_POST['dev_skill'],$_POST['dev_text'];
}else {
    $sql="INSERT INTO applications(name,email,phn,country,link,skill,talents)
            VALUES('$dname','$dmail','$dphn','$dc','$dlink','$dskill','$dtext')";

    if (mysqli_query($conn,$sql)) {
        //echo "client added successfully...";
        //header('location: ../pages/profileclient.php');
        ?>
            <script>
                alert('your application is submitted successfully.');
            </script>
        <?php
    }
    else{
        echo 'ERROR: '.$conn->error;
    }
}








?>