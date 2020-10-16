<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body background="apg.jpg">

    <ul>
        <li><a class="active" href="add.php">Add IA marks</a></li>
        <li><a onclick="location.href='stud.php'">Students</a></li>
        <li style="float:right"> <a href="faculty.php">LOGOUT</a>
        </li>
    </ul>
<?php
$link = mysqli_connect("localhost", "root", "", "marks_database");

// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security

$strno = mysqli_real_escape_string($link, $_POST['strno']);
$stn = mysqli_real_escape_string($link, $_POST['stn']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$st = mysqli_real_escape_string($link, $_POST['st']);
$vbnet = mysqli_real_escape_string($link, $_POST['vbnet']);
$wd = mysqli_real_escape_string($link, $_POST['wd']);
$pyt= mysqli_real_escape_string($link, $_POST['pyt']);
$total = mysqli_real_escape_string($link, $_POST['total']);
$avg = mysqli_real_escape_string($link, $_POST['avg']);








// attempt insert query execution

$sql = "INSERT INTO 3ss (rollno,student_name,dob,software_testing,vbnet,webdesign,python,Total,average) VALUES ('$strno','$stn','$dob','$st','$vbnet','$wd','$pyt','$total','$avg')";



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