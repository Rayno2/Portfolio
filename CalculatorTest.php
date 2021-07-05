<!DOCTYPE <!DOCTYPE <!doctype html>
<html>
<head>
<h1> Calculator </h1>
</head>
<body>


<form action="CalculatorTest.php" method="GET">
     Num1: <input type="number" name="Num1">
     Operator: <input type="text" name="op">
     Num2: <input type="number" name="Num2">
     <input type="submit">


<?php
$num1=$_GET["Num1"];
$num2=$_GET["Num2"];
$op=$_GET["op"];

     if($op == "+"){
          echo $num1 + $num2;
     } elseif($op == "-"){
          echo $num1 - $num2;
     } elseif($op == "/"){
          echo $num1 / $num2;
     } elseif($op == "*"){
          echo $num1 * $num2;
     } else {
          echo "Invalid Operator";
     }
?>

</form>
</body>

</html>
