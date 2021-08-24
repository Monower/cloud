<?php include '../templates/header.php'; ?>
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
    <a><button class="signin" onclick="openlForm()">logout</button></a>
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
                                <p>Funds</p>
                                <div style="display:flex;">
                                    <textarea style="margin:2px;height:30px; resize:none;padding: 2px;width: 60px;font-size: 15px;">50$</textarea>
                                    <button class="openboxb">Deposite</button>
                                    <button class="openboxb">withdraw</button>
                                </div>
                            </td>

                        </tr>



                    </thead>
                </table>

            </div>
        </div>


        <div class="rightside">
            <div class="orderplacebox">
                <div class="orderplacer">
                    <div class="part1">
                        <div class="form-element">
                            <span class="details"><p>catagory</p></span>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="form-element">
                            <span class="details"><p>subcatagory</p></span>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="form-element">
                            <span class="details">estimated time</span>
                            <div class="plob">
                                <input type="text" placeholder="autofill" readonly><button>Express</button>
                            </div>
                        </div>
                        <div class="form-element">
                            <span class="details">discount code</span>
                            <div class="plob">
                                <input type="text" placeholder="" ><button>Apply</button>
                            </div>
                        </div>
                        <div class="form-element">
                            <span class="details">cost</span>
                            <input type="text" placeholder="autofill">

                        </div>

                    </div>
                    <div class="part2">
                        <div class="form-element">
                            <span class="details"><p>what you will get</p></span>
                            <input type="text" placeholder="autofill" >
                        </div>
                        <div class="form-element">
                            <span class="details"><p>project description</p></span>
                            <textarea> please describe what you need</textarea>
                        </div>
                        <form action="/action_page.php">
                            
                            <input type="file" id="files" name="files" multiple><br><br>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="orderplacebox">
                <div class="orderplacer">
                    <div class="part1">
                        <div class="form-element">
                            <span class="details"><p>catagory</p></span>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="form-element">
                            <span class="details"><p>subcatagory</p></span>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="form-element">
                            <span class="details">estimated time</span>
                            <div class="plob">
                                <input type="text" placeholder="autofill" readonly><button>Express</button>
                            </div>
                        </div>
                        <div class="form-element">
                            <span class="details">discount code</span>
                            <div class="plob">
                                <input type="text" placeholder="" ><button>Apply</button>
                            </div>
                        </div>
                        <div class="form-element">
                            <span class="details">cost</span>
                            <input type="text" placeholder="autofill">

                        </div>

                    </div>
                    <div class="part2">
                        <div class="form-element">
                            <span class="details"><p>what you will get</p></span>
                            <input type="text" placeholder="autofill" >
                        </div>
                        <div class="form-element">
                            <span class="details"><p>project description</p></span>
                            <textarea> please describe what you need</textarea>
                        </div>
                        <form action="/action_page.php">
                            <label for="files">Select files:</label>
                            <input type="file" id="files" name="files" multiple><br><br>
                            <input type="submit">
                        </form>
                    </div>
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

</body>

<!--footer part starts here ............footer part starts here ............footer part starts here ............-->
<?php include '../templates/footer.php'; ?>