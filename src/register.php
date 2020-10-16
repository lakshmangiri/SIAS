<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>




<body background="rbg.jpg">


    <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="department.php">DEPARTMENTS</a></li>
        
        <li style="float:right"><a href="login.php">LOGIN</a>
            
               
            </div>
        </li>
    </ul>
<style>
     body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .registrationbox 
            {
            width: 400px;
            height: 470px;
            background: #333;
            color: #fff;
            top: 55%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border-radius:12px;
            opacity:0.7;
            padding: 5px 30px;
        }
        h1 {
            margin: 0;
            padding: 0 0 30px;
            text-align: center;
            font-size: 22px;
        }
        .registrationbox input
        {
            width: 100%;
            margin-bottom: 10px;
        }
        .registrationbox input[type="text"],[type="password"]
         {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .registrationbox input[type="submit"],[type="reset"]{
            border: none;
            outline: none;
            width: 100px;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 30px;
        }
        
        .registrationbox input[type="submit"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        .registrationbox input[type="reset"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        </style>
        <div class="registrationbox">
            <h3>Faculty Registration Form</h3>
            <form action="logindata.php" method="POST">

            <input type="text" name=fname id=1name placeholder="First Name" required>

            <input type="text" name=lname id=2name placeholder="Last Name" required>

            <input type="text" name=uname id=uname placeholder="username" required>

            <input type="password" name=pwd id=pass placeholder="enter password" required>

            <input type="password" name=rpwd id=name placeholder="Re-enter password" required>

            <input type=submit value="Save Data">
                <input type=reset>
                </form>
</body>

</html>




    </body>
    </html>