<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    
   
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

li a,
.dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    font-family: monospace;
    font-weight: bold;
    font-size: 20PX;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    background-color: rgb(207, 176, 119);
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: green;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


<body>

    <ul>
    <li style="float:right" class="active"> <a href="student.php">Logout</a>
        </li>
    </ul>


  
    <?php
 // get values 
 $rollno = $_POST['rollno'];
 $dob = $_POST['dob'];
 
 

 // to prevent mysql injection

 $rollno = stripcslashes($rollno);
 $dob = stripcslashes($dob);
 $rollno = mysql_real_escape_string($rollno);
 $dob = mysql_real_escape_string($dob);

 // connect to the daatabase

 mysql_connect("localhost","root","");
 mysql_select_db("marks_database");



 // query the database for user
 $result = mysql_query("select * from 3ss where rollno= '$rollno'") 
 or die("failed to query database" .mysql_error());
 $row = mysql_fetch_array($result);

 if($row['rollno'] == $rollno && $row['dob'] == $dob)
 {
    echo "<p style='color:white;text-align:center;font-size:40px;font-family:monospace;font-weight:bold;'>Welcome ".$row['student_name']. "</p>";
 
}
 else
 {
    header("location:student.php?error=2");  
 }

 if($row['rollno'] == $rollno && $row['dob'] == $dob)
 
 {

    echo "<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				
				<td align='center'>
					<b><font size='5'>IA MARKSHEET</font></b><br><br>
                    <font size='4' color='grey'><b>Roll.No:</b>.$row[rollno]<br></font>
                    <font size='4' color='grey'><b>Student Name:</b>.$row[student_name]<br></font>
                    <font size='4' color='grey'><b>DOB:</b>.$row[dob]<br></font>
    <table border=1 width=100%>
    <tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th></tr>
    <tr><td>101</td><td>Software Testing</td><td>35</td><td>100</td><td>$row[software_testing]
    <tr><td>102</td><td>Vb.Net</td><td>35</td><td>100</td><td>$row[vbnet]
    <tr><td>102</td><td>Web Design</td><td>35</td><td>100</td><td>$row[webdesign]
    <tr><td>102</td><td>Python</td><td>35</td><td>100</td><td>$row[python]
    <tr><td></td><td></td><td><b>Total</b></td><td><b>400</b></td><td><b>$row[Total]
    <tr><td></td><td></td><td><b>Average</b></td><td><b>100</b></td><td><b>$row[average]";
 

}

 else 
{
    echo "No Results Found !!!";
}



 ?>

</body>
</html>
