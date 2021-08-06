<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();

$id=$_POST['id'];

$sql="SELECT * FROM sub_category WHERE id=$id";
$sql2="SELECT * FROM express WHERE parent_id=$id";
$result=$conn->query($sql);
$result2=$conn->query($sql2);

if ($result==true) {
    while ($row=$result->fetch_assoc()) {
        if ($result2==true) {
            while ($row2=$result2->fetch_assoc()) {
                
            
            
        
                    ?>  
                        Update Sub Category:
                        <form action="../process/update_sub_cat_pro.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            Parent ID: <input type="number" value="<?php echo $row['parent_id']; ?>" name="pid"><br>
                            Sub Category: <input type="text" value="<?php echo $row['sub_category']; ?>" name="sc"><br>
                            Estimated Time: <input type="text" value="<?php echo $row['estimated_time']; ?>" name="et"><br>
                            Project Cost: <input type="number" value="<?php echo $row['project_cost']; ?>" name="pc"><br>
                            cloud Skill: <input type="text" value="<?php echo $row['cloud_skill']; ?>" name="cs"><br>
                            Express Delivery Time: <input type="text" value="<?php echo $row2['delivery_time']; ?>" name="edt"><br>
                            Express Delivery Cost: <input type="number" value="<?php echo $row2['delivery_cost']; ?>" name="edc"><br>
                            <input type="submit" value="update">
                        </form>
                    <?php
            }
        }
        else{
            echo "ERROR: ".$conn->error;
        }
    }
}
?>
