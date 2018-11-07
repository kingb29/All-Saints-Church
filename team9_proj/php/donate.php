<!DOCTYPE html>
<html>
	<head>
		<title>All Saints Lutheran Church</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<!--Header container-->
		<div class="header">
			<div class="row" id="row1">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/header.jpg" id="headImg">
				</div>
			</div>
		</div>
		<!--Navbar container-->
		<div class="navbar navbar-inverse navbar-static-top" id="navbar">
			<div class="container" id="navbar">
				<a href="../php/index.php" class="navbar-brand">All Saints Lutheran Church</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../php/index.php">Home</a></li>
						<li><a href="../php/pastor.php">Pastor</a></li>
						<li><a href="../php/about.php">About</a></li>
						<li><a href="../php/ministries.php">Ministries</a></li>
						<li class="active"><a  href="../php/donate.php">Donate</a></li>
						<li><a href="../php/siteMap.php">Site Map</a></li>
						<?php
							$login = false;
							if(!$login){ 
						?>
								<li><a href="../php/login.php">Login/Sign-up</a></li>
						<?php
							}
							if($login){
						?>
								<li><a href="../php/profile.php">Your Profile</a></li>
								<li><a id="logout" href="../php/index.php">Logout</a></li>
						<?php
							}
						?>
					</ul>
				</div>	
			</div>
		</div>
		
		<h3 class = "header-3">Thank you for Considering a Donation!</h3>
		<div class = "church-financials-div"> 
			<p class = "p-intro"><img src = "../images/churchFinancial.png"></p>
		</div>
		<p class = "p-intro">All Saints Lutheran Church needs your help to pay off our current building loan now more than ever, please consider donating today.</p>
		<br>
		<p class = "p-intro">Please click the link below to electronically donate, or you can always donate in-person during any of our operating hours.</p>
		<p class = "p-intro"><a href = "https://www.eservicepayments.com/cgi-bin/Vanco_ver3.vps?appver3=x1a8uAgje-8dTfwGAicT4j74T5AT8zVhJw92C-amEpsa7JU70luovykzbXYpM05FuVr0KUTEeGCDikFQ3OSSZ09s4vB8YqSUWa2bJD0FtSu_ad_sOXJrcw_2aMkXamSbiG7daFCFWnNNwT9G-kfIHA==&ver=3">Donate</a></p>
		<p class = "p-intro">Also don’t forget to select All Saints for you Amazon Smile charity!</p>
		<p class = "p-intro"><a href = "http://smile.amazon.com/ch/39-1599552"> Amazon </a></p>
		<p class = "p-intro">All Saints appreciates any donation and thanks you!</p>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>