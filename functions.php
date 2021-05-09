<?php

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

$num01 = filter_input(INPUT_GET, 'num01', FILTER_SANITIZE_NUMBER_INT);
$num02 = filter_input(INPUT_GET, 'num02', FILTER_SANITIZE_NUMBER_INT);

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

if (is_numeric($num01)) {
  if (is_numeric($num02)) {
    echo "Answer: " . calculator($num01, $num02, $oper);
  } else {
    echo "Invalid entry. Please enter a number only";
  }
} else {
  echo "Invalid entry. Please enter a number only";
}
