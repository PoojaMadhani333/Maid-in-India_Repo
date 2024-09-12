<?php 
include("connection.php");
    $uploads_dir = "img/";
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = basename($_FILES["file"]["name"]);
    $uploadImg=$uploads_dir.$name;
    $_SESSION["uploadImg"]=$uploadImg;
    move_uploaded_file($tmp_name, $uploadImg);  
?>