<!DOCTYPE html>
<html>
<head>
<!-- words sourced from: http://shakespeare-w.com/english/shakespeare/words.html -->
	<title>p2 Password Generator</title>
	<meta charset='utf-8'>
    <?php require 'logic.php'; ?>

</head>
<body>

		<h1>Password Generator</h1>
		<form method='POST' action = 'index.php'>
			Number of Words <input type="text" name="numRequested" maxlength = "1" value="1">

			<input type="submit" value="Submit">
		</form>

<p>
<?php for ($n = 0; $n < $numRequested; $n++) {
    $random = rand(1, count($wordlist)-1);
    echo" | {$wordlist[$random]}";
	}
?>
</p>
</body>
</html>
