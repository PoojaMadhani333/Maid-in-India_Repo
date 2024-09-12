<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Maid !-Admin</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

	<!-- BASE CSS -->
	<link href="css/base.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
	<link href="css/bootstrap3-wysihtml5.min.css" rel="stylesheet">
	<link href="css/dropzone.css" rel="stylesheet">

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
	</div>
	<!-- End Preload -->

	 <!-- Header ================================================== -->
	 <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col--md-4 col-sm-4 col-xs-4">
                    <a href="index.php" id="logo">
                        <img src="img/logo.png" width="150" height="100" alt="" data-retina="true" class="hidden-xs">

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
                                        <li class="submenu"><a href="contact.php">Contact Us</a></li>
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
    </header>	<!-- End Header =============================================== -->

	<!-- SubHeader =============================================== -->
	<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/admin.jpg" data-natural-width="1400" data-natural-height="350">
		<div id="subheader">
			<div id="sub_content">
				<h1 style="font-family:Bernard MT; color:orange; font-size:60px;">Admin Side</h1>
				
			</div><!-- End sub_content -->
		</div><!-- End subheader -->
	</section><!-- End section -->
	<!-- End SubHeader ============================================ -->


	<!-- Content ================================================== -->
	<!--<div class="container margin_60">
		<div id="tabs" class="tabs">
			<nav>
				<ul>
				<li><a href="#section-1" class="icon-menut-items"><span>Orders</span></a>
					</li>
					<li><a href="#section-2" class="icon-menut-items"><span>Add Menu</span></a>
					</li>
					
				</ul>
			</nav>
			<div class="content">
				
			<section  id="section-1">

					<div class="row">
                    
						<div class="col-md-6 col-sm-6 add_bottom_15">
							<div class="indent_title_in">
								
				
		</div>--><!-- End wrapper_indent -->
		</div>
                        
					</div><!-- End row -->

					<hr class="styled_2">
                    
					
				</section>
			


				<section id="section-2">
					<div class="indent_title_in">
						<i class="icon_document_alt"></i>
						<h3>Add Maid</h3>
						<p>Here You Can Add New Maid </p>
					</div>
                    
					<div class="wrapper_indent">
						

						<div class="menu-item-section clearfix">
							<h4>Maid Details</h4>
							<div><a href="#0"><i class="icon_plus_alt"></i></a>
							</div>
						</div>
						<form method="POST" action="addnew.php">		
						<div class="strip_menu_items">
							<div class="row">
								<div class="col-sm-3">
									<div class="menu-item-pic dropzone">
										<input type="file">
										<div class="dz-default dz-message"><span>Click or Drop<br>Images Here</span>
										</div>
									</div>
								</div>
								<div class="col-sm-9">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Name : </label>
												<input type="text"  name="m_name" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="m_address" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Contact</label>
										<input type="number" name="m_cont" class="form-control">
									</div>
									<div class="form-group">
										<label>Specialization</label>
										<input type="text" name="m_spec" class="form-control">
									</div>
									
										
										<hr class="styled_2">
                    
										<div class="wrapper_indent">
											<input type="submit" value="Add Maid" class="btn_1">
											<!--<div class="add_more_cat"><a href="#0" class="btn_1">Add menu</a> </div>-->
										</div>

									
									
								</div>
							</div><!-- End row -->
						</div><!-- End strip_menu_items -->
					</div>
					<!-- <hr class="styled_2">        
					<div class="wrapper_indent">
						<div class="add_more_cat"><a href="addnew.php" class="btn_1">Add menu</a> </div>
					</div> -->
				</section><!-- End section 2 -->
			</form>	
			</div><!-- End content -->
		</div>
	</div><!-- End container  -->
	<!-- End Content =============================================== -->

	<!-- Footer ================================================== -->
	<footer>
        <div class="container">
            <div class="row">
               
                <marquee bgcolor="pink" width="97%" scrollamount="20">
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Maid in INDIA</h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
                        Maid for INADIAN famillies!!!
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
                            <p>© Eat Up!</p>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->
	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Login modal -->
	<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
					<div class="login_icon"><i class="icon_lock_alt"></i>
					</div>
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
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
				<form action="#" class="popup-form" id="myRegister">
					<div class="login_icon"><i class="icon_lock_alt"></i>
					</div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
					<input type="email" class="form-control form-white" placeholder="Email">
					<input type="text" class="form-control form-white" placeholder="Password" id="password1">
					<input type="text" class="form-control form-white" placeholder="Confirm password" id="password2">
					<div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div>
	<!-- End Register modal -->

	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Specific scripts -->
	<script src="js/tabs.js"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>

	<script src="js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript">
		$('.wysihtml5').wysihtml5({});
	</script>
	<script src="js/dropzone.min.js"></script>
	<script>
		if ($('.dropzone').length > 0) {
			Dropzone.autoDiscover = false;
			$(".menu-item-pic").dropzone({
				url: "upload-db.php",
				maxFiles: 1,
				addRemoveLinks: true
			});
		}
	</script>

	<!-- Data added to the table-->
	<?php 
	@$msg=$_GET["msg"];
		function Add($message) {   
			echo "<script type ='text/JavaScript'>";  
			echo "alert('$message')";  
			echo "</script>";   
		}   
		if($msg=="add")
		{
			Add("Maid Added");  
		} 
		else if($msg=="error") 
		{
			Add("Invalid data.");  
		}
	?>
</body>

</html>