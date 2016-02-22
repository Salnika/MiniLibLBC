<?php

require_once("../LibLBC.php");

$url = $_GET['url'];
$opt1 = $_GET['date'];
$opt2 = $_GET['image'];
$opt3 = $_GET['title'];
$opt4 = $_GET['category'];
$opt5 = $_GET['placement'];
$opt6 = $_GET['price'];

$opt = array($opt1, $opt2, $opt3, $opt4, $opt5, $opt6);

if (strlen($url) > 0){
  $req = new LBCRequest($url, $opt);

  $result = $req->parseRequest();

  echo $result;
}
else {
  echo "Pas d'URL";
}
?>
