<!-- array : a collection of elments -->

<?php 


$a = []; //empty array
$a = array(); //empty array

// integer array
$x = [2,3,4,6,7];
$y  = array(2,3,4,6,7);

// mixed array 
$z = [2, 3.4, true, "hello"];

// print_r($y);

// echo $z[0];2
// echo $z[1];3.4

// type of array 

// 1.indexed array (numerical array) (1D)
$data = ["cow","ox","bull"];

// 2. associative array (2d) (matrix)
$data = ["12" => "cow","15" => "ox","17" => "bull"];

// 3. multidimensional array (3d) (nested array)
$data = [
    "student1" => [
        "name" => "sadique",
        "age" =>22,
    ],
    "student2" => [
        "name" => "Alok",
        "age" =>23
    ]
];

echo "<pre>";
print_r($data["student2"]["name"]);
echo "</pre>";




?>