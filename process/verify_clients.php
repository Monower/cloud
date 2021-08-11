<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$cname=$_POST['cname'];
echo $cname;

$sql="SELECT * FROM clients";
$result=$conn->query($sql);

if ($result==true) {
    while ($row=$result->fetch_assoc()) {
        if ($cname==$row['user_name']) {
            echo "user name already exits...";
            break;
        }
    }
}else{
    echo "ERROR: ".$conn->error;
}










?>