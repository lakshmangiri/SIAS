<?php
 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marks_database";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$rollno = $_POST['rollno'];
 $dob = $_POST['dob'];
 $st = $_POST['st'];
 $vb = $_POST['vbnet'];
 $wd = $_POST['webdesign'];
 $pyt = $_POST['python'];
 $total=$st+$vb+$wd+$pyt;
 $avg=$total/3;
 
$rollno = mysql_real_escape_string($rollno);
$dob = mysql_real_escape_string($dob);

$sql = "SELECT rollno,student_name,dob,software_testing,vbnet,webdesign,python FROM 3_ss where rollno='$rollno' and dob='$dob'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
        echo "Rollno: " .$row["rollno"]. "Student Name: " .$row["student_name"]. "DOB: " .$row["dob"]. "Software Testing: " .$row["software_testing"]. "Vb.Net: " .$row["vbnet"]. "Web Design: " .$row["webdesign"]. "Python: " .$row["python"]. "Total" .$row["total"]. "Average: " .$row["average"]."<br>";
    }
} else {
    echo "No Results Found !!!";
}

mysqli_close($conn);
?>