<!-- session -->

<?php 
session_start(); // Start the session



// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "rocking";



// Access session variables
echo "Session variables are set.<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"] . "<br>";

// unset()
// Unset a session variable

// unset($_SESSION["username"]);



// session_destroy(); // Destroy the session


?>

