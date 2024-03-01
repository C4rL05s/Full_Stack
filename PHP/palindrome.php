<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Palindrome Verifier</title>
</head>
<body>
	<h2>Is it a palindrome?</h2>
	
	<form action="palindrome.php" method="post">
		<p>Enter a word</p><input type="text" name="user_input">		
		<input type="submit" value="Submit">
		
	</form>
	<br></br>
<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$userInput = $_POST["user_input"];
		
		//limpia las palabras ingresadas
		$newUserInput = strtolower(str_replace(' ', '', $userInput));
	
		$inputComparison = strrev(str_replace(' ','',$userInput));
	
		
	
		if($newUserInput == $inputComparison){//verifica si la palabra ingresada es igual a la palabra en reversa
			echo "The word {$newUserInput} <strong>is</strong> a palindrome.<br>";
		}else{
		
			echo "The word {$newUserInput} is <strong>not</strong> a palindrome.<br>";
		}




}
	 

?>
	
</body>
</html>
