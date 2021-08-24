<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="stl.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>

    </style>
</head>
<body>



<div class="rowad">
  <div class="columnad leftad" >
             <div class="grid-container left">
    
                 <div class="side1">
                    <div class="item">
                        <a href="index.php">logout</a>
                    </div>
                    <div class="item">
                        <a href="home.php">Dashboard</a>
                    </div>
                    <div class="item activec">
                        <a href="quality.php">Quality Control</a>
                    </div>
                    <div class="item">
                        <a href="add.php">Add Services</a>
                    </div>
                    <div class="item">
                        <a href="pd.php">Distributed projects</a>
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
                    <!-- -->
                    <div class="item">
                        <a href="cf.php">Chat Filter </a>
                    </div>
                </div>


    
            </div>
  </div>
  <div class="columnad rightad">
        <table class="blueTable">
        <thead>
        <tr>
        <th>Subcatagory</th><th>Title</th><th>Price</th><th>short description</th><th>showcase</th><th>Review</th> 
            
  
        </tr>
        </thead>
        
        <tbody>
        <tr>
        <td>logo design</td><td>CBD logo</td><td>$30</td><td>he wanted a cde version of the logo</td><td><a target="_blank" href="../images/ppp.jpg"><img src="../images/ppp.jpg"></a></td><td style="display:flex;flex-direction:column"><button>showcase</button><button>change</button></td></tr>
        
        </tbody>
        </tr>
        </table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud";

$filename   = isset($_FILES["uploadfile"]["name"]);
$tempname   = isset($_FILES["uploadfile"]["tmp_name"]);
$folder     = "image/" . $filename;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, price, shortdes,livelink,filename FROM showcase";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=" . "blueTable" . ">"."<thead>" . "<tr><th>id</th><th>Title</th>  <th>price</th>  <th>short Description</th>  <th>Livelink</th>  <th>Image</th> </tr>"."</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>" . $row["price"]. "</td><td>" . $row["shortdes"]. "</td><td>" . $row["livelink"]. "</td><td>" . "<a target=_blank ". "href=/cloudtest/images/showcase/" . $row["filename"] .">"."<img src=/cloudtest/images/showcase/" . $row["filename"] . ">" . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
 
    </div>
</div>



</body>
<script>
    function opForm() {
        document.getElementById("myFormc").style.display = "block";
    }

    function clForm() {
        document.getElementById("myFormc").style.display = "none";
    }
</script>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>