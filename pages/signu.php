<?php
error_reporting(0);
?>
<?php include '../templates/head.php'; ?>
<?php
$msg = "";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $firstname		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
    $username       = $_POST['username'];
	$email      	= $_POST['email'];
    $phone      	= $_POST['phone'];
    $country      	= $_POST['country'];
    $password   	= $_POST['password'];
   
// make connection with this one 
    $db = mysqli_connect("localhost", "root", "", "cloud");
 // Get all the submitted data from the form
	$sql = "INSERT INTO clientdata (firstname, lastname, username, email, phone, country, password ) VALUES ('$firstname', '$lastname', '$username', '$email','$phone','$country','$password')";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $username, $email,$phone,$country, $password]);

   // Execute query
   mysqli_query($db, $sql);  
}
$result = mysqli_query($db, "SELECT * FROM clientdata");
?>

<title>
    Signup
</title>
<body>


    <div class="chat-popup2" id="myFormc">
        <div class="ccontainerc">
            <div class="cheader">
                <img src="../images/logow.svg" style="width: 50px;  margin-left:12px;">
                <img src="../images/closew.svg" style="width: 15px; margin-right:12px;" onclick="clForm()">
            </div>
            <div class="chatarea">
                <div class="chatm">
                    <img src="../images/chat.svg" width="70px">
                    <div>
                        <a>Support Operator </a><br>
                        <a>Cloud Company </a>

                    </div>
                </div>
                <div class="chatr">
                    <div class="msg">
                        <p>HE</p>
                        <span class="time-right">11:00</span></div>
                    <img src="../images/chat.svg" width="50px">
                </div>
                <div class="chatr">
                    <div class="msg">
                        <p>allalal</p>
                        <span class="time-right">11:00</span></div>
                    <img src="../images/chat.svg" width="50px">
                </div>
                <div class="chatr">
                    <div class="msg">
                        <p>allalal</p>
                        <span class="time-right">11:00</span></div>
                    <img src="../images/chat.svg" width="50px">
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
                <div class="chatl">
                    <img src="../images/chat.svg" width="50px">
                    <div class="msg">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span></div>
                </div>
            </div>
            <div class="cfooter">
                <div class="a"> <div class="image-upload">
                                        <label for="file-input">
                                            <img src="../images/up.svg" width="15px"/>
                                        </label>
                                        <input id="file-input" type="file" />
                    </div></div>
                <div class="b"><textarea placeholder="Type message.."></textarea></div>
                <div class="c"><button type="submit">Send</button></div>
            </div>
        </div>
    </div> 

    <div id="navbar">
        <a><button class="signin" onclick="openlForm()">login</button></a>
        <!-- <a href="javascript:void(0)">Terms and Conditions </a> -->
        <a class="active" href="blog.php">Blog</a>
        <a>Place an Order</a>
        
        <a href="show.php">Showcase</a>
        <a href="about.php">About Us </a>
        <a  href="../index.php">Home</a>
    </div>
<div id="content">
<form autocomplete="off" method="POST" id="client" action=""  enctype="multipart/form-data">
            <label for="firstname"><b>FIrst Name</b></label><br>
            <input autocomplete="false"  id="firstname" type="text" name="firstname" required><br>
            <label for="lastname"><b>Last Name</b></label><br>
            <input autocomplete="false"  id="lastname"  type="text" name="lastname" required><br>
            <label for="username"><b>User Name</b></label><br>
            <input autocomplete="false"  id="username"  type="username" name="username" required><br>
            <label for="email"><b>Email</b></label><br>
            <input autocomplete="false"  id="email"  type="text" name="email" required><br>
            <label for="phone"><b>Phone</b></label><br>
            <input autocomplete="false"  id="phone"  type="text" name="phone" required><br>
            <label for="country"><b>Country</b></label><br>
            <input autocomplete="false"  id="country"  type="text" name="country" required><br>
            <label ><b>Password</b></label>        <br> 
            <input autocomplete="false"  id="password"  type="password" name="password" required><br>
    <div>
        <button type="submit" name="upload"  id="client">
            submit 
        </button>
    </div>
</form>
</div>

<?php
$msg = "";

if (isset($_POST['uploadcloud'])) {

    $firstname		= $_POST['firstname'];
  	$lastname 		= $_POST['lastname'];
    $username     = $_POST['username'];
  	$email      	= $_POST['email'];
    $phone    	  = $_POST['phone'];
    $country    	= $_POST['country'];
    $skill      	= $_POST['skill'];
    $expertise   	= $_POST['expertise'];
    $password   	= $_POST['password'];
   
// make connection with this one 
    $db = mysqli_connect("localhost", "root", "", "cloud");
 // Get all the submitted data from the form
	$sql = "INSERT INTO clouddata (firstname, lastname, username, email, phone, country, skill, expertise, password ) VALUES ('$firstname', '$lastname', '$username', '$email','$phone','$country','$skill','$expertise','$password')";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $username, $email,$phone,$country,$skill, $expertise, $password]);

   // Execute query
   mysqli_query($db, $sql);  
}
$result = mysqli_query($db, "SELECT * FROM clouddata");
?>

<div id="content">
<form autocomplete="off" method="POST" action="" id="sda" enctype="multipart/form-data">
            <label for="firstname"><b>FIrst Name</b></label><br>
            <input autocomplete="false"  id="firstname" type="text" name="firstname" required><br>
            <label for="lastname"><b>Last Name</b></label><br>
            <input autocomplete="false"  id="lastname"  type="text" name="lastname" required><br>
            <label for="username"><b>User Name</b></label><br>
            <input autocomplete="false"  id="username"  type="username" name="username" required><br>
            <label for="email"><b>Email</b></label><br>
            <input autocomplete="false"  id="email"  type="text" name="email" required><br>
            <label for="phone"><b>Phone</b></label><br>
            <input autocomplete="false"  id="phone"  type="text" name="phone" required><br>
            <label for="country"><b>Country</b></label><br>
            <input autocomplete="false"  id="country"  type="text" name="country" required><br>
            <label for="skill"><b>skill</b></label><br>
            <input autocomplete="false"  id="skill"  type="text" name="skill" required><br>
            <label for="expertise"><b>Expertise</b></label><br>
            <input autocomplete="false"  id="expertise"  type="text" name="expertise" required><br>
            <label ><b>Password</b></label><br> 
            <input autocomplete="false"  id="password"  type="password" name="password" required><br>
    <div>
        <button type="submit" name="uploadcloud" id="sda" >
            submit 
        </button>
    </div>
</form>
</div>




</body>






<?php include '../templates/footer.php'; ?>