<?php include("connection.php");
	@$myuser = $_POST['txtname'];
	@$mypass = $_POST['txtpass'];
	
	$qry = "select * from tbl_login where username='$myuser' and password='$mypass'";
	$data=@mysqli_query($conn,$qry);
	$res=@mysqli_fetch_array($data);
	// echo"username: ".$res['user_Name'];
	// echo"pass: ".$res['user_Pass'];
    if($res['id']>0)
    {
        $_SESSION["username"]=$res['username'];
        $_SESSION["password"]=$res['password'];
        $_SESSION["id"]=$res['id'];
        header("location:index.php");
        exit;
    }
    else 
    {
//        echo '$("#login_2").modal("show");';
      header("location:index.php?error=invalid");
        exit;
    }
    
           
                                
?>