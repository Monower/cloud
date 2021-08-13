<?php include '../templates/header.php'; ?>
<!--body part starts here ............body part starts here ............body part starts here ............-->
<title>Profile</title>




<div id="navbar">
    <a><button class="signin" onclick="openlForm()">login</button></a>
    <a href="show.php">Showcase</a>
    <a href="wwr.php" href="about.php">Who we are </a>
    <a href="javascript:void(0)">Terms and Conditions </a>
    <a href="placeorder.php">Place an Order</a>
    <a href="blog.php">Blog</a>
   
    <a class="active" href="javascript:void(0)">Home</a>


</div>

<h2>This is clients profile</h2>





    <div class="rowad">

        <div class="leftside">
            <div style="width: 100%;">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <td colspan="1"><img src="../images/pro.svg" class="topleft" width="50px">
                            </td>
                            <td colspan="2" style="text-align:left;">
                                <p>MY NAME </p>
                            </td>
                        </tr>

                        <tr rowspan="3">
                            <td colspan="3" style="text-align: left;font-weight:bold;">
                                <p>Email</p>
                                <p>Country</p>
                                <p>Projects completed</p>
                                <p>On time Projects</p>
                                <p>Recommendations</p>
                                <p>Funds</p> <textarea style="height: 20px;width:50px;resize: none;">50$</textarea><button>Deposite funds</button><br><button>Fund withdraw request</button></td>
                        </tr>



                    </thead>
                </table>
              
               
            </div>

        </div>
            <div class="rightside">
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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex a odit aut omnis excepturi? Aspernatur, atque vitae. Minus aliquid possimus animi deleniti optio dicta ipsum repudiandae quia quod ad quo recusandae, nam modi iusto accusamus! Iusto officiis
                            laudantium necessitatibus modi autem corporis dolor labore, maiores animi, aut explicabo architecto pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ipsum?
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
                <!--  
                    </div>
                        <div class="chatall">
                        <h2>Chat Messages</h2>
                        <div class="container12">


                            <div class="container11">
                                <img src="images/proc.svg" alt="Avatar" style="width:100%;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container11 darker">
                                <img src="images/pro.svg" alt="Avatar" class="right" style="width:100%;">
                                <p>Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container11">
                                <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container11 darker">
                                <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
                                <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <div class="chatwid">
                            <table style="width:auto;">
                                <tr>
                                    <td><textarea placeholder="Type message.." name="msg" class="textareaccc"></textarea>
                                    </td>
                                    <td><button type="submit" class="btnsend">Send</button></td>
                                </tr>
                            </table>
                        </div>
                        <div><input type="file" id="myFile" name="filename"></div>

                    </div> -->

                    




                </div>

            </div>
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



<!--footer part starts here ............footer part starts here ............footer part starts here ............-->
<?php include '../templates/footer.php'; ?>