<!DOCTYPE html>
<html lang="en">
<head>
        
        <link href="../css/count.css" media="all" rel="stylesheet" />
        <link rel="stylesheet" href="../css/p11.css">
        <link rel="stylesheet" href="../css/mo6.css">
        <link rel="stylesheet" href="../css/mobcount1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../images/iconn.png" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<header>

    <div class="logogg">
        <a href="in.html"><img src="../images/logo.svg" class="topleft" width="200px"></a>
    </div>

    <!-- login form  starts here login form  starts here login form  starts here login form  starts here -->
    <div class="form-popuploginc" id="mylogin">
        <form action="/action_page.php" class="login-containerlc">
            <h1>Log in</h1>
            <div class="form-elementlog">
                <label>Username</label>
                <input class="log" type="text" required>
            </div>
            <br>
            <div class="form-elementlog">
                <label>Password</label>
                <input class="log" type="text" required>
            </div>
            <button type="submit" class="btnlog">login</button>
            <button type="button" class="btncan" onclick="closelForm()">Close</button></td>
        </form>

    </div>

    <!-- login form  ends here log in form  ends here log in form  ends here login form  ends here -->

    <!-- signin form  starts here signin form  starts here signin form  starts here signin form  starts here -->
    <div class="form-popup" id="myForms">
        <div class="problemo">
            <div class="pagechanger">

                <button class="openboxbutton" onclick="showbox2() , closebox1()">Client</button>
                <button class="openboxbutton" onclick="showbox1() , closebox2()">Cloud</button>
                <img src="../images/close.png" onclick="closeForm()">

            </div>
            <div style="height: 100%; background-color:red">
                <!--                                 Sign up Cloud                            -->
                <!--                                 Sign up Cloud                            -->
                <!--                                 Sign up Cloud                            -->
                <div class="contentonbox2" id="box1">
                    <div class="outergrid">
                        <div class="formlay">
                            <form action="/action_page.php" class="formcloud">
                                <div class="formleft">
                                    <div class="form-element">
                                        <label>User Name</label>
                                        <input type="text" required>
                                    </div>
                                    <div class="form-element">
                                        <label>Email</label>
                                        <input type="text" required>
                                    </div>
                                    <div class="form-element">
                                        <label>phonenumber</label>
                                        <input type="text" required>
                                    </div>
                                    <div class="form-element">
                                        <label>Country</label>
                                        <input type="text" required>
                                    </div>
                                </div>
                                <div class="formright">
                                    <div class="form-element">
                                        <label>Password</label>
                                        <input type="password" required>
                                    </div>
                                    <div class="form-element">
                                        <label>Retype Password</label>
                                        <input type="password" required>
                                    </div>

                                    <div class="form-element">
                                        <label>skill</label>
                                        <select class="clouds" name="" id="no">
                                         <option value="1"></option>
                                        <option value="2">Logo Designer </option>
                                        <option value="3">Poster Designer</option>
                                        <option value="4">Social Media Designer</option>
                                        <option value="5">Social Media Marketer</option>
                                        <option value="6">banner design</option>
                                        <option value="7">UI/UX designer</option>
                                        <option value="8">3D designer</option>
                                        <option value="9">12</option>
                                        <option value="10">13</option>
                                         </select>
                                    </div>
                                    <div class="form-element">
                                    <label>Expertise</label>
                                    <select class="clouds" name="" id="no">
                                         <option value="1"></option>
                                        <option value="2">Logo Designer </option>
                                        <option value="3">Poster Designer</option>
                                        <option value="4">Social Media Designer</option>
                                        <option value="5">Social Media Marketer</option>
                                        <option value="6">banner design</option>
                                        <option value="7">UI/UX designer</option>
                                        <option value="8">3D designer</option>
                                        <option value="9">12</option>
                                        <option value="10">13</option>
                                         </select>
                                        
                                        
                                    </div>
                                </div>
                        </div>
                        <div style="display: flex;display: flex;align-content: center;justify-content: center;align-items: center;">
                            <button type="submit" class="openboxbutton">sign up</button>
                        </div>
                    </div>
                </div>




                <div class="contentonbox" id="box2">
                        <div>
                            <form action="/action_page.php">
                                <div class="form-element">
                                    <label>User Name</label>
                                    <input type="text" required>
                                </div>
                                <div class="form-element">
                                    <label>Email</label>
                                    <input type="text" required>
                                </div>
                                <div class="form-element">
                                    <label>Password</label>
                                    <input type="password" required>
                                </div>
                                <div class="form-element">
                                    <label>Retype Password</label>
                                    <input type="password" required>
                                </div>
                                <div class="form-element">
                                    <label>Country</label>
                                    <input type="text" required>
                                </div>
                                <div>
                                        <button type="submit" class="openboxbutton">sign up</button>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- sign in form  ends here sign in form  ends here sign in form  ends here sign in form  ends here -->
</header>
