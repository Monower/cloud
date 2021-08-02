<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$id=$_POST['id'];
$category=$_POST['cat'];

$sql="UPDATE categories SET name='$category' WHERE id=$id";
if ($conn->query($sql)==true) {
    header('location: ../admin/add.php');
}else{
    echo "error updating record...".$conn->error;
}




?>