<html>  
<head>  
<title>Factorial Program using loop in PHP</title> 
  <link rel="stylesheet" type = "text/css" href = "css/style.css"/>
</head>  
<body>  
  <h1>   Given a Positive Integer n, Find The Value of Factorial of a Number k </h1>
 					<div class = "left">
            <h2> INPUT </h2>
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form> 
  </div>
   					<div class = "right">
              <h3> OUTPUT </h3>
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
  </div>
</body>  
</html>  
