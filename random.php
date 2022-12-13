<?php

// Get the secret value from the input data
$secret = 1000;

// Generate a random number between 5 and 8 digits long
$min = pow(10, 4);
$max = pow(10, 7);
$random = rand($min, $max);

// Check if the random number is divisible by the secret value
if ($random % $secret == 0) {
    // Output the random number on the page
    echo "Random value is " . $random;
