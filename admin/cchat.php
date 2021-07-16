<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.ccontainerc{
    height:400px;
    width: 300px;
    background-color:rgb(199, 188, 252);

}
.cheader{
    background-color: blue;
    height:50px;
    width:auto;
}
.containerc {
  border: 2px solid #dedede;
  background-color: #f1f1f1;

  height:auto;
  width:280px;
  
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.containerc::after {
  content: "";
  clear: both;
  display: table;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;

  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 50px;
  height: 40px;
}

/* The popup chat - hidden by default */
.chat-popup1 {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form containerc */
.form-containerc {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-containerc textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-containerc textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.btn {
  background-color: #04AA6D;
  color: white;

  border: none;
  cursor: pointer;
  width: 30%;
  float:right;
  height:40px;
  opacity: 0.8;
}
.textarea{
    width: 70%;
    height:40px;
  resize: none;
}
.cancel {
  background-color: rgb(43, 255, 0);
  height:30px;
  float:right;
  width:40px;
}



/* Add a red background color to the cancel button */


/* Add some hover effects to buttons */
.form-containerc .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup1" id="myForm">
<div class="ccontainerc">
    <div class="cheader">
        <p style="margin: 0px;">dkljsdfljdflkjdflk</p>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </div>
    <div class="containerc"> 
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
      </div>
      
      <div class="containerc darker"> 
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
      </div>
      
      <div class="containerc">
     <p>Sweet! So, what do you wanna do today?</p>
        <span class="time-right">11:02</span>
      </div>
      
      <div class="containerc darker">   
        <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
        <span class="time-left">11:05</span>
      </div>
      <div class="cheader">
        <textarea placeholder="Type message.." name="msg" required class="textarea"></textarea>
     
        <button type="submit" class="btn">Send</button>
          </div>
      </div>
   </div>
</div> 

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
