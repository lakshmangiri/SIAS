<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

 <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body background="pbg.jpg">

    <ul>
    
        <li><a href="stud.php">STUDENTS</a></li>
        <li><a href="add.php">Add IA Marks</a></li>
        <li style="float:right" class="active"> <a href="faculty.php">LOGOUT</a>
        </li>
    </ul>
<p style="color:white;text-align:center;font-size:40px;font-family:monospace;font-weight:bold;">

    <?php
    
 // get values 
 $username = $_POST['username'];
 $password = $_POST['password'];

 // to prevent mysql injection

 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysql_real_escape_string($username);
 $password = mysql_real_escape_string($password);

 // connect to the daatabase

 mysql_connect("localhost","root","");
 mysql_select_db("login_database");


 // query the database for user
 $result = mysql_query("select * from faculty_login where username= '$username'and password= '$password'") 
 or die("failed to query database" .mysql_error());
 $row = mysql_fetch_array($result);

 if($row['username'] == $username && $row['password'] == $password)
 {
    echo "Welcome user";
 }
 else
 {
   header("location:faculty.php?error=1"); 
 }
 ?>
 
 	
</body>
</html>
