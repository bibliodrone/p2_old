<?php
$wordlist = explode("\n", file_get_contents('wordlist.txt'));
$wantNum = "" ;
$numList = array(0,1,2,3,4,5,6,7,8,9);
$wantSymbol = "" ;
$symbolList = array("!", "@","#","$","&");
$numRequested= 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $numRequested = $_POST["numRequested"];

  # Input validation
  if (empty($_POST["numRequested"])) {
    $error = "Give me something to work with, here!";
    return;
  }
  else if(ctype_alpha($numRequested)) {
    $error = 'Please enter numbers here; no letters or symbols.';
    return;
  }
  else {
    $numRequested = $_POST["numRequested"];
    $numRequested = trim($numRequested);
  }

}
