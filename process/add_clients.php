<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$cname=$_POST['cname'];
$cmail=$_POST['cmail'];
$ccountry=$_POST['ccountry'];
$cpass=$_POST['cpass'];
$recpass=$_POST['recpass'];
//echo $cname,$cmail,$ccountry,$cpass,$recpass;

$sql="SELECT * from clients";
$result=$conn->query($sql);

if ($result==true) {
    while ($row=$result->fetch_assoc()) {
        if ($cname==$row['user_name']) {
            header('location: ../pages/signup.php?error=user name already exists');
        }elseif ($cmail==$row['email']) {
            header('location: ../pages/signup.php?error=email already exists');
        }elseif ($cpass!=$recpass) {
            header("location: ../pages/signup.php?error=retyped password doesn't match");
        }
    }
}else{
    echo "ERROR: ".$conn->error;
}

$sql2="INSERT INTO clients(user_name,email,password,country)
VALUES('$cname','$cmail','$cpass','$ccountry')";

if (mysqli_query($conn,$sql2)) {
    //echo "client added successfully...";
    header('location: ../pages/profileclient.php');
}
else{
    echo 'ERROR: '.$conn->error;
}









?>