<?php include("connection.php");


/*function function_alert($message) {   
	// Display the alert box    
	   echo "<script type ='text/JavaScript'>alert('$message');</script>";  
	   //echo "alert('$message')";  
	   //echo "</script>";   
   }*/

@$newuser = $_POST['regname'];
@$newlname = $_POST['lastname'];
@$myemail = $_POST['email'];
@$newpassw = $_POST['regpass'];
$qry = "select * from tbl_login where username='$newuser' and password='$newpassw'";
	$data=@mysqli_query($conn,$qry);
	$res=@mysqli_fetch_array($data);
	
/*if($res['user_name']==$newuser or $res['user_pass']==$newpassw)
 {
	header("location:index.php?new=same");
 }
else{*/
	if($res)
 {
	header("location:index.php?msg=same");
 }
else{

			$insert = "insert into tbl_login(username,password) values('$newuser','$newpassw')";
			if(@mysqli_query( $conn , $insert))
			{
				//function_alert("User Created");  
				//echo "<script type ='text/JavaScript'>alert('User Created')</script>";
				header("location:index.php?msg=add");
			}		
			else
			{
				header("location:index.php?msg=error");
			}

	}
?>

