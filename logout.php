<?php   session_start();
        $_SESSION["username"]="";
        $_SESSION["password"]="";
        $_SESSION["u_id"]="";
        header("location:index.php");
        exit;
?>