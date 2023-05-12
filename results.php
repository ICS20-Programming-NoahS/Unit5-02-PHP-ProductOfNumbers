<?php

  // initialize the product as an empty string
  $product = "";
    
  // Get the first number
  $firstNumber = intval($_POST["first-number"]);

  // Get the second number
  $secondNumber = intval($_POST["second-number"]);

  $product = 0;

  //use for loops to calculate the product of the first and second number the user enters
  for ($counter = 0; $counter < $secondNumber; $counter++) {

    $product = $product + $firstNumber;

  }

  // for loop for negatives
  for ($counter = 0; $counter > $secondNumber; $counter--) {
    
    $product = $product - $firstNumber;

  }

  // for loop for zero
  for ($counter = 0; $counter == $secondNumber; $counter++) {
    
    $product = $product;

  }


  // Display the product of the first and second number back to the user
  echo "The answer of " . $firstNumber . " X " . $secondNumber . " is " . $product . ".";
?>