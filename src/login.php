<html>

<head>
    <title>Student Assessment System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
</head>



<body background="bg1.jpg">

    <ul>
        <li><a class="active" href="home.php">HOME</a></li>
        <li><a href="department.php">DEPARTMENTS</a></li>
       
        <li style="float:right"><a href="login.php">LOGIN</a></li>
              </div>
        </li>
    </ul>
    <style>

       
        
        .log input[type="button"] {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 10px;
  width:300px;
  text-align: center;
  margin: 0 auto;
  text-decoration: none;
  display: inline-block;
  justify-content:center;
  font-size: 35px;
  border-radius: 12px;
  opacity: 0.8;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  cursor: pointer;
  
}



.log input[type="button"]:hover {
  background-color:#4CAF50 ;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  border: 2px solid #4CAF50;
  color:white;
}
</style>
<div class="log">
<form align="center">
    <h2 style=" color:white;text-align:center;font-family:monospace;font-weight:bold;font-size:40px;">Welcome user</h2>

<input type="button" id=button1 value="Faculty" onclick="location.href='Faculty.php'" ><br><br>
    
<input type="button" id=button2 value="Student" onclick="location.href='student.php'">
</form>
</div>
    </body>
    </html>