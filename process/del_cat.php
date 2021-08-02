<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$id=$_POST['id'];

$sql="DELETE FROM categories WHERE id=$id";
$sql2="DELETE FROM sub_category WHERE parent_id=$id";

if ($conn->query($sql)==true) {
    if ($conn->query($sql2)==true) {
        header('location: ../admin/add.php');
    }else{
        echo "ERROR: ".$conn->error;
    }
}else{
    echo "ERROR: ".$conn->error;
}





?>