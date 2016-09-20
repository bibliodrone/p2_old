<?php
// $file = fopen("wordlist.txt", "r");
$wordlist = array("to", "be", "or", "not", "and", "whatever");

/* while (!feof($file)) {
   $wordlist[] = fgets($file); */
}
print_r ($wordlist)

//fclose($file);
//$listLength = count($wordlist);

	# Input validation
	// if($numRequested < 4 || $numRequested > 9)) {
	// 	$error = 'Valid entries are 4 to 9.';
	// 	return;
	// }
	// else if(!ctype_digit($numRequested)) {
	// 	$error = 'Please enter a number between 4 and 9.';
	// 	return;
	// }
$wordsOut = array();

for ($n = 0; $n < $numRequested; n++) {
	$random = rand(1, $listLength);
	echo"<p>";
	echo $wordlist[$random];
	echo"</p>";
}
