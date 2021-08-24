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

<body onload="myFunction()">
    <div id="loading"></div>



    <div class="rowad">
        <div class="columnad leftad">
            <div class="grid-container left">
                <div class="side1">
                    <div class="item">
                    <a href="logout.php">Logout</a>
                    </div>
                    <div class="item activec">
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
            <div class="nest">


                <div class="bird">
                    <div class="label"> Website views </div>
                    <div class="ammount">
                        <Textarea>04</Textarea>
                    </div>

                </div>
                <div class="bird">
                    <div class="label"> Total Clients </div>
                    <div class="ammount">
                        <Textarea>04</Textarea>
                    </div>

                </div>
                <div class="bird">
                    <div class="label"> Total Clouds </div>
                    <div class="ammount">
                        <Textarea>04</Textarea>
                    </div>

                </div>
                <div class="bird">
                    <div class="label"> Total Orders </div>
                    <div class="ammount">
                        <Textarea>04</Textarea>
                    </div>

                </div>
                <div class="bird">
                    <div class="label"> Total Spent </div>
                    <div class="ammount">
                        <Textarea>04</Textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script>
    // $(document).ready(function(){
    // 	$('div#loading').removeAttr('id');
    // });
    var preloader = document.getElementById("loading");
    // window.addEventListener('load', function(){
    // 	preloader.style.display = 'none';
    // 	})

    function myFunction() {
        preloader.style.display = 'none';
    };
</script>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>