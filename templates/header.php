<html>
<head>
	<meta http-equiv="author" content="Novus Terra" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="icon"  href="images/header.png" type="image/x-icon">	
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display'
	 rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="foundation-5.3.3/css/foundation.css" />
	<link rel="stylesheet" href="foundation-5.3.3/css/normalize.css" />
	<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="fonts/et-line-font/et-line-font/style.css" />	
	<script src="foundation/js/vendor/modernizr.js"></script>	
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
	<link rel="stylesheet" type="text/css" href="slick-1.3.13/slick/slick.css">
	<title>Cosna Day, Nursery Day Care And Primary School</title>
</head>
<style>
		
		body { 
			background: url(images/background.png); 
			background-repeat: repeat;
			/*-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;*/
		}
	.list{
		background-color:rgba(0, 0, 0, 0.1);
		border: 0px;
	}
	</style>
<body>	
	<div class="row" style="margin-top:10px;">
		<a href="index.php">
			<div class="small-4 columns">
				<img src="images/cosna_badge.png" width="150px;" height="150px;">
			</div></a>
	</div>

	<div class="row">
		<div class="small-12 columns">			
			<h1 style="margin:0px; color:#FFF;text-transform:uppercase;" class="top_heading "><Span style="font-size:22px;
			 color:#3636CF;text-shadow:1px 1px 2px #666;">
				<b style="font-size:45px;" class="shadow">Cosna</b> <b style="font-size:20px;">Daycare, Nursery, Day And 
				Boarding Primary School Kiyinda-Mityana</b></span>
			</h1>	
		</div>
	</div>
	<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;
	background-color:#6CA6D9;text-align:center;padding-top:10px;" id="header">
		<ul class="inline-list"  style="padding-left:4px;">
		  	<li><a href="index.php" style="padding:5px 5px 5px 5px;margin-top:5px;
		    	margin-bottom:5px; margin-left:60px;"  class="<?php if($_SESSION['CURRENT_PAGE'] == 'HOME'    ) echo 'active';?>">
		  		<h6 style="font-size:16px;">HOME</h6></a>
			</li>
		 	<li><a href="about_us.php" style="padding:5px 5px 5px 5px;margin-top:5px;
		    	margin-bottom:5px;" class="<?php if($_SESSION['CURRENT_PAGE'] == 'ABOUT'    ) echo 'active';?>">
		  		<h6 style="font-size:15px;">ABOUT US</h6></a>
			 </li>		 
		  	<li><a href="admn.php" style="padding:5px 10px 5px 5px; margin-top:5px; 
		  		margin-bottom:5px" class="<?php if($_SESSION['CURRENT_PAGE'] == 'ADMINISTRATION'    ) echo 'active';?>">
		  		<h6 style="font-size:15px;">ADMN</h6></a>
		  	</li>
		  	<li>
		  		<a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" style="padding:5px 10px 5px 5px; 
		  		margin-top:5px;margin-bottom:5px" class="<?php if($_SESSION['CURRENT_PAGE'] == 'SECTIONS'    )
		  		 echo 'active';?>"><h6 style="font-size:15px;">SECTIONS</h6></a>
		  		 	<div class="row">
		  		 		<div class="small-12 centered columns">		  		 			
							<ul id="drop1" class="f-dropdown list" data-dropdown-content aria-hidden="true">
							  	<li ><a href="daycare.php" style="background-color:red;color:#000;padding:5px 10px 5px 5px;
							  	 margin-top:5px;margin-bottom:5px;">DAYCARE</a></li>	
								<li><a href="nursery.php" style="background-color:red;color:#000;padding:5px 10px 5px 5px;
								 margin-top:5px;margin-bottom:5px;">NURSERY</a></li>
								<li><a href="primary.php" style="background-color:red;color:#000;padding:5px 10px 5px 5px; 
									margin-top:5px;margin-bottom:5px;">PRIMARY</a></li>
							</ul>
		  		 		</div>
		  		 	</div>
			  </li>			  
			  <li>
		  		<a data-dropdown="drop2" aria-controls="drop2" aria-expanded="false"
		  		 style="padding:5px 10px 5px 5px; 
		  		margin-top:5px;margin-bottom:5px" class="<?php 
		  		if($_SESSION['CURRENT_PAGE'] == 'ACTIVITIES'    )
		  		 echo 'active';?>"><h6 style="font-size:15px;">CO-CURRICULLAR</h6></a>
		  		 	<div class="row">
		  		 		<div class="small-12 centered columns">		  		 			
							<ul id="drop2" class="f-dropdown list"
							 data-dropdown-content aria-hidden="true">		
							 
							    <li><a href="quiz.php" 
									style="background-color:red;color:#000;padding:5px 10px 5px 5px;
								 margin-top:5px;margin-bottom:5px;
								 ">QUIZ</a>
								</li>
								<li><a href="farming.php" 
									style="background-color:red;color:#000;padding:5px 10px 5px 5px; 
									margin-top:5px;margin-bottom:5px;
									">FARMING</a>
								</li>
							  	<li ><a href="sports.php" 
							  		style="background-color:red;color:#000;padding:5px 10px 5px 5px;
							  	 margin-top:5px;margin-bottom:5px;
							  	 ">SPORTS</a>
							  	</li>	
								<li><a href="mdd.php" 
									style="background-color:red;color:#000;padding:5px 10px 5px 5px;
								 margin-top:5px;margin-bottom:5px;
								 ">M.D.D</a>
								</li>
							</ul>
		  		 		</div>
		  		 	</div>
			  </li>			  
		<li>
	  		<a data-dropdown="drop3" aria-controls="drop3" aria-expanded="false"
	  		 style="padding:5px 10px 5px 5px; 
	  		margin-top:5px;margin-bottom:5px" class="<?php 
	  		if($_SESSION['CURRENT_PAGE'] == 'GALLERY'    )
	  		 echo 'active';?>"><h6 style="font-size:15px;">GALLERY</h6></a>
	  		 	<div class="row">
	  		 		<div class="small-12 centered columns">		  		 			
						<ul id="drop3" class="f-dropdown list"
						 data-dropdown-content aria-hidden="true">						 	
						  	<li ><a href="berge.php" 
						  		style="background-color:red;color:#000;padding:5px 10px 5px 5px;
						  	 margin-top:5px;margin-bottom:5px;
						  	 font-size:12px;
						  	 ">BERGE'S VISIT</a>
						  	</li>						 	
							<li><a href="index.php" 
								style="background-color:red;color:#000;padding:5px 10px 5px 5px; 
								margin-top:5px;margin-bottom:5px;
								font-size:12px;
								">GRAND PA'S B.D</a>
							</li>
						  	<li ><a href="visitor7.php" 
						  		style="background-color:red;color:#000;padding:5px 10px 5px 5px;
						  	 margin-top:5px;margin-bottom:5px;
						  	 font-size:12px;
						  	 ">VISITOR 2017</a>
							</li>						  	
						  	<li ><a href="others.php" 
						  		style="background-color:red;color:#000;padding:5px 10px 5px 5px;
						  	 margin-top:5px;margin-bottom:5px;
						  	 font-size:12px;
						  	 ">OTHERS</a>
						  	</li>
						</ul>
	  		 		</div>
	  		 	</div>
			  </li>
			  <li><a href="contact_us.php" style="padding:5px 10px 5px 5px; margin-top:5px;  
			  	margin-bottom:5px" class="<?php if($_SESSION['CURRENT_PAGE'] == 'CONTACT-US'    ) echo 'active';?>">
			  	<h6 style="font-size:15px;">CONTACT US</h6></a>
			  </li>
			  <li><a href="https://cosnaschool.com/news" style="padding:5px 10px 5px 5px; margin-top:5px;  
			  	margin-bottom:5px" class="">
			  	<h6 style="font-size:15px;">NEWS</h6></a>
			  </li>
		</ul>
	</div>