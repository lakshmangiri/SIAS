<html>

<head>
    <title>Student Assessment System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body background="apg.jpg">

    <ul>
        <li><a  onclick="location.href='add.php'">Add IA marks</a></li>
        <li><a class="active" href='stud.php'">Students</a></li>
        <li style="float:right"> <a href="faculty.php">LOGOUT</a>
        </li>
    </ul>

    <?php
$link = mysqli_connect("localhost", "root","", "login_database");

// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$strno = mysqli_real_escape_string($link, $_POST['strno']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$stn = mysqli_real_escape_string($link, $_POST['stn']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$num = mysqli_real_escape_string($link, $_POST['num']);


// attempt insert query execution

$sql = "INSERT INTO student_details (Roll_no,DOB,st_name,email_id,ph_num) VALUES ('$strno','$dob','$stn','$email','$num')";

if(mysqli_query($link, $sql))
{
    echo '<script language="javascript">';
echo 'alert("Record added successfully")';
echo '</script>';
    
} else
{
    echo '<script language="javascript">';
    echo 'alert("Record failed to add, please check the connection")';
    echo '</script>';

    
}

// close connection
mysqli_close($link);

?>
</body>
</html>