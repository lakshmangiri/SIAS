<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

 <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body background="apg.jpg">

    <ul>
    
        <li><a class="active" href="stud.php">STUDENTS</a></li>
        <li><a href="add.php">Add IA Marks</a></li>
        <li style="float:right" class="active"> <a href="faculty.php">LOGOUT</a>
        </li>
    </ul>
    <style>
    body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        
        .listbox {
            width: 400px;
            height: 400px;
            background: white;
            color: black;
            top: 50%;
            left: 50%;
            position: absolute;
            opacity:0.7;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 5px 30px;
        }
        
        h1 {
            margin: 0;
            padding: 0 0 30px;
            text-align: center;
            font-size: 20px;
        }
        
        
        
        
        .listbox input {
            width: 100%;
            margin-bottom: 6px;
        }
        
        .listbox input[type="text"],[type="date"],[type="number"]
         {
            border: none;
            border-bottom: 1px solid #333;
            background: transparent;
            outline: none;
            height: 40px;
            color: #333;
            font-size: 16px;
        }
        .listbox select, .listbox option
        {
            border:none;
            border-bottom: 1px solid #333;
            background: transparent;
            outline:none;
            height:40px;
            color: #333;
            font-size: 16px;
        }
      
        
        .listbox input[type="submit"],[type="reset"]{
            border: none;
            outline: none;
            width: 100px;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 30px;
        }
        
        .listbox input[type="submit"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        .listbox input[type="reset"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
    </style>

<div class="listbox">
        <h3>STUDENT DETAILS</h3>
    
    <form action="sdata.php" method="POST">
        
       
         <input type=text  name="strno"   placeholder="Roll.no" required>
        
         <input type=date  name="dob"   placeholder="DOB"  required>
       
        <input type=text  name="stn"   placeholder="Student Name" required>
        
        <input type=text  name="email"   placeholder="email id"  required>

        <input type=number  name="num"   placeholder="mobile number" required>
       
        <input type=submit value="Save Data">
                <input type=reset>
                    
    </form>

    </body>
</html>
