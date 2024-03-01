<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Calculator</title>
</head>
<body>
	<h2>Simple Calculator</h2>
	<p>This program is made in PHP, it will calculate the addition, subtraction, division or multiplication of 
		2 digits</p>
	<p>You must enter your 2 digits, choose the operation from the selection slot and press <strong>submit.</strong></p>
	
	<form action="calculator.php" method="post">
		Enter 2 numbers separated by a comma(','): <input type="text" name="user_input">
		<input type="submit" value="Submit">
		
		<select name="choice" id="choice" required>
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mult">x</option>
			<option value="div">/</option>
		</select>
		
	</form>
	<br></br>

<?php
	
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$combVals = $_POST["user_input"];
	list($firstVal, $secondVal) = explode(',', $combVals);

	$operationChoice = $_POST["choice"];

	$firstVal = trim($firstVal);
	$secondVal = trim($secondVal);

	switch($operationChoice){
	
		case "add":
			$result = $firstVal + $secondVal;
			echo "Result: {$result}";
			break;
		case "sub": 
			$result = $firstVal - $secondVal;
		       	echo "Result: {$result}";	
			break; 

		case "mult":
			$result = $firstVal * $secondVal;
			echo "Result: {$result}";
			break;

		case "div":
			if ($secondVal == 0){
			print "ERROR";
			}
			$result = $firstVal / $secondVal; 
			break;

		default: 
			print "Invalid";
			break; 
	}	




}


?>	
</body> 
</html>
