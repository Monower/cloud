<footer class="footer">
  	 <div class="container1">
  	 	<div class="row1">
			<div class="footer-col">
				<img src="images/logow.svg" alt="logo cc">
			</div>
  	 		<div class="footer-col">
  	 			<h4>help</h4>
  	 			<ul class="f">
  	 				<li class="p"><a href="#">help center</a></li>
  	 				<li class="p"><a href="#">authors</a></li>
  	 				<li class="p"><a href="#">trust & safety</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>about</h4>
  	 			<ul class="f">
  	 				<li class="p"><a href="#">about us</a></li>
  	 				<li class="p"><a href="#">how it works</a></li>
  	 				<li class="p"><a href="#">security</a></li>
  	 				<li class="p"><a href="#">investor</a></li>
  	 				<li class="p"><a href="#">quotes</a></li>
  	 				<li class="p"><a href="#">news</a></li>

  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>terms</h4>
  	 			<ul class="f">
  	 				<li class="p"><a href="#">privacy policy</a></li>
  	 				<li class="p"><a href="#">terms of service</a></li>
  	 				<li class="p"><a href="#">copyright policy</a></li>
  	 				<li class="p"><a href="#">trade mark</a></li>
  	 			</ul>
  	 		</div>
			   <div class="footer-col">
				   <h4>f&q</h4>
				   <ul class="f">
					   <li class="p"><a href="#">How it works?</a></li>
					   <li class="p"><a href="#">What is the ordering process?</a></li>
					   <li class="p"><a href="#">Ask a question</a></li>
					</ul>
			   </div>
  	 	</div>
		<div class="row2">
			<div class="col1">
				<p style="color: white;">&#169 Cloud Company 2021</p>
			</div>
	
		 <div class="col1">
			<div class="social-links">
			 <a href="#"><i class="fab fa-instagram"></i></a>
			 <a href="#"><i class="fab fa-facebook-f"></i></a>
			 <a href="#"><i class="fab fa-youtube"></i></a>
			 <a href="#"><i class="fab fa-pinterest-p"></i></a>
		    </div>
		</div>
	  </div>
  	</div>
   <!--chat button starts here  -->
    <button class="open-buttonc" onclick="opForm()">Chat</button>
 <div class="chat-popup1" id="myFormc">
  <div class="ccontainerc">
    <div class="cheader">
        <p style="margin: 0px;">dkljsdfljdflkjdflk</p>
        <button type="button" class="cancelc" onclick="clForm()">Close</button>
    </div>
   <div class="chatarea">
      <div class="containerc"> 
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
      </div>
      
      <div class="containerc darkerc"> 
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
      </div>
      <div class="containerc darkerc"> 
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
      </div>
      <div class="containerc darkerc"> 
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
      </div>
     
      <div class="containerc darkerc"> 
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
      </div>
      
      <div class="containerc">
     <p>Sweet! So, what do you wanna do today?</p>
        <span class="time-right">11:02</span>
      </div>
      
      <div class="containerc darkerc">   
        <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
        <span class="time-left">11:05</span>
      </div>
   </div>
      <div class="cfooter">
        <textarea placeholder="Type message.." name="msg" required class="textareac"></textarea>
     
        <button type="submit" class="btnc">Send</button>
        

          </div>
      </div>
   </div>
 </div> 
  </footer>

   
    






<script>
    function opForm() {
      document.getElementById("myFormc").style.display = "block";
    }
    
    function clForm() {
      document.getElementById("myFormc").style.display = "none";
    }
    function openForm() {
      document.getElementById("myForms").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForms").style.display = "none";
    }

    function openlForm() {
      document.getElementById("mylogin").style.display = "block";
    }
    
    function closelForm() {
      document.getElementById("mylogin").style.display = "none";
    }
    


window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


</body>
</html>
 