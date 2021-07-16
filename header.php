<!DOCTYPE html>
<html lang="en">

  <link rel="stylesheet" href="m.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 
<header>

 <div class="col-md-12 m-3 p-2"  id="nav">
               
               <a href="#"><img src="images/logo.svg" class="topleft" width="200px"></a>    
 </div>
            
        
 
<div class="form-popuploginc" id="mylogin">
    <form action="/action_page.php" class="login-containerlc">
     <h1>Log in</h1>   
     <div class="form-elementlog">
        <label>Username</label>
        <input class="log" type="text"required>
     </div>
     <br>
     <div class="form-elementlog">
     <label>Password</label>
     <input class="log" type="text"required>
     </div>
     <button type="submit" class="btns">login</button>
     <button type="button" class="cancellog" onclick="closelForm()">Close</button></td>
    </form>  

</div> 
 <div class="form-popup" id="myForms">
     <form action="/action_page.php" class="form-container">
     <h1>Sign up</h1>
     <label class="con">As Client
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
  </label>
  <label class="con">As Cloud
  <input type="radio" name="radio">
  <span class="checkmark"></span>
  </label>
     <div class="form-element">
        <label>Name</label>
        <input type="text"required>
     </div>
     <div class="form-element">
     <label>Email</label>
     <input type="text"required>
     </div>
    <div class="form-element">
    <table><tr><td> <label>Country</label>
     <input type="text"required></td><td><label>City</label><input type="text"required></td></tr></table>
    </div>
    <div class="form-element">
     <label>phone</label>
     <input type="text"required>
     </div>
      <div>
    <table>
      <tr><td style="text-align:center"><button type="submit" class="btns">sign up</button></td><td>
    <button type="button" class="btns cancel" onclick="closeForm()">Close</button></td>
     </tr>
    </table>
  </div>
 
  


  
  </form>
 </div>