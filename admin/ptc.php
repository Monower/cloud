<?php 
include '../db/dbconnect.php';
$conn=$obj1->open();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    
    <link rel="stylesheet" href="ads.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<title>ptc</title>
</head>
<body>



<div class="rowad">
  <div class="columnad leftad" >
    <div class="grid-container left">
    <div class="side1">
                    <div class="item">
                        <a href="index.html">Index</a>
                    </div>
                    <div class="item">
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
                    <div class="item activec">
                        <a href="ptc.php">project type and Cost</a>
                    </div>
                    <div class="item">
                        <a href="cf.php">Chat Filter </a>
                    </div>
                </div>  

   
    
  </div>
  </div>
  <div class="columnad rightad" >
    <table class="blueTable">
        <thead>
        <tr>
          <th> Project Type </th>  
          <th> Project Subtype </th> 
          <th> estimated time  </th> 
          <th> project cost </th>
          <th> express delivery time </th>
          <th> express delivery cost </th>
          <th>cloud skill<th>
  
        </tr>
        </thead>
   
        <tbody>
            <?php 
                $sql="SELECT * FROM categories";
                $result=$conn->query($sql);

                if ($result==true) {
                  while($row1=$result->fetch_assoc()){

                        //echo $row1['id']."<br>";
                        $sub_id=$row1['id'];

                        $sql2="SELECT * FROM sub_category WHERE parent_id=$sub_id";
                        $result2=$conn->query($sql2);

                        if ($result2==true) {
                          while ($row2=$result2->fetch_assoc()) {

                            //echo $row2['sub_category']."<br>";
                            $express_id=$row2['id'];
                            $sql3="SELECT * FROM express WHERE parent_id=$express_id";
                            $result3=$conn->query($sql3);

                            if ($result3==true) {
                              while ($row3=$result3->fetch_assoc()) {
                                //echo $row3['delivery_time']."<br>";
                                ?>
                                    <tr><td><?php echo $row1['name']; ?></td><td><?php echo $row2['sub_category']; ?></td><td><?php echo $row2['estimated_time']; ?></td><td><?php echo $row2['project_cost']."$"; ?></td><td><?php echo $row3['delivery_time']; ?></td><td><?php echo $row3['delivery_cost']."$"; ?></td><td><?php echo $row2['cloud_skill']; ?></td></tr>
                                <?php
                              }
                            }

                          }
                        }
            
                    }
              }
            
            
            ?>

        </tbody>
        </tr>
        </table>

</div>
  </div>
</div>

</body>
</html>
