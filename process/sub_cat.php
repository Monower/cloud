<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();
$options="";
$id=$_POST['id'];

$sql="SELECT sub_category FROM sub_category WHERE parent_id=$id";
$result=$conn->query($sql);

/* if ($result==true) {
    while($row=$result->fetch_assoc()){
          //echo $row['sub_category'];
          $options.=$row['sub_category'];
      }
}

echo $options; */

$options=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($options);




?>