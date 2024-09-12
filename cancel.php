<?php
   
   
    include('connection.php');
    $od_id = $_SESSION['o_id'];
    $select1 = "delete from tbl_book where order_id=$od_id";
    $run = @mysqli_query($conn,$select1);
    if($run)
    {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Booking Succesfully Delete');
             window.location.href='index.php';
          </script>");
    }
    ?>