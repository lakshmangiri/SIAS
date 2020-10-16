<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body background="bg.jpg">

<ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="department.php">DEPARTMENTS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li style="float:right"><a href="faculty.php">BACK</a>
            
               
            </div>
        </li>
    </ul>

  
<?php
$link = mysqli_connect("localhost", "root", "", "login_database");

// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$uname = mysqli_real_escape_string($link, $_POST['uname']);
$pwd = mysqli_real_escape_string($link, $_POST['pwd']);
$rpwd = mysqli_real_escape_string($link, $_POST['rpwd']);


// attempt insert query execution

$sql = "INSERT INTO faculty_login (first_name,last_name,username,password,re_password) VALUES ('$fname','$lname','$uname','$pwd','$rpwd')";

if(mysqli_query($link, $sql))
{
    echo '<script language="javascript">';
echo 'alert("Record added successfully")';
echo '</script>';
    
} else{
    echo '<script language="javascript">';
    echo 'alert("Record failed to add, please check the connection")';
    echo '</script>';

    
}

// close connection
mysqli_close($link);

?>







</body>
</html>