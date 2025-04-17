<?php 

$string = "hello ";
$string .= " world ";


// echo $string;



// ternary operator

$x = 130;
$y = 220;
$z = 50;

// echo ($x > $y)? (($x > $z)? $x : $z) : (($y > $z) ? $y : $z);

$firstname = null;
$lastname = null;
$nickname = null;

//Nullish coalescing operator 
echo $firstname ??  $lastname ?? $nickname ?? null ?? "krishna" ?? "hello";




?>
