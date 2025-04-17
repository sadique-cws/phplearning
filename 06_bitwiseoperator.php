<?php 


// 1. & and (bitwise)


// 5 = 101
// 10 = 1010


// and bitwise 
        // 0 1 0 1
        // 1 0 1 0
        // ---------
        // 0 0 0 0   = 0

$x = 5;
$y = 20;

// 2. OR (|) bitwise
        // 0 0 1 0 1
        // 1 0 1 0 0
        // ---------
        // 1 0 1 0 1 =  21

// 3. NOT bitwise 

    // -(n + 1)

// 4. XOR (exclusive OR)

        // 0 0 1 0 1
        // 1 0 1 0 0
        // ---------
        // 1 0 0 0 1 =  17

// 5. << left shift (multiply by 2 or givien no)


// 6. >> right shift (divide by 2)
echo $y >> 1;

?>