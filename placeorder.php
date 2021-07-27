<?php include 'header.php';?>
<div id="navbar">  
    <a><button class="signin" onclick="openlForm()" >login</button></a>     
  <a href="show.php">Showcase</a>
  <a href="wwr.php" href="javascript:void(0)">Who we are </a>
  <a href="javascript:void(0)">Terms and Conditions </a>
  <a class="active" href="placeorder.php">Place an Order</a>
  <a href="blog.php">Blog</a>
  <a><button class="signin" onclick="openForm()" >Sign up</button></a>
  <a  href="ind.php">Home</a>

        
  </div>
<!--body part starts here ............body part starts here ............body part starts here ............-->
<body>  
    <div class="order form">
	
    <div class="containerp">
      <form action="#">
        <div class="project-details">
          <div class="blueTable">
               <div class="divTableBody">
              <div class="divTableRow">
                  <div class="divTableCell"><div class="input-box">
            <span class="details">project catagory*</span>
            <br>
            <select name="" id="no">
              <option value="1"></option>
              <option value="2">SEO service </option>
              <option value="3">Graphics design</option>
              <option value="4">Logo Design</option>
              <option value="5">Social Media Marketing </option>
              <option value="6">banner design</option>
              <option value="7">website development</option>
              <option value="8">11</option>
              <option value="9">12</option>
              <option value="10">13</option>
            </select>
          </div></div>
                  <div class="divTableCell"><div class="input-box">
            <span class="details">Subcatagory*</span>
            <br>
            <select name="" id="no">
              <option value="1"></option>
              <option value="2">SEO service </option>
              <option value="3">Graphics design</option>
              <option value="4">Logo Design</option>
              <option value="5">Social Media Marketing </option>
              <option value="6">banner design</option>
              <option value="7">website development</option>
              <option value="8">11</option>
              <option value="9">12</option>
              <option value="10">13</option>
            </select>
          </div>
         </div><div class="divTableCell"><div class="input-box">
            <span class="details">estimated time</span><button>express</button>
         
            <br>          
            <input type="text"placeholder=""required>
            </div>   </div>   
                </div>
                <div class="divTableRow">
                  <div class="divTableCell"> <div class="input-box">
            <span class="details">Project Tital</span>
            <br>
            <input type="text"placeholder="e.g.logo design for resturant"required>
          </div></div>
                  <div class="divTableCell"><div class="input-box">
            <span class="details">project cost</span>
            <br>
            <input type="text" placeholder="autofilL from database"required>
          </div></div>
          <div class="divTableCell">  <div class="input-box">
            <span class="details">discount code</span><button>apply</button>
            <br>
            <input type="text"placeholder="e.g.logo design for resturant"required>
          </div></div>
                  
                </div>
              </div>
          </div>


         
        
        
          <div class="input-box2">
            <span class="details">project description*</span>
            <br><br>
			<textarea class="textareafc"type="text"placeholder=""required > </textarea>
          </div>
          
          <div class="input-box3">
           
           <input type="file" id="myFile" name="filename">
           <input type="submit"> 

          </div>

        <p style="color:1D1D1D;">terms and conditions</p>
        </div>
      </form>
    </div>
    </div>
 <div class="paymentbox">
   <table>
      <tr><td>project catagory</td><td>PROJECT SUBCATAGORY</td><td>estimated required time</td><td> COST</td></tr>
      <tr><td>Web development</td><td>business identity </td><td>10 days</td><td>500$</td></tr>
      <tr><td>corporate identity</td><td>wrapper</td><td>2 days</td><td>100$</td></tr>
      <tr><td></td><td></td><td>TOTAL COST</td><td>Cost</td></tr>
      <tr><td></td><td></td><td>PENDING COST</td><td>Cost</td></tr>
  </table>
 </div>   
 </body>
 
<!--footer part starts here ............footer part starts here ............footer part starts here ............-->
<?php include 'footer.php';?>
 