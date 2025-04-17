<?php 

echo phpversion();
echo "<br>";
echo phpinfo();
echo "<br>";

    echo "this is before html";
    echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document <?= "this is php from title";?></title>
    <?php 

    echo "this is head";
    echo "<br>";

?>
    
</head>
<body>

<?php 

    echo "this is body";
    echo "<br>";

?>

    
</body>
</html>

<?php 

    echo "this is after html";
    echo "<br>";

?>