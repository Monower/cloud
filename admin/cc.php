<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stl.css">
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
                    <div class="item">
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

                    <div class="item activec">
                        <a href="cc.php">Registered Cloud Details</a>
                    </div>
                    <!-- -->
                    <div class="item">
                        <a href="cf.php">Chat Filter </a>
                    </div>
                </div>    
  </div>
  </div>
  <div class="columnad rightad" >
 <!--  <table class="blueTable">
      <thead>
     <tr>
        <th> Userid </th>  
        <th> Name </th> 
        <th>skill</th>
        <th>espaciality</th>
        <th> Email </th> 
        <th> Password </th>
        <th> Phone number </th>
        <th> Country </th>
        <th> City </th>
        <th>earned ammount</th>
        <th>badges</th>
        
        

      </tr>
      </thead>
     -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,firstname, lastname, username, email, phone, country,skill,expertise, password  FROM clouddata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=" . "blueTable" . ">"."<thead>" . "<tr><th>User ID</th><th>First Name</th>  <th>Last Name</th>  <th>User Name</th>  <th>Email</th>  <th>Phone</th> <th>Country</th><th>Skill</th><th>Expertise</th> <th>Password</th> </tr>"."</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>"  . $row["phone"] . "</td><td>". $row["country"]. "</td><td>". $row["skill"] . "</td><td>". $row["expertise"]  . "</td><td>". $row["password"] . "</td></tr>";
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
</html>
