<html>

<head>
    <title>Student Assessment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
    function calc()
    {
        var m1,m2,m3,m4,avg=0,total=0;
        m1=parseInt(document.getElementById('softwareTesting').value);
        m2=parseInt(document.getElementById('vbNet').value);
        m3=parseInt(document.getElementById('webDesign').value);
        m4=parseInt(document.getElementById('python').value);


        total=m1+m2+m3+m4;
        avg=total/4;


       document.getElementById('total').value=total;
       document.getElementById('avg').value=avg;

       var netTotal=parseInt(total);
       var netAverage=parseInt(avg);

            }




</script>
</head>




<body background="apg.jpg">

    <ul>
    
        <li><a href="stud.php">Students</a></li>
        <li><a class="active" href="add.php">Add IA marks</a></li>
         <li style="float:right"> <a href="faculty.php">Logout</a>
        </li>
    </ul>
<style>
    body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        
        .marksheetbox {
            width: 400px;
            height: 580px;
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
        
        
        
        
        .marksheetbox input {
            width: 100%;
            margin-bottom: 6px;
        }
        
        .marksheetbox input[type="text"],[type="date"],[type="number"]
         {
            border: none;
            border-bottom: 1px solid #333;
            background: transparent;
            outline: none;
            height: 40px;
            color: #333;
            font-size: 16px;
        }
        .marksheetbox select, .marksheetbox option
        {
            border:none;
            border-bottom: 1px solid #333;
            background: transparent;
            outline:none;
            height:40px;
            color: #333;
            font-size: 16px;
        }
      
        
        .marksheetbox input[type="submit"],[type="reset"]{
            border: none;
            outline: none;
            width: 100px;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 30px;
        }
        
        .marksheetbox input[type="submit"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
        .marksheetbox input[type="reset"]:hover {
            cursor: pointer;
            background: teal;
            color: #000;
        }
    </style>
    <div class="marksheetbox">
        <h3>STUDENT IA MARKSHEET FORM</h3>
    
    <form action="store.php" method="POST">
        
       
         <input type=text  name="strno"   placeholder="Roll.no" required>
        
        <input type=text  name="stn"   placeholder="Student Name" required>
        
        <input type=date  name="dob"   placeholder="DOB"  required>
       
        <input type=number name="st" id="softwareTesting"  placeholder="Software Testing" required>

        <input type=number name="vbnet" id="vbNet"  placeholder="vb net" required>

        <input type=number name="wd"  id="webDesign" placeholder="web Design" required>
        
        <input type=number name="pyt" id="python"  placeholder="python" required>

        <input type=text name="total"   id="total" placeholder="Total" onclick="calc()" required>

        <input type=text name="avg" id="avg" placeholder="Average" onclick="calc()" required>



                <input type=submit value="Save Data">
                <input type=reset>
       
    </form>
</body>

</html>