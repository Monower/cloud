<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$cat=$_POST['category'];

$sql="INSERT INTO categories(name) VALUES('$cat')";
if (mysqli_query($conn,$sql)) {
    echo 'user added...';
}
else{
    echo 'ERROR: '.mysqli_error($conn);
}





?>