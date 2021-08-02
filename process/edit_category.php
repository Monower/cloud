<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();
$id=$_POST['id'];

$sql="SELECT * FROM categories WHERE id=$id";
$result=$conn->query($sql);
if ($result==true) {
/*     while ($row=$result->fetch_assoc()) {
        echo $row['name'];
    } */

    $row=$result->fetch_assoc();
    //echo $row['name'];
    ?>
        <form action="../process/edit_category2.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            EDIT category: <input type="text" value="<?php echo $row['name']; ?>" name="cat">
            <input type="submit" value="confirm">
        </form>
    
    
    <?php
}





?>