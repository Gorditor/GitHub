<?php
// Define a function named "test" that takes a parameter $str
function test($str) 
{
    // Use a ternary operator to check if the length of $str is greater than 1
    // If true, concatenate the last character with the substring from index 1 to length-2
    // and then concatenate the first character at the end
    // If false, return $str as it is
    return strlen($str) > 1 ? substr($str, strlen($str) - 1) . substr($str, 1, strlen($str) - 2) . substr($str, 0, 1) : $str;
}

// Call the test function with argument "abcd" and echo the result
echo test("abcd") . "\n";

// Call the test function with argument "a" and echo the result
echo test("a") . "\n";

// Call the test function with argument "xy" and echo the result
echo test("xy") . "\n";
?>