<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>




<body background="fbg.jpg">


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
        
        .loginbox {
            width: 320px;
            height: 370px;
            background: #333;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            border-radius: 15px;
            opacity:0.8;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 40px 30px;
        }
        
        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        
        .loginbox p {
            margin: 0;
            padding: 5;
            font-weight: bold;
        }
        
        .loginbox input {
            width: 90%;
            margin-bottom: 20px;
        }
        
        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-radius: 15px;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        
        .loginbox input[type="submit"],input[type="button"] {
            border: none;
            outline: none;
            width: 115px;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 12px;
        }
        
        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        .loginbox input[type="button"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        
    </style>
<div class="loginbox">
        <h1>Login Here</h1>
        <form action="process.php" method="POST">
            <p>username</p>
            <input type="text" id="user" name="username" placeholder="Enter username" required>
            <p>password</p>
            <input type="password" id="pass" name="password" placeholder="Enter password" required>
            <input type="submit" name="" value="Login">
            <input type="button" onclick="location.href='register.php'" value="Register">
        

             </form>
       
        <?php
        if(isset($_GET['error'])==true)
        {
            echo '<font color="red"><p align="center">incorrect username or password</p></font>';
        }
        ?>
        

    </div>
</body>

</html>