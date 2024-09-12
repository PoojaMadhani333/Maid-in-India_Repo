<?php 
    include('connection.php');
    @$ido1 = $_GET['oid'];
   
    $update_u1 = "update tbl_book set u_key='2' where order_id=$ido1";
   
    $done1 = @mysqli_query($conn,$update_u1);

    if($done1)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Request Reject Succesfully');
         window.location.href='head_maid.php';
      </script>");
    }