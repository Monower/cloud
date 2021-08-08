<?php include 'header.php'; ?>
<style>
    /* Button */
    
    .openshowcase {
        background-color: pink;
        color: white;
        border: none;
        cursor: pointer;
    }
    /* page */
    
    .showform {
        background-color: white;
        display: none;
        position: absolute;
        border-radius: 10px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        box-shadow: rgb(146, 138, 138) 0px 0px 8px
    }
    /* Add styles to the form container */
    
    .shawcontainer {
        background-color: red;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    /* Full-width input fields */
    
    .shawcontainer input[type=text],
    .shawcontainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }
    /* When the inputs get focus, do something */
    
    .shawcontainer input[type=text]:focus,
    .shawcontainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }
    /* Set a style for the submit/login button */
    
    .shawcontainer .btn {
        background-color: white;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 1;
    }
    
    .showbox {
        display: flex;
    }
    
    .showformleft {
        padding: 10px;
        display: flex;
        flex-direction: column;
        background-color: white;
        width: 30%;
        border-right: solid 2px black;
        align-items: center;
        margin: 13px;
    }
    
    .showformleft textarea {
        resize: none;
        width: 150px;
    }
    
    .showformleft button {
        resize: none;
        border: none;
        background-color: whitesmoke;
        width: 100px;
    }
    
    .showformright {
        display: flex;
        background-color: white;
        width: 400px;
        height: 400px;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    /* Add a red background color to the cancel button */
    
    .shawcontainer .cancel {
        background-color: red;
    }
    /* Add some hover effects to buttons */
    
    .shawcontainer .btn:hover,
    .openshowcase:hover {
        opacity: 1;
    }
</style>
<!--body part starts here ............body part starts here ............body part starts here ............-->
<title>Profile</title>


<div id="navbar">
    <a><button class="signin" onclick="openlForm()">login</button></a>
    <a href="show.php">Showcase</a>
    <a href="wwr.php" href="javascript:void(0)">Who we are </a>
    <a href="javascript:void(0)">Terms and Conditions </a>
    <a href="placeorder.php">Place an Order</a>
    <a href="blog.php">Blog</a>
    <a><button class="signin" onclick="openForm()">Sign up</button></a>
    <a class="active" href="javascript:void(0)">Home</a>


</div>

<body>



    <div class="rowad">

        <div class="leftside">
            <div style="width: 100%;">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <td colspan="1"><img src="images/pro.svg" class="topleft" width="50px">
                            </td>
                            <td colspan="2" style="text-align:left;">
                                <p>User name </p><p>skill shows here</p><p>specialliity shows here</p>
                            </td>
                        </tr>

                        <tr rowspan="3">
                            <td colspan="3" style="text-align: left;font-weight:bold;">
                            <p>Email here (editable)</p>

                            <p>Projects completed</p>
                            <p>Projects completed</p>
                                <p>Projects completed</p>
                                <p>On time Projects</p>
                                <p>Recommendations</p>
                                <p>Funds</p> <textarea style="height: 20px;width:50px;resize: none;">50$</textarea><button>Deposite funds</button><br><button>Fund withdraw request</button></td>
                        </tr>



                    </thead>
                </table>

                <div class="showcaseuploader">
                    <div>my name is khan <button class="openshowcase" onclick="showCase()">Open Form</button>
                        <div class="showform" id="showcaseform">
                            <form action="/action_page.php" class=.shawcontainer ">
    <div class="showbox ">
      <div class="showformleft ">
      <p>title</p>
      <textarea></textarea>
      <p>Selling price</p>
      <textarea></textarea>
      <p>project description</p>
      <textarea></textarea>
      <textarea placeholder="add the live link for websites "></textarea>
      <button type="button " class="btn cancel " onclick="closeshowcase() ">Close</button>
      </div>
      <div class="showformright " >
        <p>please upload your design here </p>
        <input type="file " id="myFile " name="filename ">
        <button>upload</button>
      </div>

    </div>

   
    
  </form>
</div></div>
                <div class="scbox ">
                    <div><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                    <div  ><img src="images/cbc.jpg " ></div>
                </div>
            </div>
       <!--     <div class="projectlist ">
                <p>Projects Cost </p>
                <div style="background-color: blue;height: 30px;width: 200px;margin: 4px; ">a</div>
                <div style="background-color: blue;height: 30px;width: 200px;margin: 4px; ">b</div>
                <div style="background-color: blue;height: 30px;width: 200px;margin: 4px; ">c</div>

            </div>
            <div class="reviewlist ">
                <p>Projects Cost </p>
                <div style="background-color: rgb(94, 255, 0);height: 30px;width: 200px;margin: 4px; ">a</div>
                <div style="background-color: rgb(0, 255, 136);height: 30px;width: 200px;margin: 4px; ">b</div>
                <div style="background-color: rgb(0, 255, 64);height: 30px;width: 200px;margin: 4px; ">c</div>

            </div>
-->
        </div>

    </div>
    <div class="rightside ">
        <div class="all ">
            
                <div class="ordertop ">
                    <div class="orderboxtop ">
                        <label>Project Details</label>
                        <input class="te " type="text " placeholder=" " required>
                    </div>
                    <div class="orderboxtop ">
                         <label>Project Title</label>
                        <input class="te " type="text " placeholder=" " required>
                    </div>
                    <div class="orderboxtop ">
                    <label>Project Cost</label>
                        <input class="te " type="text " placeholder=" " required>
                    </div>

                </div>
                <div class="orderboxdrop ">
                <label>Project Descriptions</label>
                    
<textarea>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex a odit aut omnis excepturi? Aspernatur, atque vitae. Minus aliquid possimus animi deleniti optio dicta ipsum repudiandae quia quod ad quo recusandae, nam modi iusto accusamus! Iusto officiis
                    laudantium necessitatibus modi autem corporis dolor labore, maiores animi, aut explicabo architecto pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ipsum?
                    </textarea>
                </div>
 <div id="clockdiv ">
   <div>
    <span class="days "></span>
    <div class="smalltext ">Days</div>
   </div>
   <div>
    <span class="hours "></span>
    <div class="smalltext ">Hours</div>
   </div>
   <div>
    <span class="minutes "></span>
    <div class="smalltext ">Minutes</div>
   </div>
   <div>
    <span class="seconds "></span>
    <div class="smalltext ">Seconds</div>
   </div>
</div>
              <!--  <div class="timerbox " >
                    <div style="font-size: 25px; ">Time remaining</div>
                    <div class="container5 "></div>
                </div>
          <div class="chatall ">
                    <h2>Chat Messages</h2>
                    <div class="container12 ">


                        <div class="container11 ">
                            <img src="images/proc.svg " alt="Avatar " style="width:100%; ">
                            <p>Hello. How are you today?</p>
                            <span class="time-right ">11:00</span>
                        </div>

                        <div class="container11 darker ">
                            <img src="images/pro.svg " alt="Avatar " class="right " style="width:100%; ">
                            <p>Hey! I'm fine. Thanks for asking!</p>
                            <span class="time-left ">11:01</span>
                        </div>

                        <div class="container11 ">
                            <img src="/w3images/bandmember.jpg " alt="Avatar " style="width:100%; ">
                            <p>Sweet! So, what do you wanna do today?</p>
                            <span class="time-right ">11:02</span>
                        </div>

                        <div class="container11 darker ">
                            <img src="/w3images/avatar_g2.jpg " alt="Avatar " class="right " style="width:100%; ">
                            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                            <span class="time-left ">11:05</span>
                        </div>

                    </div>
                    <div class="chatwid ">
                        <table style="width:auto; ">
                            <tr>
                                <td><textarea placeholder="Type message.. " name="msg " class="textareaccc "></textarea>
                                </td>
                                <td><button type="submit " class="btnsend ">Send</button></td>
                            </tr>
                        </table>
                    </div>
                    <div><input type="file " id="myFile " name="filename "></div>

                </div> -->

                <button class="btncom " onclick="opFormcom() ">COMPLETE</button>




         </div>

    </div>
</div>
</div>
<!-- its the review pop up  its the review pop up its the review pop up its the review pop up  -->
<div class="form-popupcom " id="myFormcom ">
    <form action="/action_page.php " class="containercom ">

        <div>
            <button class="close-btn fas fa-times " onclick="clFormcom() "></button>

            <div class="part1com ">
                <div class="form-elementcom ">
                    <span class="details "><p>project type*</p></span>
                    <input class="inp " type="text " placeholder=" " required>
                </div>
                <div class="form-elementcom ">
                    <span class="details "><p>project title*</p></span>
                    <input class="inp " type="text " placeholder=" " required>
                </div>
                <div class="form-elementcom ">
                    <span class="details "><p>project cost*</p></span>
                    <input class="inp " type="text " placeholder=" " required>
                </div>
            </div>
            <div class="part2com ">
                <p>project description</p>
                <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex a odit aut omnis excepturi? Aspernatur, atque vitae. Minus aliquid possimus animi deleniti optio dicta ipsum repudiandae quia quod ad quo recusandae, nam modi iusto
                accusamus! Iusto officiis laudantium necessitatibus modi autem corporis dolor labore, maiores animi, aut explicabo architecto pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ipsum?
            </div>
            <div class="form-elementcom ">
                <span class="details "><p>please provide a review:for showcasing:</p></span>
                <input class="feedback " type="text " placeholder=" " required>
            </div>
            <button class="btnsub " onclick="opFormcom() ">Submit</button>
    </form>
    </div>
</div>

</body>

<!--footer part starts here ............footer part starts here ............footer part starts here ............-->
<?php include 'footer.php'; ?>