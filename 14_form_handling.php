<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <div class="mb-3">
        <label for="">data</label>
        <input type="text" name="data"/><br>
        <input type="submit" value="submit"/><br>
    </div>
</form>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){
       
       $data = $_REQUEST['data'];

       echo $data* $data;
    }

?>
    
</body>
</html>