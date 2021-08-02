<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="rowad">
  <div class="columnad leftad" >
    <div class="grid-container left">
      <div class="side1">
        <div class="item">
          <a  href="pdr.php">Project Distributor</a>
        </div>
          <div class="item">
          <a href="md.php">Money Distribution</a>
          </div>
          <div class="item">
               <a href="clientd.php">Client Details</a>
          </div>

          <div class="item">
              <a href="cc.php">Cloud Details</a>
          </div>
          <div class="item activec">
            <a href="ptc.php">project type and Cost</a>
          </div>
          <div class="item">
            <a href="cf.php">Chat Filter </a>
          </div>
          <div class="item">
            <a href="add.php">Add</a>
          </div>

       </div>

   
        <div class="side2">
          <p>Website View</p>
            <div class="item">
       
            </div>
            <p>total members </p>
            <div class="item">
       
            </div>
            <p>active members</p>
            <div class="item">
       
            </div>
      </div>
  </div>
</div>
Categories:
<div id="addcat" style="display: none">
  Add new category: <input type="text" id="catval" placeholder="enter category name">
  <button id="addcat1">Add</button>
  <button id="catcancel">cancel</button>
</div>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th><button id="addcatbtn">+</button></th>
    </tr>
  </thead>
  <tbody>
      <?php 
           $sql="SELECT * FROM categories";
           $result=$conn->query($sql);

           if ($result==true) {
             while ($row1=$result->fetch_assoc()) {
               ?>
                  <tr><td><?php echo $row1['id']; ?></td><td><?php echo $row1['name']; ?></td><td><form action="../process/edit_category.php" method="post"><input type="hidden" name="id" value="<?php echo $row1['id']; ?>"><button type="submit">Edit</button></form><form action="../process/del_cat.php" method="post"><input type="hidden" name="id" value="<?php echo $row1['id']; ?>"><input type="submit" value="Delete"></form></td></tr>

               <?php
             }
           }
      
      
      
      
      ?>
  </tbody>
</table>

<br>
Sub-categories with all details:
<div id="addsubcat" style="display: none">
ADD NEW SUB-CATEGORY with DETAILS:
</div>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Parent_id</th>
      <th>Name</th>
      <th>Estimated time</th>
      <th>Project Cost</th>
      <th>Express delivery time</th>
      <th>Express delivery cost</th>
      <th>Cloud Skill</th>
      <th><button id="addsubcat_btn">+</button></th>
    </tr>
  </thead>
  <tbody>
    <?php 
                   $sql1="SELECT * FROM sub_category";
                   $result1=$conn->query($sql1);

                   if ($result1==true) {
                     while ($row2=$result1->fetch_assoc()) {
                       $parent_id=$row2['id'];

                       $sql2="SELECT * FROM express WHERE parent_id=$parent_id";
                       $result2=$conn->query($sql2);

                       if ($result2==true) {
                         while ($row3=$result2->fetch_assoc()) {
                            ?>

                                <tr><td><?php echo $row2['id']; ?></td>
                                    <td><?php echo $row2['parent_id']; ?></td>
                                    <td><?php echo $row2['sub_category']; ?></td>
                                    <td><?php echo $row2['estimated_time']; ?></td>
                                    <td><?php echo $row2['project_cost']; ?></td>
                                    <td><?php echo $row3['delivery_time']; ?></td>
                                    <td><?php echo $row3['delivery_cost']; ?></td>
                                    <td><?php echo $row2['cloud_skill']; ?></td>
                                    <td><button>Edit</button><button>Delete</button></td>
                              
                                </tr>

                            <?php
                         }
                       }
                     }
                   }
    
    ?>
  </tbody>
</table>
<br>
<br>

<script>
  $(document).ready(function(){

      // add category
      $('#addcatbtn').click(function(){
        $('#addcat').css('display','block');
      })
      $('#catcancel').click(function(){
        $('#addcat').css('display','none');
      })

      $('#addcat1').click(function(){
        let category=$('#catval').val();
        
        $.ajax({
          type: 'POST',
          url: '../process/add_cat.php',
          data: {category: category},
          success: function(){
            alert('category added successfully...');
          }
        })
      })

      // add sub category
      $('#addsubcat_btn').click(function(){
        $("#addsubcat").css('display','block');
      })
  })
</script>
</body>
</html>