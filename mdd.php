<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'ACTIVITIES';
?>
<?php include("templates/header.php"); ?>
	<div class="row" style="background-color:#7BBFDB;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
		<div class="small-12 columns" style="padding:5px;">
			<ul class="example-orbit" data-orbit data-options="animation:fadeIn;
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
					<img src="images/activity8.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
				</li>								
				<li>
					<img src="images/activity7.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
				</li>											
			</ul>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>
		<div class="small-8 columns">
			<ul class="small-block-grid-2">					
				<li style="border-radius:15px;background-color:green; padding:8px;width:100%;margin-right:8px;">
					<div class="row shade" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:green;color:#FFF;border-radius:10px 10px; padding:10px;margin:3px;text-align:center;">
							Pupils Are Give The Opportunity Participate In MDD</h3>
					</div>	
				</li>
			</ul>
		</div>
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>		
	</div>
<div class="row"  style="margin-top:10px;">
		<div class="small-12 columns">
			<ul class="small-block-grid-2">					
				<li style="border-radius:15px;padding:8px; width:100%;margin-right:15px;">
					<div class="row" 
					style="border-radius:10px;
					background-color:#FFF; margin:0;">
						<div class="small-12 columns">
							<h3 style="border-radius:10px 10px;margin:3px;"
							class="heading">Music Dance And Drama</h3>													
							<p class="paragraphs" style="border-radius:10px;">
								We hold competitions with other schools, perform concerts and 
								our children are more skilled in drama, singing, miming and we train
								creative dances and we highly respect tradition and custom in this
								sector. Children ought to build a strong foundation for their future.
								We award certificates to the best performers and prises which strong
								boost the children's morals.
							</p>									
						</div>
					</div>											  					
					<div>
						<p  class="paragraphs">
							&nbsp;
						</p>	
					</div>					
				</li>				
			</ul>
		</div>
	</div>
	<?php include("templates/footer.php"); ?> 