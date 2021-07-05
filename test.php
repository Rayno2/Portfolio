<!DOCTYPE <!DOCTYPE <!doctype html>
<html>
<head>
<h1> Excercise Schedule </h1>
</head>
<body>

<form action="test.php" method="get">
 Weight in KG: <input type ="number" name="weight">
   
<p>
<form action="test.php" method="get">
Height in Cm: <input type ="number" name="height">


<br>
<input type ="submit">

<?php echo (($_GET ["height"]/100)^2) ?> 



</body>

</html>
