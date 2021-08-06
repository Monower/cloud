<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$id=$_POST['id'];
$pid=$_POST['pid'];
$sc=$_POST['sc'];
$et=$_POST['et'];
$pc=$_POST['pc'];
$cs=$_POST['cs'];
$edt=$_POST['edt'];
$edc=$_POST['edc'];

$sql="UPDATE sub_category SET parent_id='$pid', sub_category='$sc', estimated_time='$et', project_cost='$pc', cloud_skill='$cs' WHERE id=$id";
if ($conn->query($sql)==true) {
    $sql2="UPDATE express SET delivery_time='$edt', delivery_cost='$edc' WHERE parent_id=$id";
    if ($conn->query($sql2)==true) {
        header('location: ../admin/add.php');
    }else{
        echo "error updating record...".$conn->error;
    }
}else{
    echo "ERROR: ".$conn->error;
}



?>