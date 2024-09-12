<?php 

include("connection.php");
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Final Book</title>

   
   
    <style>
        #tbl
        {   align:center;
            border:none;
           border-collapse:collapse;
           border-spacing : 9px;
        }

        .isubmit
        {
            width:90%;
            margin-top: 30px;
            color: #85c99d;
            padding: 10px;
            background: #fff;
            font-weight: 600;
            font-size: 16px;   
        }

    .isubmit:hover
    {
        background:#78cfcf;
        color:white;
        border-color:#78cfcf;
    }


        .td
        {
            padding: 15px;
           
        }
    </style>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

    <!-- Header ================================================== -->
 <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col--md-4 col-sm-4 col-xs-4">
                    <a href="index.php" id="logo">
                      <!--  <img src="img/logo.png" width="150" height="100" alt="" data-retina="true" class="hidden-xs">-->

                    </a>
                </div>
                <nav class="col--md-8 col-sm-8 col-xs-8">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                            mobile</span></a>
                    <div class="main-menu"  style="font-size: 16px;">
                        <div id="header_menu">
                            <img src="img/logo.png" width="130" height="80" alt="" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                           <li class="submenu">

                           
                            <li class="submenu"><a href="index.php"><i class="icon_house_alt " title="Home"></i></a></li>
                            <?php if(@$_SESSION["username"]=="") { ?>
                                <li class="submenu"><a href="#0" data-toggle="modal" data-target="#login_2">Services</a></li>
                                <li class="submenu"><a href="#0" data-toggle="modal" data-target="#login_2">Contact Us</a></li>
                                <li class="submenu"><a href="#0" data-toggle="modal" data-target="#login_2">About us</a></li> 
                                <li class="submenu">
                                    <a href="#0" id="popLogin" data-toggle="modal" data-target="#login_2">Login</a>
                                </li>  
                                <?php } else if (@$_SESSION["username"]=="admin" && @$_SESSION["password"]=="admin") {?>

                                    
                                        <li class="submenu"><a href="service.php">Services</a></li>
                                        <li class="submenu"><a href="book.php">Book</a></li>
                                        <li class="submenu"><a href="contact.php">Contact Us</a></li>
                                        <li class="submenu"><a href="about.php">About us</a></li> 
                                        <li class="submenu"><a href="admin.php">Admin</a></li>
                                       <li  class="submenu"><a href="logout.php">Logout</a></li>  
                                     
                                    
                                        <?php }
                                        else if (@$_SESSION["username"]=="headmaid" && @$_SESSION["password"]=="headmaid") {?>
                                        
                                        <li class="submenu"><a href="head_maid.php">Requests</a></li>
                                        <!--<li class="submenu"><a href="head_maid.php">Requests</a></li>-->
                                        <li  class="submenu"><a href="logout.php">Logout</a></li> 
                                        <?php 
                                         } else { ?>
                
                                        <li class="submenu"><a href="service.php">Services</a></li>
                                        <li class="submenu"><a href="my_orders.php">Contact Us</a></li>
                                        <li class="submenu"><a href="about.php">About us</a></li> 
                                        <li class="submenu"><a href="logout.php">Logout</a></li>
                                <!--<li ><a href="cart_subdom.php" data-icon="&#xe015;" title="Cart"></a></li>
                                <li ><a href="my_orders.php" data-icon="&#xe0e6;" title="My Orders"></a></li>-->
                            <?php } ?>
                            
                            
                        </ul>

                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End row -->
        </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-natural-width="1400" data-natural-height="350" data-parallax="scroll" >
    <div id="subheader">
      <!--  <h1 class="head1" name="head" strcoll>Bill</h1>-->
    	
	</div> <!--End subheader -->
</section><!-- End section    -->
<!-- End SubHeader ============================================ -->

<?php
    
    @$od_id = $_SESSION['o_id'];
    $select1 = "select * from tbl_book where order_id=$od_id";
    $run = @mysqli_query($conn,$select1);
   
     if(!empty($od_id))
       {      //echo "$od_id";
            while($val = mysqli_fetch_array($run))
            {?>
            <br><br>
             <div class='col-md-12'>
				<div class='box_style_2' id='main_menu'>
                 <div class='col-md-offset-3 col-md-7'>
			        <div class='box_style_4'>
                        <form action="cancel.php">
					        <h2 class='inner'>BILL</h2>
                          
					<!--<table class='table table-striped cart-list'>-->
                        <table>
						<!--<thead>-->
							<tr>
								<td>
								<h3><b>Name : </b><?php echo $val['name'];?></h4>
								</td>
                            </tr>
                            
                            <tr>
								<td>
								<h3><b>	Address : </b> <?php echo $val['address'];?>
								</td>
                            </tr>
                                <br>
                              <tr>  
                                <td>
								<h3><b>	Services : </b><?php echo $val['service1']," ",$val['service2']," ",$val['service3']," ",$val['service4'] ;?>
								</td>
                            </tr> 
                                <br>
							<tr>
                                <td>
								<h3><b>	Total(&#8377) : </b><?php echo $val['total'];?>
								</td>
                            </tr>
                                <br>
                            <tr>
								<td>
								<h3><b>	Date : </b><?php echo $val['date1'];?>
								</td>
                            </tr>
                                <br>
                             <tr>   
                                <td>
                                <h3><b>Confirm  : </b><?php
                                    if($val['u_key']=='0')
                                    {
                                        echo "Requesting...";
                                    } 
                                    
                                    else if($val['u_key']=='1')
                                    {
                                        echo "<h3><b>Request Accepted... Maid Allocated Soon!!</b></h3>";
                                        echo "<a href='view_maid_detail.php?oid1=$od_id '>VIEW MAID DETAIL</a>";
                                    }
                                    else if($val['u_key']=='2')
                                    {
                                        echo "Request is rejected...";
                                    }
                                    ?>
								</td>
                                <tr>
								<td>
									<button class="isubmit">CANCEL BOOKING</button> 
								</td>
                            </tr>
							</tr>
						</thead>
				
                
                <tbody>    
            </table>
        <?php } ?>
        <?php
            }
            
            else //if(!empty($od_id))
            {   echo "$od_id";
                echo "<h3>Services are not Booked Yet...Plase Check Our Services...</h3>";
            } 
            
            ?>

            

    </div>
    </div>
    </div>
    </div>  
    

         
 <!-- Footer kp================================================== -->
 <footer>
        <div class="container">
            <div class="row">
               
                <marquee bgcolor="pink" width="70%" scrollamount="20"><!-----kp edit
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Maid in INDIA
                    </h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
                        Happy to service !
                    </h1>
                </marquee>
                <div class="row">
                    <div class="col-md-7">
                        <div id="social_footer">
                            <ul>
                                <li><a href="#0"><i class="icon-facebook"></i></a></li>
                                <li><a href="#0"><i class="icon-twitter"></i></a></li>
                                <li><a href="#0"><i class="icon-google"></i></a></li>
                                <li><a href="#0"><i class="icon-instagram"></i></a></li>
                                <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                                <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                            </ul>
                            <p>© Maid in India</p>
                            <!----kp edit- -->
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

</body>
</html>