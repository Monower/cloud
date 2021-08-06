<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$pid=$_POST['parentid'];
$nosub=$_POST['name_ofsub'];
$et=$_POST['est'];
$pc=$_POST['pc'];
$edt=$_POST['edt'];
$edc=$_POST['edc'];
$cs=$_POST['cs'];

$sql="INSERT INTO sub_category(parent_id,sub_category,estimated_time,project_cost,cloud_skill) 
        VALUES('$pid','$nosub','$et','$pc','$cs')";

if (mysqli_query($conn,$sql)) {
    //echo 'user added...';

    $sql3="SELECT id FROM sub_category WHERE parent_id=$pid";
    $result=$conn->query($sql3);
    if ($result==true){
        $row=$result->fetch_assoc();
        $sub_id=$row['id'];

        $sql2="INSERT INTO express(parent_id,delivery_time,delivery_cost)
        VALUES('$sub_id','$edt','$edc')";

        if (mysqli_query($conn,$sql2)) {
            //echo "sub category added successfully...";
        }
        else{
            echo 'ERROR: '.mysqli_error($conn);
        }

    }

    $sql2="INSERT INTO express(parent_id,delivery_time,delivery_cost)
            VALUES('$pid','$edt','$edc')";

    if (mysqli_query($conn,$sql2)) {
        echo "sub category added successfully...";
    }
    else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}
else{
    echo 'ERROR: '.mysqli_error($conn);
}



?>