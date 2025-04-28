<?php 


// $_POST is a superglobal variable in PHP that is used to collect form data after submitting an HTML form with method="post". this variable is an array. 


// $_GET is a superglobal variable in PHP that is used to collect form data after submitting an HTML form with method="get". this variable is an array.


// $_REQUEST is a superglobal variable in PHP that is used to collect form data after submitting an HTML form with method="get" or method="post". this variable is an array.


// $_SERVER is a superglobal variable in PHP that contains information about headers, paths, and script locations. this variable is an array.

// $_SESSION is a superglobal variable in PHP that is used to store session variables. this variable is an array.

// $_COOKIE is a superglobal variable in PHP that is used to collect data from cookies. this variable is an array.


// $_FILES is a superglobal variable in PHP that is used to collect file upload data. this variable is an array.

// $_ENV is a superglobal variable in PHP that is used to collect environment variables. this variable is an array.


// $GLOBALS is a superglobal variable in PHP that is used to access global variables from anywhere in the PHP script. this variable is an array.


// session_start();
echo "<pre>";
// print_r($_POST);
// print_r($_GET);
// print_r($_REQUEST);
print_r($_FILES);
print_r($_SERVER);

// $_SESSION["name"] = "manmohan";
// print_r($_SESSION);
// print_r($_COOKIE);
// print_r($_ENV);
// print_r($GLOBALS);
echo "</pre>";


$x = 10;
$y = 20;

echo $GLOBALS['y']; // 10


?>