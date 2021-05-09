<?php

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

function calculator($num01, $num02, $oper) {
  $sum;
  switch ($oper) {
    case "add":
      $sum = $num01 + $num02;
      break;
    case "sub":
      $sum = $num01 - $num02;
      break;
    default:
      $sum = "There is an error with the calculator";
      break;
  }
  return $sum;
}

echo "Answer: " . calculator($num01, $num02, $oper);
