<!DOCTYPE html>
<html>
<head>

	<title>p2 Password Generator</title>
	<meta charset='utf-8'>
    <?php require 'logic.php'; ?>

</head>
<body>

		<h1>Password Generator</h1>
		<form method='POST' action = 'index.php'>
			<h2>Enter number of Words</h2>
			<input type="number" name="numRequested" min="4" max="9">
			<input type="submit" value="Submit">

			<?php if(isset($error)): ?>
				<div class='error'><?php echo $error; ?></div>
			<?php endif ?>
		</form>

		<h2>Words Generated:</h2>
		<?php
			print_r($wordsOut);
		?>
		

<!-- words sourced from: http://shakespeare-w.com/english/shakespeare/words.html -->
</body>
</html>
