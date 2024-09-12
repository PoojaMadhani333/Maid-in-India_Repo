<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title> Order Details</title>

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
<style>
    .head1{
        width:400px;
        height: 60px;
        color:black;
        font-size:50px;
       /* box-shadow: 1px 1px 12px 3px rgb(100, 250, 300);*/
        border-style:solid;
        border-width:3px;
        border-color:rgb(100, 250, 230);
        border-radius:3px;
       /* background-color:rgb(255,255,255,0.6);*/
       
        margin-left:500px;
        margin-top:200px;
        font-style: italic;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .ldetails{
        width:200px;
        color:black;
        font-size:15px;
        border:white;
        
    }

    .speriod{
        width:200px;
        height:40px;
        margin-left:-60px;
    }
    .isubmit{
        width: 45%;
    margin-top: 30px;
    color: #85c99d;
    padding: 10px;
    background: #fff;
    font-weight: 600;
    
    /* outline: none; */
    /* -webkit-transition: all 0.2s ease; */
    /* transition: all 0.2s ease; */
    font-size: 16px;
    /* touch-action: manipulation; */
    /* margin-left:20px; */

    }

    .isubmit:hover
    {
        background:#78cfcf;
        color:white;
        border-color:#78cfcf;
    }
  
    .h6
    {
        color:red;
        margin-left:200px;
    }
    
    
    </style>
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
                        <li class="submenu"><a href="index.php"><i class="icon_house_alt " title="Home"></i></a></li>
                        <li class="submenu"><a href="service.php">Services</a></li>
                       
                        <li class="submenu"><a href="contact.php">Contact Us</a></li> 
                        <li class="submenu"><a href="about.php">About us</a></li> 
                                <!-- <li class="submenu"><a href="faq.php">Faq</a></li> 
                                
                                 <li class="submenu"><a href="index_8.php">Gallery</a></li> -->
                                <li class="submenu"><a href="logout.php">Logout</a></li>
                                <!--<li ><a href="cart_subdom.php" data-icon="&#xe015;" title="Cart"></a></li>
                                <li ><a href="my_orders.php" data-icon="&#xe0e6;" title="My Orders"></a></li>-->
						</ul>
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End row -->
        </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/img1.jpg" data-natural-width="1400" data-natural-height="350">
   <!-- <div id="subheader">
        <h1 class="head1" name="head" strcoll>Book Your Choice</h1>-->
    	
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    

<!-- Content ==================================================   <h4> <span class="pull-left"><?php// echo $rm['date']; ?> </span> </h4>
                <h4> <span class="pull-right"><?php //echo $rm['user_no']; ?> </span> </h4>
			-->
            
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="box_style_2">
               <form action="add_order.php" method="POST">
                <h2 class="inner">Book Your Choice</h2> <br>
				<h2 class="inner">Enter your details:</h2>
                <label class="ldetails" name="name1">Full Name:</label>
                <input type="text" class="idetails" name="name" placeholder="Enter your name:" required></input>
                <br>
                <br>
                <label class="ldetails" name="contact1">Contact Number:</label>
                <input type="tel" class="idetails" name="contact" pattern="[6-9]{1}[0-9]{9}" placeholder="Enter your Number:" required></input>
                <br>
                <br>
                <label class="ldetails" name="email1">E-mail:</label>
                <input type="email" class="idetails" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" placeholder="Enter your E-mail:" required></input>
                <br>
                <br>
                <h6 class="h6">(*We provide Service in Manipal ONLY)</h6><br>
                <label class="ldetails" name="address1">Address:</label>
                <input type="text" class="idetails" name="address" placeholder="Enter your Address:" required></input>
                <br>
                <br>
                <label class="ldetails" name="date1">Date:</label>
                <input type="date" class="idetails" name="date1" min="2023-05-05" max="2023-07-05" required></input>
                <br>
                <br>
                <label class="ldetails" name="service">Choose your service:</label>
                
                <input type="checkbox" class="iservice1" name="s1" value="Cooking">Cooking</input>&nbsp;&nbsp;
                <input type="checkbox" class="iservice2" name="s2" value="Sweeping">Sweeping</input>&nbsp;&nbsp;
                <input type="checkbox" class="iservice3" name="s3" value="Washing">Washing</input>&nbsp;&nbsp;
                <input type="checkbox" class="iservice4" name="s4" value="Moping" >Moping</input>

                <br>
                <br>
                <label class="ldetails" name="pplno1">Enter number of people:</label>
                <input type="number" name="pplno"class="idetails" min="4" max="9" required></input>
                <br>
                <br>
                
                <label class="ldetails" name="period1">Select time period:</label>
                <select name="period" class="speriod" required>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <option>---SELECT---</option>
                <option value="9:00am">9:00am</option>
                <option value="10:30am">10:30am</option>
                <option value="12:00pm">12:00pm</option>
                <option value="1:30pm">1:30pm</option>
                <option value="3:00pm">3:00pm</option>
                <option value="4:30pm">4:30pm</option>
                <option value="6:00pm">6:00pm</option>
                <option value="7:30pm">7:30pm</option>
                
              <!--  <option value="">9 Hour</option>
                <option value="">10 Hour</option>-->
                </select>
                
                
                <button type="submit" class="isubmit" name="submit">Book</button>
                <button type="reset" class="isubmit" name="clear">Reset</button>
            </form>  
    
    <!-- PHP code for booking form -->
    <?php        
            @$p1 =  $_GET['para1'];
            @$p2 =  $_GET['para2'];
            @$p3 =  $_GET['para3'];


            
            $_SESSION['p1'] = $p1;
            $_SESSION['p2'] = $p2;
            $_SESSION['p3'] = $p3;

           // $pl_cnt = $_POST['pplno'];

           /* if($p1 == 1)
            {
                $total = $pl_cnt * 140;
                echo "total : 140"

            }

            else if($p2 == 2)
            {
                echo "<h2> seconnd</h2>";

            }

            else if($p3 == 3)
            {
                echo "<h2> third</h2>";

            }
             */     
    ?>

  				
                <?php  
                    @$myordno="SELECT id from tbl_login WHERE id='".$_SESSION["id"]."'"; 
                    @$myusno=@mysqli_query($conn,$myordno);
                    while($jimin=@mysqli_fetch_array($myusno))
                    {
                     ?>
                
              <?php }?>      
                        
                        
               <!-- <div id="confirm">
				
                    <hr style="border: 0px;">
                    <hr style="border: 0px;">
					<p>
                    </p>
				</div>
            <table class="table table-striped nomargin">
            <thead>
                <tr>
                    <th>
                            Item
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Date
                    </th>
                
            </thead>
                <h4> <span class="pull-left"><i class="icon_check_alt2 ok"></i>--><?php //echo $chimmy=$jimin['user_no']; ?> </span> </h4>
                 <?php
                    //@$myord="SELECT * from tbl_admin WHERE user_no='$chimmy' order by `date` asc";
                    //@$displa=@mysqli_query($conn,$myord);
                    //while($rm=@mysqli_fetch_array($displa))
                    //{
                                  
                          ?>
         
				
    <?php//} ?>    
                 
        </div>    
       </div>
	</div><!-- End rowlist_page.php -->
</div><!-- End container -->
<!-- End Content =============================================== -->
                 
 <!-- Footer kp================================================== -->
 <footer>
        <div class="container">
            <div class="row">
               
                <marquee bgcolor="pink" width="97%" scrollamount="20"><!-----kp edit-->
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Maid in INDIA
                    </h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
                        Happy to service !
                    </h1>
                </marquee>
                <div class="row">
                    <div class="col-md-12">
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