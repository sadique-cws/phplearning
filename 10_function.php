<?php 

// a block of code that execute a specific task. that make code reusable 


echo add(40, 50);
echo "<br>";
echo add(3566, 3350);
echo "<br>";
echo add(43330, 53450, 4);
echo "<br>";
echo add(4.5, 53.450);
echo "<br>";
echo add(4.5);
echo "<br>";
echo add(4,5,6);

// parameter with its default value i have then called (default args)
function add($x, $y = 0, $z = 0){
    $total = $x + $y + $z;
    return $total;
}


?>