<!DOCTYPE html>
<html lang="en">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
.grid-container{
  width: 250px;
  background: rgb(191 206 230);
}


.grid-container .side1{
  width: 250px;
}
.grid-container .item{
background-color: #8dc5f3;
background-position: left top;
background-repeat: repeat;
border-color: #b2b2fb;
padding: 20px; 
width: 250px;
height: 50px;  
}

.item:hover:not(.active) {
  background-color: rgb(135, 46, 250);
  color: white;
}
.item a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: black;
    display: block;
    transition: all 0.3s;
    text-align: center;
  }
  .grid-container .side2{
    width: 50%;
    padding: 45px 5px;
  }
  .grid-container .side2 .item{
    border-radius: 10px;
    background-color: #eaf2f8;
    border-style: ridge;
    background-position: left top;
    background-repeat: repeat;
    border-color: #e0e0f8;
    padding: 20px; 
    width: 250px;
    height: 50px;  
    }
    p{
     
      font-weight: bold;
      font-family: sans-serif;
      
    }
    .admintable .table{
      border:5px blue;
      background-color: cornflowerblue;
      float:right;
    }
    .tab{
      border:5px blue;
      background-color: cornflowerblue;
      float:right;

    }
  </style>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CC form</title>
 
</head>
<body>

    <div class="grid-container">
      <div class="side1">
      <div class="item">
        <a href="#">Project Distribution</a>
      </div>
      <div class="item">
        <a href="#">Money Distribution</a>
      </div>
      <div class="item">
        <a href="#">Client Details</a>
      </div>
        <div class="item">
        <a href="#">Project Distribution</a>
        </div>
      <div class="item">
        <a href="#">Client Chart</a>
      </div>
      </div>

     
      <div class="side2">
        <p>Website View</p>
        <div class="item">
         
        </div>
        <p>total r members </p>
        <div class="item">
         
        </div>
        <p>active members</p>
        <div class="item">
         
        </div>
      </div>
    </div>
    <div class ="admintable">
      <table class="tab">
        <tr>
        <td>a</td>
      </tr>
      <tr>
        <td>b</td>
      </tr>
      <tr>
        <td>c</td>
      </tr>
      <tr>
        <td>d</td>
      </tr>
      <tr>
        <td>e</td>
      </tr>
    </table>
    </div>

</body>
</html>