<!DOCTYPE html>
<html>
<head>
	<title>Our Services</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #78cfcf;
			color: white;
			padding: 10px;
		}

		h1 {
			margin: 0;
			padding: 20px;
			text-align: center;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin: 20px;
			padding: 20px;
		}

		.card {
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: 20px;
			padding: 20px;
			max-width: 300px;
		}
        .isubmit{
        width: 10%;
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

		.card h2 {
			margin: 0;
			padding: 10px;
			text-align: center;
		}

		.card p {
			margin: 0;
			padding: 10px;
			text-align: justify;
		}
	</style>
</head>
<body>
	<header>
		<h1>Our Services</h1>
	</header>
        <form action="index.php">
	<div class="container">
		<div class="card">
			<h2>1 Day</h2>
			<!--<img src="img1.jpg" width="300" height="300">-->
            <a  href="service1.php"><img src="img1.jpg"  /></a>
			<a href="my_orders.php?para1=1" style='font-size:large;color:#ec008c;text-decoration:none;'>Book Service for 1 Day</a>
		</div>

		<div class="card">
			<h2>1 Week</h2>
            <a  href="service2.php"><img src="img2.jpg"  /></a>
			<?php	echo"<a style='font-size:large;color:#ec008c;text-decoration:none;' href='my_orders.php'>Book Service for 1 Month</a>";?>
		</div>

		<div class="card">
			<h2>1 Month</h2>
            <a  href="service3.php"><img src="img1.jpg"  /></a>
		<?php	echo"<a style='font-size:large;color:#ec008c;text-decoration:none;' href='my_orders.php'>Book Service for 1 Month</a>";?>
		</div>
	</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="isubmit"> BACK TO HOME </button>
</body>
</html>
