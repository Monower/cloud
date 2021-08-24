<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $title		= $_POST['title'];
	$price 		= $_POST['price'];
    $shortdes   = $_POST['shortdes'];
	$livelink	= $_POST['livelink'];
    $filename   = $_FILES["uploadfile"]["name"];
    $tempname   = $_FILES["uploadfile"]["tmp_name"];
    $folder     = "image/" . $filename;
// make connection with this one 
    $db = mysqli_connect("localhost", "root", "", "photos");
    // Get all the submitted data from the form
 
	$sql = "INSERT INTO image (title, price, shortdes, livelink, filename ) VALUES ('$title', '$price', '$shortdes', '$livelink','$filename')";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$title, $price, $shortdes, $livelink, $filename]);

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($db, "SELECT * FROM image");
while ($data = mysqli_fetch_array($result)) {

?>
  

<?php
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        #content {
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        form div {
            margin-top: 5px;
        }

        #img_div {
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }

        img {
        
            float: left;
            margin: 5px;
            width: 30px;
            height: 40px;
        }
    </style>
    <title>Image Upload</title>

</head>

<body>
    <div id="content">

        <form method="POST" action="" enctype="multipart/form-data">
        <label for="title"><b>title</b></label><br>
					<input class="form-control" id="title" type="text" name="title" required><br>

					<label for="price"><b>price</b></label><br>
					<input class="form-control" id="price"  type="text" name="price" required><br>

					<label for="shortdes"><b>short description</b></label><br>
					<input class="form-control" id="shortdes"  type="shortdes" name="shortdes" required><br>

					<label for="livelink"><b>Live link</b></label><br>
					<input class="form-control" id="livelink"  type="text" name="livelink" required><br>
                    <label ><b>Image</b></label>        <br> 
                    <input class="form-control" type="file" name="uploadfile" value="" /><br>

            <div>
                <button type="submit" name="upload">
                    UPLOAD
                </button>
            </div>
        </form>
    </div>

<div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photos";


$filename   = $_FILES["uploadfile"]["name"];
$tempname   = $_FILES["uploadfile"]["tmp_name"];
$folder     = "image/" . $filename;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, price, shortdes,livelink,filename FROM image";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>Title</th>  <th>price</th>  <th>short Description</th>  <th>Livelink</th>  <th>Image</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>" . $row["price"]. "</td><td>" . $row["shortdes"]. "</td><td>" . $row["livelink"]. "</td><td>" .  "<img src=image/" . $row["filename"] . ">" . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
</body>

</html>