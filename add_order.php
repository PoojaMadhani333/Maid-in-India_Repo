<?php include("connection.php");       
        //session_start();
        @$name = $_POST['name'];
        @$add = $_POST['address'];
        @$contact = $_POST['contact'];
        @$email = $_POST['email'];
        @$date1 = $_POST['date1'];
        @$ppl_cnt = $_POST['pplno'];
        @$time1 = $_POST['period'];
        
        @$i = $_SESSION['id']; 
      
       //echo $_SESSION['p1']; 
       $conn= @mysqli_connect("localhost", "root","","maid_db");
       
 
        
        @$insert = "insert into tbl_book(name,address,date1,contact,time1,email,ppl_count,u_id,u_key)
                    values ('$name','$add','$date1','$contact','$time1','$email','$ppl_cnt',$i,'0')";
        $result = @mysqli_query($conn,$insert);
       
        

        if(!isset($_POST['s1']) && !isset($_POST['s2']) &&!isset($_POST['s3']) &&!isset($_POST['s4'])  )
        {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Request Reject Succesfully');
             window.location.href='my_orders.php';
          </script>");
        }
        
        
       if($_SESSION['p1'] == 1)
       {   @$servi_od = "1day";
            
            if(isset($_POST['s1']))
            {   
                @$chk11 = $_POST['s1'];
                echo "$chk11";
                @$totc = $ppl_cnt * 90;
                @$in_s1 = "update tbl_book set service1='$chk11'  where u_id='$i' ";
                $re_1 = @mysqli_query($conn,$in_s1);  
               
            }

             
            if(isset($_POST['s2']))
            {  
               @$chk12 = $_POST['s2']; 
               @$tots = $ppl_cnt * 80;
               @$in_s2="update tbl_book set service2='$chk12' where u_id='$i' ";
               @mysqli_query($conn,$in_s2) ;
            }
           
            if(isset($_POST['s3']))
            {   
                @$chk13 = $_POST['s3'];
                @$totw = $ppl_cnt * 110; 
                @$in_s3="update tbl_book set service3='$chk13' where u_id='$i' ";
                @mysqli_query($conn,$in_s3) ;
            }

            if(isset($_POST['s4']))
            {   
                @$chk14 = $_POST['s4']; 
                @$totm = $ppl_cnt * 50;
                @$in_s4="update tbl_book set service4='$chk14' where u_id='$i' ";
                @mysqli_query($conn,$in_s4);    
            }

            @$totf = $totc + $totm + $tots + $totw;
          echo $totf;

   
    @$insert1 = "select order_id from tbl_book where u_id = '$i'";  
    @$result1 =  @mysqli_query($conn,$insert1);
    
    while($value = @mysqli_fetch_array($result1))
    {
        echo "<h2>",$value['order_id'],"</h2>";
        $_SESSION['o_id']=$value['order_id'];
               
    }
    @$o1= $_SESSION['o_id'];
    @$up="update tbl_book set total = '$totf'  where order_id= '$o1'";
    @$up_s = "update tbl_book set service_period = '$servi_od'  where order_id= '$o1'";
    @$up_re=@mysqli_query($conn,$up);
    @$up_se=@mysqli_query($conn,$up_s);
    if($up_se)
    {
        header("location:bill1.php");
    }
    

 }
         
        
     
     
     
   else  if($_SESSION['p2'] == 2)
   {   @$servi_ow = "1week";
        if(isset($_POST['s1']))
        { 
            @$chk11 = $_POST['s1'];
            @$totc = $ppl_cnt * 180;
            @$in_s1 = "update tbl_book set service1='$chk11'  where u_id='$i' ";
            $result1 = @mysqli_query($conn,$in_s1);  
        }
               

       if(isset($_POST['s2']))
       {   
            @$chk12 = $_POST['s2']; 
            @$tots = $ppl_cnt * 160;
            @$in_s2="update tbl_book set service2='$chk12' where u_id='$i' ";
            @mysqli_query($conn,$in_s2) ;
       }
        
       if(isset($_POST['s3']))
       {  
          @$chk13 = $_POST['s3'];
          @$totw = $ppl_cnt * 200; 
          @$in_s3="update tbl_book set service3='$chk13' where u_id='$i' ";
          @mysqli_query($conn,$in_s3) ;
       }

       if(isset($_POST['s4']))
       {   
          @$chk14 = $_POST['s4']; 
          @$totm = $ppl_cnt * 100;
          @$in_s4="update tbl_book set service4='$chk14' where u_id='$i' ";
          @mysqli_query($conn,$in_s4);    
       }

       @$totf = $totc + $totm + $tots + $totw;
  echo $totf;

   
    $insert1 = "select order_id from tbl_book where u_id = '$i'";  
    $result1 =  @mysqli_query($conn,$insert1);
    
    while($value = @mysqli_fetch_array($result1))
    {
        echo "<h2>",$value['order_id'],"</h2>";
        $_SESSION['o_id']=$value['order_id'];
               
    }
    $o1= $_SESSION['o_id'];
    $up="update tbl_book set total = '$totf'  where order_id= '$o1'";
    $up_re=@mysqli_query($conn,$up);
    @$up_s = "update tbl_book set service_period = '$servi_ow'  where order_id= '$o1'";
    $up_se=@mysqli_query($conn,$up_s);
    if($up_se)
    {
        header("location:bill1.php");
    }
    
      
  }


  else if($_SESSION['p3'] == 3)
  { @$servi_om = "1month";
    if(isset($_POST['s1']))
    {  
        @$chk11 = $_POST['s1'];
        @$totc = $ppl_cnt * 300;
        @$in_s1 = "update tbl_book set service1='$chk11'  where u_id='$i' ";
        $result1 = @mysqli_query($conn,$in_s1);  
     }
            

    if(isset($_POST['s2']))
    {   
      @$chk12 = $_POST['s2']; 
      @$tots = $ppl_cnt * 200;
      @$in_s2="update tbl_book set service2='$chk12' where u_id='$i' ";
      @mysqli_query($conn,$in_s2) ;
    }
     
    if(isset($_POST['s3']))
    { 
        @$chk13 = $_POST['s3'];
        @$totw = $ppl_cnt * 250; 
        @$in_s3="update tbl_book set service3='$chk13' where u_id='$i' ";
        @mysqli_query($conn,$in_s3) ;
    }

    if(isset($_POST['s4']))
    { 
        @$chk14 = $_POST['s4']; 
        @$totm = $ppl_cnt * 150;
        @$in_s4="update tbl_book set service4='$chk14' where u_id='$i' ";
        @mysqli_query($conn,$in_s4);    
    }

  
     @$totf = $totc + $totm + $tots + $totw;
     echo $totf;

   
     @$insert1 = "select order_id from tbl_book where u_id = '$i'";  
     @$result1 =  @mysqli_query($conn,$insert1);
    
     while($value = @mysqli_fetch_array($result1))
     {
        echo "<h2>",$value['order_id'],"</h2>";
        $_SESSION['o_id']=$value['order_id'];
               
     }
    @$o1= $_SESSION['o_id'];
    @$up="update tbl_book set total = '$totf' where order_id= '$o1'";
    @$up_ser = "update tbl_book set service_period='$servi_om'  where order_id= '$o1'" ;
    
    @$up_re=@mysqli_query($conn,$up);
    @$up_se=@mysqli_query($conn,$up_ser);
    if($up_se)
    {
        header("location:bill1.php");
    }

    
}
 

        
   ?>