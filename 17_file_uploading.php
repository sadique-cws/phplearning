
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload </title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/><br>
    <input type="submit" value="upload" name="upload"/><br>
</form>
    
</body>
</html>

<?php 


if(isset($_POST['upload'])){
    $image_name = $_FILES['file']['name'];
    $image_tmp = $_FILES['file']["tmp_name"];

    $image_size = $_FILES['file']['size'];
    
    
    $image_type = $_FILES['file']['type'];

    if($image_type == "image/png" || $image_type == "image/jpg" || $image_type == "image/jpeg"){
        move_uploaded_file($image_tmp, "images/$image_name");
    }
    else{
        move_uploaded_file($image_tmp, "other/$image_name");
    }


    // echo "uploaded";
   
}




?>