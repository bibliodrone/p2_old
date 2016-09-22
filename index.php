<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="p2-style.css">
	<!-- words sourced from: http://shakespeare-w.com/english/shakespeare/words.html -->
	<title>p2 Password Generator</title>
	<meta charset='utf-8'>
	<?php require 'logic.php'; ?>

</head>
<body>

	<h1>Shakespeare's Password Generator</h1>
	<p>William Shakespeare was the first cited in the Oxford English Dictionary as using these words.</p>
	<p>Source: <a href="http://shakespeare-w.com/english/shakespeare/words.html">shakespeare-w.com</a></p>
	<img src="Shakespeare_obligatory.jpg" alt = "Wm. Shakespeare">
	<h3>Enter the number of words in the little box; from one to nine:</h3>
	<form method='POST' action = 'index.php'>
		<input type="text" name="numRequested" maxlength = "1"><br><br>
		<input type="checkbox" name="Number" value="Yes"><p>Add a number?</p>
		<input type="checkbox" name="Symbol" value="Yes"><p>Add a symbol?</p><br>
		<input type="submit" value="Submit"><br>
		<?php if(isset($error)): ?>
			<span class ='error'><?php echo $error;?></span>
		<?php endif ?>
	</form>
<br>
	<table>
		<tr>
			<?php for ($n = 0; $n < $numRequested; $n++) {
				$random = rand(0, count($wordlist)-1);
				echo"<td> {$wordlist[$random]}</td>";
			}
			if(isset($_POST['Number']) && $_POST['Number'] == 'Yes') {
				$nRandom = rand(0,9);
				echo"<td> {$numList[$nRandom]}</td>";
			}
			if(isset($_POST['Symbol'])&& $_POST['Symbol'] == 'Yes') {
				$sRandom = rand(0, count($symbolList)-1);
				echo"<td>{$symbolList[$sRandom]}</td>";
			} ?>

		</tr>
	</table><br>
</body>
</html>
