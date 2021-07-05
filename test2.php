<!DOCTYPE <!DOCTYPE <!doctype html>
<html>
<head>
<h1> Excercise Schedule </h1>
</head>
<body>



<h2>BMI calculator</h2><br>

<form method="post">

	AGE:<input type="number" name="age"><br>

	HEIGHT(cm):<input type="text" name="height"><br>

	WEIGHT(kg):<input type="text" name="weight"><br>

	<input type="submit" name="submit"/>

</form>

<?php

if(isset($_POST['submit']))

{

	$age=$_POST['age'];

	$weight=$_POST['weight'];

	$height=$_POST['height'];

	$sen=100;

	$oriheight=$height/$sen;

	if($weight<=0 || $weight>500)

	{

		echo "Please Input Valid weight";

		exit;

	}

	if($oriheight <= 0 || $oriheight > 2.5)

	{

		echo "Please input valid height";

		exit;

	}

	$bmi=$weight/($oriheight*$oriheight);

	echo "Your BMI is: ".$bmi." kg/m<sup>2</sup><br>";

	if($bmi<18.5)

	{

		echo "You are unfit";

	}

	elseif($bmi=18.5||$bmi>25)

	{

		echo "You are on the healthy scale";

	}

	elseif($bmi=25||$bmi>30)

	{

		echo "You are overweight";

	}

	else

	{

		echo "You are obese please adjust your dietary and excercise plan";

	}

}

?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h2>BMI Table</h2>

<table>
  <tr>
    <th>Classification</th>
    <th>Bmi Range</th>
   
  </tr>
  <tr>
    <td>Underweight</td>
    <td><18.5</td>

  </tr>
  <tr>
    <td>Normal Range</td>
    <td>18.5-24.9</td>

  </tr>
  <tr>
    <td>Overweight</td>
    <td>25.0-29.9</td>
 
  </tr>
  <tr>
    <td>Obese</td>
    <td>>30</td>
 
  </tr>

</table>
</body>

</html>
