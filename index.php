<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <title>Maid in INDIA!</title>
    <style>
        ::placeholder {
            color: White;
            opacity: 1;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic'
        rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
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
                          <!--  <img src="img/logo.png" width="130" height="80" alt="" data-retina="true">-->
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                           <li class="submenu">

                           
                            <li class="submenu"><a href="index.php"><i class="icon_house_alt " title="Home"></i></a></li>
                            <?php if(@$_SESSION["username"]=="") { ?>
                                <li class="submenu"><a href="#0" data-toggle="modal" data-target="#login_2">Services</a></li>
                                <li class="submenu"><a href="#0" data-toggle="modal" data-target="#login_2">Book</a></li>
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
                                        <li class="submenu"><a href="bill.php">My Orders</a></li>
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
    <section class="header-video">
        <div id="hero_video">
            <div id="sub_content">
                <h1 style="font-family:Bernard MT; color:orange; font-size:90px;">Maid in INDIA</h1>
                <p style="font-family:Buxton Sketch; font-size:28px; font-weight:bold;color:#FDCDCD">
                    <!-- Bernard MT, Buxton Sketch-->
                    cleaness is our first priority...
                </p>
             <!--   <form method="post" action="list_page.php">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <div class="div1">-->
                         
                           <!-- <span class="input-group-btn">
                                <input type="submit" class="btn_search" value="submit">
                            </span>
                        </div>
                    </div>
                </form>-->
            </div><!-- End sub_content -->
        </div>
        <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/home"
            data-teaser-source="video/home" data-provider="Vimeo" data-video-width="1900" data-video-height="960">
        <div id="count" class="hidden-xs">
            <!---- <ul>
            <li><span class="number">2650</span> Restaurant</li>
            <li><span class="number">5350</span> People Served</li>
            <li><span class="number">12350</span> Registered Users</li>
        </ul>-->
        </div>
    </section><!-- End Header video -->
    <!-- End SubHeader ============================================ -->

    <!-- Content ================================================== -->

    <!--<div class="white_bg">
        <div class="container margin_60">

        
        </div>
                End row -->

   
    <!-- </div>End container -->
    
    <!--</div>End white_bg -->

    
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home.jpg" data-natural-width="1200"
        data-natural-height="600">
        
        <section class="hw-it-wrks bg-dot-full pt-95 pb-75 pb-sm-35" id="process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br><br><br><br>
                    
                    <h1 class="mb-45" style="    font-family: Bernard MT;color: orange;font-size: 90px;">Our Process</h1>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="each-hw-works">
                        <div class="hw-icon">
                            <img src="img/book6.jpg" alt="" width="200px">
                        </div>
                        <span class="hw-steps shadow-blue mt-30 mb-25" style="width:20px;font-size:30px">1</span>
                        <div class="hw-text">
                            <h3 class="f-700 mb-15 mt-sm-20" >Book Online</h3>
                            <p>Book Your Service Online </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="each-hw-works">
                        <div class="hw-icon">
                            <img src="img/home5.jpg" alt="" width="200px">
                        </div>
                        <span class="hw-steps shadow-blue mt-30 mb-25" style="width:20px;font-size:30px">2</span>
                        <div class="hw-text">
                            <h3 class="f-700 mb-15 mt-sm-20">Maid Services</h3>
                            <p>Get the best servcies </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="each-hw-works">
                        <div class="hw-icon">
                            <img src="img/book5.jpg" alt="" width="200px" height="200px">
                        </div>
                        <span class="hw-steps no-line shadow-blue mt-30 mb-25" style="width:20px;font-size:30px">3</span>
                        <div class="hw-text">
                            <h3 class="f-700 mb-15 mt-sm-20">You Relax</h3>
                            <p>You just relax &amp; enjoy service. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section><!-- End section -->
    <!--<div class="high_light">
        <div class="container">
            <h3>What's Your Mood To Eat?</h3>
            <p>Craving For Mouth-Watering Dishes?!</p>-->
            <?php //if(@$_SESSION["username"]=="") { ?>
                <!--<a href="#0" data-toggle="modal" data-target="#login_2">Click to Cure Your Hunger</a>-->
                <?php //} else { ?>
                    <!--<a href="list_page.php">Click to Cure Your Hunger</a>-->
                    <?php //}  ?>
        </div><!-- End container -->
    </div><!-- End hight_light -->

    
    <!-- End Content =============================rgb(226, 220, 211)================== -->

      </div><!-- End row -->

    </div><!-- End container -->

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
               
                <marquee bgcolor="pink" width="97%" scrollamount="20">
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Maid in INDIA</h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
                        We are here to provide services...
                    </h1>
                </marquee>
                <div class="row">
                    <div class="col-md-16">
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
                            <p>© Maid in INDIA</p>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

    <div class="layer"></div><!-- Mobile menu overlay mask -->

    <!-- Login modal -->
  <!-- Login modal -->   
		
							

	

<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form class="popup-form" id="myLogin" method="POST" action="login-db.php">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <?php 
                        @$k = $_GET['error']; 
                        @$al = $_GET['msg']; 
                        if($k) 
                        { ?>  
                        
                        <h5 style='color: red;'>Username or Password Invalid</h5><br> <?php } ?>  
                      <?php  
                            if($al=="same") 
                        { ?>  
                        
                        <h5 style='color: red;'>Already a User.</h5><br> <?php } ?>  


                	<input type="text" class="form-control form-white" on placeholder="Username"  name="txtname">
					<input type="password" class="form-control form-white" placeholder="Password" name="txtpass">
					<div class="text-left">
					</div>
					<div class="text-left">
						<h5>Not Our Customer?</h5>   <a href="#" data-toggle="modal" data-target="#register">Register</a>
						
		 			</div>
					
					 
					<input type="submit" class="btn btn-submit"  name="submit" value="SUBMIT">
					
				</form>
			</div>
		</div>
</div>
<!-- End modal -->  
 <!-- Register modal -->   



 <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="register.php" class="popup-form" id="myRegister" method="post" >
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <?php            
                        @$r = $_GET['msg']; 
                        if($r=="error") 
                        { ?>  
                        <h5 style='color: red;'>Invalid Data</h5><br> 
                    <?php } ?>  

					<input type="text" class="form-control form-white" placeholder="Name" name="regname">
					<input type="text" class="form-control form-white" placeholder="Last Name" name="lastname">
                    <input type="email" class="form-control form-white" placeholder="Email" name="email">
                    <input type="password" class="form-control form-white" placeholder="Password"  id="password1" name="regpass">
                    <input type="password" class="form-control form-white" name = "conpass" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<input type="submit" class="btn btn-submit" value="SUBMIT">
				</form>
			</div>
		</div>
        

	



</div><!-- End Register modal -->     
    

<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
$(document).ready(function() {
    <?php  if($k) { ?>
    $("#login_2").modal('show'); <?php } ?>

    <?php  if($r=="error") { ?>
    $("#register").modal('show'); <?php } ?>

    <?php  if($r=="same") {  ?>
        $("#login_2").modal('show'); <?php } ?>

        <?php  if($r=="add") {  ?>
        $("#login_2").modal('show'); <?php } ?>

   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });  

      

});
</script>

<?php 
    function Add($message) {   
        echo "<script type ='text/JavaScript'>";  
        echo "alert('$message')";  
        echo "</script>";   
    }   
    
   /* if(@$r=="same")
    {
        Add("Already a User. Please Login.");
        echo "<script type ='text/JavaScript'>";  
        $("#login_2").modal('show');  
        echo "</script>";   
     } */

             if(@$r=="add")
    {
        Add("Registered successfully."); 
        //echo "<script type ='text/JavaScript'>";  
         //$("#login_2").modal('show');  
         //echo "</script>"; 
  }
       
    
?>

</body>
</html>