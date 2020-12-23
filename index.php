<html>  
<head>  
<title>Factorial Program using loop in PHP</title> 
  <link rel="stylesheet" type = "text/css" href = "css/style.css"/>
</head>  
<body>  
    <h1>   Given a Positive Integer n, Find The Value of Factorial of a Number k </h1>
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body>  
</html>  
