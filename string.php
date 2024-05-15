<?php

// For counting no of vowels inside a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to reverse a string
function reverseString($string) {
    return strrev($string);
}

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string
foreach ($strings as $string) {
    // Count vowels
    $vowelCount = countVowels($string);
    // Reverse string
    $reversedString = reverseString($string);
    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString <br/>";
}
