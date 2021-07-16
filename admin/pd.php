<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

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
    
    background-color: #eaf2f8;
    border-style: ridge;
    background-position: left top;
    background-repeat: repeat;
    border-color: #e0e0f8;
    margin-left: 40px;
    width: 150px;
    height: 50px;  
    }
    
    p{
      width:140px;
      padding:5px;
      font-weight: bold;
      font-family: sans-serif;
    }
/* Create two unequal columns that floats next to each other */
.columnad {
  float: left;

 /* Should be removed. Only for demonstration */
}

.leftad {
  width: 250px;
}

.rightad {
  min-width: 900px;
  background-color:skyblue;
}

/* Clear floats after the columns */
.rowad:after {
  content: "";
  display: table;
  clear: both;
}
.item.activec{
  background-color: springgreen;
}

table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>
</head>
<body>



<div class="rowad">
  <div class="columnad leftad" >
    <div class="grid-container left">
    <div class="side1">
        <div class="item">
          <a  href="pdr.php">Project Distributor</a>
        </div>
          <div class="item">
          <a href="md.php">Money Distribution</a>
          </div>
       <div class="item">
          <a href="clientd.php">Client Details</a>
           </div>
         <div class="item activec">
         <a href="pd.php">Project Distribution</a>
          </div>
              <div class="item">
         <a href="cc.php">Cloud Details</a>
          </div>
          <div class="item">
            <a href="ptc.php">project type and Cost</a>
             </div>
             <div class="item">
                <a href="cf.php">Chat Filter </a>
                 </div>
       </div>
    <div class="side2">
          <p>Website View</p>
           <div class="item">
       
            </div>
            <p>total members </p>
           <div class="item">
       
           </div>
            <p>active members</p>
           <div class="item">
       
           </div>
      </div>
  </div>
  </div>
  <div class="columnad rightad" >
    <table class="blueTable">
      <thead>
      <tr>
        <th> Project Code </th>  
        <th> Project Title </th> 
        <th> Cloud Assigned </th> 
        <th> Project Money </th>
      </tr>
      </thead>
      <tfoot>
      <tr>
      <td colspan="5">
      <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
      </td>
      </tr>
      </tfoot>
      <tbody>
      <tr>
      <td>cell1_1</td><td>cell2_1</td><td>cell3_1</td><td>cell4_1</td></tr>
      <tr>
      <td>cell1_2</td><td>cell2_2</td><td>cell3_2</td><td>cell4_2</td></tr>
      <tr>
      <td>cell1_3</td><td>cell2_3</td><td>cell3_3</td><td>cell4_3</td></tr>
      <tr>
      <td>cell1_4</td><td>cell2_4</td><td>cell3_4</td><td>cell4_4</td></tr>
      <tr>
      <td>cell1_5</td><td>cell2_5</td><td>cell3_5</td><td>cell4_5</td></tr>
      </tbody>
      </tr>
      </table>
  </div>
</div>

</body>
</html>
