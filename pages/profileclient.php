<?php include '../templates/header.php'; ?>
<?php

include("../templates/logint.php");

$username=$_SESSION['username'];
        
$id	=$_SESSION['id']; ?>
<!--body part starts here ............body part starts here ............body part starts here ............-->
<title>Profile</title>

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
            <div class="a"><img src="../images/up.svg" width="15px"></div>
            <div class="b"><textarea placeholder="Type message.."></textarea></div>
            <div class="c"><button type="submit">Send</button></div>
        </div>
    </div>
</div> 
<div id="navbar">
     <a href="logout.php">logout</button></a>
    <a href="show.php">Showcase</a>
    <a href="wwr.php" href="about.php">About us</a>
    <a href="placeorder.php">Place an Order</a>
    <a href="blog.php">Blog</a>
    <a class="active" href="javascript:void(0)">Home</a>
</div>

<body>



    <div class="rowad">

        <div class="leftside">
            <div style="width: 100%;">
            <tr>
                            <td colspan="1"><img src="../images/pro.svg" class="topleft" width="50px">
                            </td>
                            <td colspan="2" style="text-align:left;">
                              
                            </td>
            </tr>
                          
                        <?php

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
                                <div style="display:flex;"><textarea style="margin:2px;height:30px; resize:none;padding: 2px;width: 60px;font-size: 15px;">50$</textarea> 
                                <button class="openboxb" >Deposite</button>
                                <button class="openboxb">withdraw</button></td></div>
                     


               
            </div>

        </div>
          <div class="rightside" >
                <div class="all">

                        <div class="ordertop">
                            <div class="orderboxtop">
                                <label>Project Details</label>
                                <input class="te" type="text" placeholder="" required>
                            </div>
                            <div class="orderboxtop">
                                <label>Project Title</label>
                                <input class="te" type="text" placeholder="" required>
                            </div>
                            <div class="orderboxtop">
                                <label>Project Cost</label>
                                <input class="te" type="text" placeholder="" required>
                            </div>

                        </div>
                        
                        <div class="orderboxdrop">
                            <label>Project Descriptions</label>

                            <textarea>
                           </textarea>
                        </div>
                    <div id="clockdiv">
                                    <div>
                                        <span class="days"></span>
                                        <div class="smalltext">Days</div>
                                    </div>
                                    <div>
                                        <span class="hours"></span>
                                        <div class="smalltext">Hours</div>
                                    </div>
                                    <div>
                                        <span class="minutes"></span>
                                        <div class="smalltext">Minutes</div>
                                    </div>
                                    <div>
                                        <span class="seconds"></span>
                                        <div class="smalltext">Seconds</div>
                                    </div>
                    </div>
                    <button class="btncom" onclick="opFormcom()">COMPLETE</button>
                
                    </div>

              <!--    chat starts here  -->  
                <div class="chatall" >
                        <h2>Messages</h2>
                        <div class="container12">


                            <div class="container11">
                                <img src="../images/proc.svg" style="width:50px;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container11 darker">
                                <img src="../images/pro.svg" class="right" style="width:50px;">
                                <p>Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container11">
                                <img src="../images/pro.svg" style="width:50px;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container11 darker">
                                <img src="../images/pro.svg" class="right" style="width:50px;">
                                <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <div class="cfooterorder">
                            <div class="image-upload">
                                <label for="file-input">
                                    <img src="../images/up.svg" width="15px"/>
                                </label>
                                <input id="file-input" type="file" />
                            </div>
                            <div><textarea placeholder="Type message.." ></textarea></div>
                            <div><button type="submit"  >Send</button></div>
                        </div>
                        
                        

                    </div> 



                        <!--   chat ends here    -->

                    




            

            </div>
     </div>



  
    <!-- its the review pop up  its the review pop up its the review pop up its the review pop up  -->
    <div class="form-popupcom" id="myFormcom">
        <form action="/action_page.php" class="containercom">

            <div>
                <button class="close-btn fas fa-times" onclick="clFormcom()"></button>

                <div class="part1com">
                    <div class="form-elementcom">
                        <span class="details"><p>project type*</p></span>
                        <input class="inp" type="text" placeholder="" required>
                    </div>
                    <div class="form-elementcom">
                        <span class="details"><p>project title*</p></span>
                        <input class="inp" type="text" placeholder="" required>
                    </div>
                    <div class="form-elementcom">
                        <span class="details"><p>project cost*</p></span>
                        <input class="inp" type="text" placeholder="" required>
                    </div>
                </div>
                <div class="part2com">
                    <p>project description</p>
                    <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex a odit aut omnis excepturi? Aspernatur, atque vitae. Minus aliquid possimus animi deleniti optio dicta ipsum repudiandae quia quod ad quo recusandae, nam modi iusto
                    accusamus! Iusto officiis laudantium necessitatibus modi autem corporis dolor labore, maiores animi, aut explicabo architecto pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ipsum?
                </div>
                <div class="form-elementcom">
                    <span class="details"><p>please provide a review:for showcasing:</p></span>
                    <input class="feedback" type="text" placeholder="" required>
                </div>
                <button class="btnsub" onclick="opFormcom()">Submit</button>
        </form>
        </div>
    </div>

</body>

<!--footer part starts here ............footer part starts here ............footer part starts here ............-->
<?php include '../templates/footer.php'; ?>