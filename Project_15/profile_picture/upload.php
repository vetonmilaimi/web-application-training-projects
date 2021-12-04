<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/PROJECT_15/assets/php/";

include_once "../config.php";

  $msg = ""; 
  
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename;  
  
        $sql = "UPDATE users SET "; 
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM image"); 
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include($IPATH . "bootstrap.php"); ?>


</head>

<body>

    <header>
        <?php include($IPATH . "navbar.php"); ?>
    </header>

    <div class="container">
        <div style="text-align: center">
            <h2>Please upload your profile image</h2>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="uploadfile" value="" />

            <div>
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>


</body>

</html>