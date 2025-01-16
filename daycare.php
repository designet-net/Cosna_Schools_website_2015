<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'SECTIONS';
?>
<?php 
include("templates/header.php");
?>
	<div class="row" style="background-color:#7BBFDB;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
		<div class="small-12 columns" style="padding:5px;">
			<ul class="example-orbit" data-orbit data-options="animation:fade;
                         animation_speed:7000;
                         bullets:false;
                         navigation_arrows:true;
                         timer:true;
                         timer_speed: 2500;
                         slide_number:false;
                         next_on_click:true;
                         pause_on_hover:false;" 
                         	style="background-color:#91C5F2;">                
				<li>
					<img src="images/day_care1.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid #FFF;"/>
				</li>         			
				<li>
					<img src="images/day_care2.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid #FFF;"/>
				</li>
				<li>
					<img src="images/day_care3.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid #FFF;"/>
				</li>
				<li>
					<img src="images/day_care4.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid #FFF;"/>
				</li>				
			</ul>
		</div>
	</div>						
	<div class="row" style="margin-top:10px;">
		<div class="small-3 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>
		<div class="small-12 medium-6 large-6 columns" 
			style="border-radius:15px;background-color:green; padding:8px;">
			<div class="row shade" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
				<h3 style="background-color:green;color:#FFF;border-radius:10px 10px; padding:10px;margin:3px;text-align:center;">
					Cosna School Daycare Teachers </h3>
			</div>
		</div>
		<div class="small-3 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>		
	</div>
	<div class="row" style="width:98%; margin-top:10px;">
		<div class="small-12 medium-6 large-6 small-centered columns">
			<div class="row">					
				<div class="small-12 medium-6 large-6 columns" style="background-color:#FBBA48;color:#FFF;border-radius:
					10px 10px; padding:10px;">
					<div class="row">
						<div class="small-12 medium-11 large-11 small-centered columns" style="background-color:#FFF;
							border-radius:10px 10px; padding-top:3px;">					
							<h6 style="background-color:#FBBA48;color:#FFF;border-radius:10px 10px;
							 padding:10px;text-align:center; "class="heading">
							 Head Daycare Nursery</h6>
							<img src="images/NaiubowaSarah.jpg" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-top-right-radius:10px;
		                border:1px dotted #fff;">			
							<p class="paragraphs" style="color:green;">Mdm. Sarah Nalubowa</p>
						</div>				
					</div>													  					
					<div style="">   							
						<img src="images/banner2.png" style="float:right;background-color:#FFF;border-radius:20%;padding:2px;">
					</div>
				</div>
				<div class="small-12 medium-6 large-6 columns" style="background-color:#A440A3;color:#FFF;border-radius:10px 10px; padding:10px;;">
					<div class="row">
						<div class="small-12 medium-11 large-11 small-centered columns" style="background-color:#FFF;
							border-radius:10px 10px; padding-top:3px;">					
							<h6 style="background-color:#A440A3;color:#FFF;border-radius:10px 10px;	padding:10px; text-align:center;"class="heading">Daycare Nursery</h6>
							<img src="images/daycare_one.jpg" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
			                border-top-left-radius:10px;border-top-right-radius:10px;border:1px dotted #fff;">			
								<p style="color:green;">
									Ms. Christine Nannggaa</p>
						</div>				
					</div>													  					
					<div style="">   							
					<img src="images/banner2.png" style="float:right;background-color:#FFF;border-radius:20%;padding:2px;">
					</div>
				</div>
			</div>		
	</div>	
<?php 
include("templates/footer.php");
?>