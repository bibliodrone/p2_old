<?php
$wordlist = explode("\n", file_get_contents('wordlist.txt'));
$numRequested = $_POST["numRequested"];
# Input validation
if (empty($_POST["numRequested"])) {
  echo "<p>Please enter a number.</p>";
  return;
}

else {
  $numRequested = $_POST["numRequested"];
  $numRequested = trim($numRequested);

if(preg_match("[^1-9]", $numRequested)) {
  echo "<p>Valid entries are 4 to 9.</p>";
  return;
  }
}
