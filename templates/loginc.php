<?php 
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "cloud";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);
    $loginas = $_POST['loginas'];

    switch ($loginas) {
        case "employee":
	if (empty($username) && (empty($pass))) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else{ 
                $sql = "SELECT * FROM clouddata WHERE username='$username' AND password='$pass'";
                $result = mysqli_query($conn, $sql);

                do {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['username'] === $username && $row['password'] === $pass) {
                        $_SESSION['username'] = $row['username'];
            
                        $_SESSION['id'] = $row['id'];
                        header("Location:/cloudtest/pages/profilecloud.php");
                        exit();
                    }else{
                    header("Location: index.php?error=Incorect User name or password");
                    exit();
                }
            } while (mysqli_num_rows($result) === 1); 
            
        
    }
    break;

case "employer":
	if (empty($username) && (empty($pass))) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else{ 
                $sql = "SELECT * FROM clientdata WHERE username='$username' AND password='$pass'";
                $result = mysqli_query($conn, $sql);

                do {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['username'] === $username && $row['password'] === $pass) {
                        $_SESSION['username'] = $row['username'];
            
                        $_SESSION['id'] = $row['id'];
                        header("Location:/cloudtest/pages/profileclient.php");
                        exit();
                    }else{
                    header("Location: index.php?error=Incorect User name or password");
                    exit();
                }
            } while (mysqli_num_rows($result) === 1); 
            
        
    }
}





}