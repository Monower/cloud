<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta
    charset="UTF-8">
    <link rel="stylesheet" href="ads.css"> 
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
                        <a href="index.html">Index</a>
                    </div>
                    <div class="item  activec">
                        <a href="add.php">Add Services</a>
                    </div>
                    <div class="item">
                        <a href="pd.php">Project Distribution</a>
                    </div>
                    <div class="item">
                        <a href="pdr.php">Project Distributor</a>
                    </div>
                    <div class="item">
                        <a href="md.php">Money Distribution</a>
                    </div>
                    <div class="item">
                        <a href="clientd.php">Client Details</a>
                    </div>

                    <div class="item">
                        <a href="cc.php">Registered Cloud Details</a>
                    </div>
                    <div class="item">
                        <a href="ptc.php">project type and Cost</a>
                    </div>
                    <div class="item">
                        <a href="cf.php">Chat Filter </a>
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

<table class="blueTable">
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
<form id="add_sub_cat_form">
  Parent ID<span style="color: red">*</span>: <input id="id2" type="number" required><br>
  Name of Subcategory<span style="color: red">*</span>: <input id="id3" type="text" required><br>
  Estimated Time<span style="color: red">*</span>: <input id="id4" type="text" required><br>
  Project Cost<span style="color: red">*</span>: <input id="id5" type="number" required><br>
  Express Delivery Time<span style="color: red">*</span>: <input id="id6" type="text" required><br>
  Express Delivery Cost<span style="color: red">*</span>: <input id="id7" type="number" required><br>
  Cloud Skill<span style="color: red">*</span>: <input id="id8" type="text" required><br>
  <input type="submit" value="submit">
  <button id="id1">cancel</button>
</form>
</div>
<table class="blueTable">
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
                                    <td><?php echo $row2['project_cost']."$"; ?></td>
                                    <td><?php echo $row3['delivery_time']; ?></td>
                                    <td><?php echo $row3['delivery_cost']."$"; ?></td>
                                    <td><?php echo $row2['cloud_skill']; ?></td>
                                    <td><form action="../process/update_sub_cat.php" method="post"><input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
                                      <input type="submit" value="edit">
                                        </form>
                                        <form action="../process/del_sub_cat.php" method="post">
                                          <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
                                          <input type="submit" value="delete">
                                        
                                        </form>
                                      </td>
                              
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
      $('#add_sub_cat_form').submit(function(e){
        e.preventDefault();

        let pid=$('#id2').val();
        let nosub=$('#id3').val();
        let et=$('#id4').val();
        let pc=$('#id5').val();
        let edt=$('#id6').val();
        let edc=$('#id7').val();
        let cs=$('#id8').val();

        $.ajax({
          type: 'POST',
          url: '../process/add_sub_cat.php',
          data: {parentid: pid,name_ofsub: nosub,est: et,pc: pc,edt: edt, edc: edc, cs:cs},
          success: function(data){
            alert(data);
          }
        })


      })
      $('#id1').click(function(){
        $('#addsubcat').css('display','none');

      })
  })
</script>
</body>
</html>