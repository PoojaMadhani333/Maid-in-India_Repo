<?php include("connection.php");

@$v = $_GET['v'];
@$m_cont = $_POST['m_cont'];
@$m_add = $_POST['m_address'];
@$m_name = $_POST['m_name'];
@$m_spec = $_POST['m_spec'];
@$imgn= $_SESSION["uploadImg"];
echo "$imgn";
   @$sql = "INSERT into tbl_maid(m_name,m_contact,m_address,m_img) values ('$m_name','$m_cont','$m_add','$imgn')";
    @$m_result = @mysqli_query($conn,$sql);
    if ($m_result)
    {
        header("location:admin.php?msg=add");
    }
   

/*if(@$v==1)
{
    header("location:index.php");
}*/
?>




<?php

/*if(empty($id1))
{ echo $id1;
    header("location:admin.php?msg=error");
    exit;
}*/
/*else
{
    //    $_SESSION["uploadImg"]="";
   $sql="INSERT INTO tbl_item(item_image,rest_Id,item_name,item_price) VALUES ('$imgn','$id1','$itemname','$itemprice')";
  // $sqll=" INSERT INTO tbl_item(item_image,item_Id,rest_Id,item_name,item_price) VALUES ('$imgn','100','$id1','$itemname','$itemprice')";
  /* echo $imgn;
   echo $id1;
   echo $itemprice;
   echo $itemname;

  $kp=@mysqli_query($conn,$sql);
  if($kp){
  echo "done";}
   exit;*/
?>