<?php 

// for 
    // 1. for loop
    // 2. for each
//while
    // 1. while loop
    // 2. do while loop



// 1. for loop (when we know the no of iteration)

for($x = 2; $x <= 20; $x++){
    echo $x . "<br>";
}

for($x = 2; $x <= 20; $x++):
    echo $x . "<br>";
endfor;

// 2.  for each (use for collection of items (array))

$animals = ["cow","ox","bull","dog","cat"];

foreach($animals as $data):
    echo "$data <br>";
endforeach;

// 3. while (when we don't know the no of interation )
$x = 2;
while($x <= 20){
    printf("$x <br>");
    $x++;
}  

// 4. do while loop

$x = 2;
do{
    echo "$x <br>";
    $x++;
}
while($x <= 20);




?>