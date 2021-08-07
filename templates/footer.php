
<div class="mobfooter">
<div class="headd">
     <div class="peta">
        <img src="images/logo.svg" >
</div>
   <div class="chata">
   <div class="tnav" id="Mtn">
     <a  onclick="openlForm()"><img src="images/mob/logd.svg" >log in</a>
     <a href="#about"><img src="images/mob/abusd.svg" >About Us</a>
     <a href="#home" ><img src="images/mob/s$p.svg" >services and Costs</a>
     <a href="#news"><img src="images/mob/t&c.svg" >terms and conditions</a>
 
     
 
  <a href="javascript:void(0);"  class="icon" onclick="myfn()">&#9776;</a>
</div>
   </div>
</div> 
<div class="lfooter">
<button id="moba"><img src="images/mob/scase.svg" ></button>
<button id="mobb"><img src="images/mob/blo.svg" ></button>
<button id="mobc"><img src="images/mob/homei.svg" ></button>
<button onclick="openForm()"><img src="images/mob/sign.svg" ></button>
<button  ><img src="images/mob/chatt.svg" ></button>
</div>
</div>


</body>
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
    function myfn() {
     var x = document.getElementById("Mtn");
    if (x.className === "tnav") {
    x.className += " responsive";
    } else {
    x.className = "tnav";
   }
 }
</script>

<script type="text/javascript">
    document.getElementById("moba").onclick = function () {
        location.href = "show.php";
    };
    document.getElementById("mobb").onclick = function () {
        location.href = "blog.php";
    };
    document.getElementById("mobc").onclick = function () {
        location.href = "index.php";
    };
    document.getElementById("mobd").onclick = openForm() ;
       
    document.getElementById("mobe").onclick = function () {
        location.href = "show.php";
    };
</script>



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
<script>



        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        var cd5 = new Countdown({
            cont: document.querySelector('.container5'),
            date: Date.now() + 86400,
            outputTranslation: {
                year: 'Years',
                week: 'Weeks',
                day: 'Days',
                hour: 'Hours',
                minute: 'Minutes',
                second: 'Seconds',
            },
            endCallback: function() {
                document.querySelector('.container5').insertAdjacentHTML(
                    'beforeend',
                    '<div style="display: flex;height: 50px;align-items: center;justify-content: center;background: red;font-weight: bold;">time UP </div>')
            },
            outputFormat: 'week|day|hour|minute|second',
        });
        cd5.start();
    </script>`
        <script>
    function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));
  
  return {
    total,
    days,
    hours,
    minutes,
    seconds
  };
}

function initializeClock(id, endtime) {
  const clock = document.getElementById(id);
  const daysSpan = clock.querySelector('.days');
  const hoursSpan = clock.querySelector('.hours');
  const minutesSpan = clock.querySelector('.minutes');
  const secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    const t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

const deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

    </script>

</body>
</html>
 