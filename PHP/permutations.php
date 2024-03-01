<!DOCTYPE html>
<html lang="en">
<head>
	<meta chatset="UTF-8">
	<meta name="viweport" content="width=devie-width, initial-scale=1.0">
	<title>Permutations</title>
</head>
<body>
	<h2>Permutations</h2>
	<p>With this program you can know the permutations of the number you enter.</p>
	<p><strong><em>Permutations</em></strong> - how many possible variations can a number of things be ordered or arranged.<p>
	
	<form action="permutations.php" method="post">
	<p>Enter a number and see how many possible ways you can arrange it.<p>
	<p>For example, a team of 5 people can be arranged 120 different ways or 5!<p>
	<input type="number" name="user_input">
	<input type="submit" value="Submit">

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$counter = 1;
	$userInput = $_POST["user_input"];
	for($i = 1; $i <= $userInput; $i++){
	
	$counter *= $i; 
	
	}
	$counter = number_format($counter);
	echo "<br>";
	echo "{$userInput}! is {$counter}.";
	
	}

?>
</body>
</html>
