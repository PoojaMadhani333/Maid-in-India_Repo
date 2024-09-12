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
                        <!-- <img src="img/logo.png" width="130" height="80" alt="" data-retina="true" class="hidden-xs"> -->

                    </a>
                    
                        <!-- <h1 style="background-color:white;width:300px;height:50px;margin-left:200px">Order Details</h1> -->
                    
                </div>
                <nav class="col--md-8 col-sm-8 col-xs-8">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                            mobile</span></a>
                    <div class="main-menu" >
                        <div id="header_menu">
                            <!-- <img src="img/logo.png" width="130" height="80" alt="" data-retina="true"> -->
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <!--------Edit kp------->
                        <ul>
                        <li class="submenu"><a href="index1.php"><i class="icon_house_alt " title="Home"></i></a></li>
						
                                <!--<li class="submenu"><a href=".php">Maid List</a></li>--> 
                                <!-- <li class="submenu"><a href="about.php">About us</a></li>  -->
                                <!-- <li class="submenu"><a href="faq.php">Faq</a></li> -->
                                
                                <!-- <li class="submenu"><a href="index_8.php">Gallery</a></li> -->
                                <li class="submenu"><a href="logout.php">Logout</a></li>
                              <!--  <li ><a href="cart_subdom.php" data-icon="&#xe015;" title="Cart"></a></li>
                                <li ><a href="my_orders.php" data-icon="&#xe0e6;" title="My Orders"></a></li>-->
						</ul>
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End row -->
        </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/book5.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <!--<h1 class="head1" name="head" strcoll>Bill</h1>-->
    	
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<?php
  echo" <div class='col-md-12'>
   <div class='box_style_2' id='main_menu'>
   <div class='col-md-offset-3 col-md-7'>
    <div class='box_style_4'>
       <h2 class='inner'>Requested Service Booking</h2>";

   
   
    @$od_id = $_SESSION['o_id'];
    $select1 = "select * from tbl_book ";
    $run = @mysqli_query($conn,$select1);
    
     while($val = mysqli_fetch_array($run))
    {?>
      				<!--<table class='table table-striped cart-list'>-->
                        <table>
						<thead>
                           
                            <tr>
								<td>
								<h4><b>Order no</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b>&nbsp;<?php echo $val['order_id'];?></h4>
								</td>
                            </tr>
							<tr>
								<td>
								<h4><b>User Name &nbsp;&nbsp;&nbsp;:</b> &nbsp;<?php echo $val['name'];?></h4>
								</td>
                            </tr>
                            
                            <tr>
								<td>
									<h4><b>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b>&nbsp;<?php echo "    ",$val['address'];?>
								</td>
                            </tr>
                                <br>
                              <tr>  
                                <td>
									<h4><b>Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b>&nbsp;<?php echo " ",$val['service1'],"   ",$val['service2'],"   ",$val['service3'],"   ",$val['service4'] ;?>
								</td>
                            </tr> 
                                <br>
							<tr>
                                <td>
									<h4><b>Total(&#8377)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b>&nbsp;<?php echo $val['total'];?>
								</td>
                            </tr>
                                <br>
                            <tr>
								<td>
									<h4><b>Time Period &nbsp;: </b>&nbsp;<?php echo $val['service_period'];?>
								</td>
                            </tr>
                            <br>
                            <tr>  
                                <td>
									<h4><b>Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b>&nbsp;<?php echo $val['time1'];?>
								</td>
                            </tr> 
                            <br>
                            <tr>
								<td>
									<h4><b>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;<?php echo $val['date1'];?>
								</td>
                            </tr>
                                <br>
                             <tr>   
                                <td>
									<?php
                                        $send=$val['order_id'];
                                       // echo "<a href='final_accept.php'?oid=$send>ACCEPT</a><br><a>REJECT</a>"
                                       if($val['u_key'] == '1')
                                       {
                                           echo "<a href'#'?>ACCEPTED</a>";
                                       }
                                    
                                       else if($val['u_key'] == '2')
                                       {
                                           echo "<a href'#'?>REJECTED</a>";
                                       }
                                    ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <?php  if($val['u_key'] == '0') {?>
                                    <a style="font-size:large;" href="final_accept.php?oid=<?php echo $val['order_id'];?>">ACCEPT</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a style="font-size:large;" href="reject_request.php?oid=<?php echo $val['order_id'];?>">REJECT</a>
                                    <?php } 
                                    
                                    ?>
								</td>
							</tr>
						</thead>
				<tbody>
    </div>
    </div>
    </div>
    </div>  
        <?php } ?>
        

         
 <!-- Footer kp================================================== -->
 <!--<footer>
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
                            <p>© Maid in India</p><!----kp edit-->
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