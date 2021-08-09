<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="ads.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>

    </style>
</head>
<body>



<div class="rowad">
  <div class="columnad leftad" >
    <div class="grid-container left">
    <div class="side1">
                    <div class="item">
                        <a href="index.html">Index</a>
                    </div>
                    <div class="item">
                        <a href="add.php">Add Services</a>
                    </div>
                    <div class="item">
                        <a href="pd.php">Project Distribution</a>
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
                    <div class="item activec">
                        <a href="ptc.php">project type and Cost</a>
                    </div>
                    <div class="item">
                        <a href="cf.php">Chat Filter </a>
                    </div>
                </div>  

    
  </div>
  </div>
  <div class="columnad right" style="background-color: darkblue;height:100%;width:100%;">
  <img src="../images/chat.svg" class="open-buttonc" onclick="opForm()">
    <div class="chat-popup1" id="myFormc">
        <div class="ccontainerc">
            <div class="cheader">
                <img src="../images/logow.svg" style="width: 50px;  margin-left:12px;">
                <img src="../images/closew.svg" style="width: 15px; margin-right:12px;" onclick="clForm()">
            </div>
            <div class="baksho">
                        <div class="chatheads">
                        <div class="chatm">
                                <img src="../images/chat.svg" width="50px">
                                <div><p>IP goes here</p>
                                <p>Country</p></div>
                            </div>
                        </div>
                        <div>
                        <div class="chatarea" style="background-color: darkblue;">
                            

                            <div class="chatr">
                                
                                <div class="msg"><p>HE</p>
                                <span class="time-right">11:00</span></div>
                                <img src="../images/chat.svg" width="50px">
                            </div>
                            <div class="chatr">
                                
                                <div class="msg"><p>allalal</p>
                                <span class="time-right">11:00</span></div>
                                <img src="../images/chat.svg" width="50px">
                            </div>
                            <div class="chatr">
                                
                                <div class="msg"><p>allalal</p>
                                <span class="time-right">11:00</span></div>
                                <img src="../images/chat.svg" width="50px">
                            </div>
                            <div class="chatl">
                                <img src="../images/chat.svg" width="50px">
                                <div class="msg"><p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span></div>
                            </div>
                        
                        </div>
                        <div class="cfooter">
                            <div><img src="../images/up.svg" width="15px"></div>
                            <div><textarea placeholder="Type message.." ></textarea></div>
                            <div><button type="submit"  >Send</button></div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

</body>
<script>
    function opForm() {
        document.getElementById("myFormc").style.display = "block";
    }

    function clForm() {
        document.getElementById("myFormc").style.display = "none";
    }
</script>
</html>
