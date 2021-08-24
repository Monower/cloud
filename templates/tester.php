<?php

	include("logint.php");

	$username=$_SESSION['username'];
            
	$id	=$_SESSION['id'];


$sql = "SELECT * FROM clientdata ";

$sql = "SELECT id,firstname, lastname, username, email, phone, country, password  FROM clientdata WHERE username='$username' AND id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["id"]."</p><p>". $row["firstname"] ."</p><p>". $row["lastname"] ."</p><p>". $row["username"]."</p><p>". $row["email"]."</p><p>" . $row["phone"]."</p><p>" .  $row["country"] ."</p><p>".  $row["password"] ."</p>";
    }
  
} else {
    echo "0 results";
}
?>