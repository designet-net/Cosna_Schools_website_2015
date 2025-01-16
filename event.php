<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'EVENTS';
?>
<?php include("templates/header.php"); ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="row" style="background-color:#7BBFDB;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
		<div class="small-12 columns" style="padding:5px;">
			<ul class="example-orbit" data-orbit data-orbit data-options="animation:fadeIn;
                         animation_speed:7000;
                         bullets:false;
                         navigation_arrows:true;
                         timer:true;
                         timer_speed: 2500;
                         slide_number:false;
                         next_on_click:true;
                         pause_on_hover:false;" style="background-color:#91C5F2;">
       			<li>
					<img src="images/event_five.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Alois Berge Visits Cosna School.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_one.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Cosna Staff Picnic 2014.</b>
		    		</div>
				</li>				
				<li>
					<img src="images/event_four.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Academic Tour 2014.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_nine.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Sports Day 2015.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_eight.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Academic Tour 2014.</b>
		    		</div>
				</li>				
				<li>
					<img src="images/event_three.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Academic Tour 2014.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_six.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Cosna Staff Picnic 2014.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_seven.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Soccer Between Cosna Staff Members And Cosna Parents.</b>
		    		</div>
				</li>				
				<li>
					<img src="images/event_two.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Cosna Pupils Preparing For Mass.</b>
		    		</div>
				</li>
				<li>
					<img src="images/event_ten.jpg"  width="100%" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;
                border-top-left-radius:10px;border-top-right-radius:10px;border:1px solid blue;"/>
                	<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.9);
					color:#FFF;text-align:center;border-radius:5px;">
		      			<b style="color:#FBBA48;font-family:Calisto MT;">Staff Tour 2014.</b>
		    		</div>
				</li>
			</ul>
		</div>
	</div>	
	<div class="row" style="margin-top:10px;">
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:green;padding:8px;width:100%;" class="shade">
		</div>
		<div class="small-8 columns">
			<ul class="small-block-grid-2">					
				<li style="border-radius:15px;background-color:green; padding:8px;width:100%;margin-right:8px;">
					<div class="row shade" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:green;color:#FFF;border-radius:10px 10px; padding:10px;margin:3px;text-align:center;">
							Cosna School Offers A Balanced Environment</h3>
					</div>	
				</li>
			</ul>
		</div>
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:green;padding:8px;width:100%;" class="shade">
		</div>		
	</div>
	<div class="row"  style="margin-top:20px;">
		<div class="small-12 columns">
			<ul class="small-block-grid-2">					
				<li style="border-radius:10px; background-color:#A440A3; padding:8px; width:66%;margin-right:18px;">
					<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:#A440A3;color:#FFF;border-radius:15px; padding:10px; margin:3px;"
						class="heading">News Updates</h3>
							<ul class="small-block-grid-1" style="margin-top:10px;margin-bottom:10px;">					
								<li style="border-radius:15px;background-color:blue; padding:2px;margin-right:8px;width:50%;
									margin-left:150px;">
									<div class="row shade" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
										<h5 style="background-color:green;color:#FFF;border-radius:10px 10px; padding:10px;margin:3px;text-align:center;">
											Alois Beger Visits Cosna School</h5>
									</div>	
								</li>
							</ul>
						<div class="small-12 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events1.jpg" width="100%" height="300px;"style="border-radius:15px;">
						</div>
					</div>
					<div class="row" style="background-color:#FFF; margin:0;">
						<div class="small-10 small-centered columns" style="margin-top:5px; margin-bottom:5px;padding:0;
							border-radius:20px;background-color:padding:1px;">
							<p class="paragraphs" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:2;
								border:1px solid #FBBA48;text-align:center;">
								<strong>
									Thank you Alois Berge for paying us a visit.
								</strong>
							</p>
						</div>
					</div>					
					<div class="row" style="background-color:#FFF; margin:0;">
						<div class="small-12 columns" style="margin-top:5px; margin-bottom:5px;padding:0;
							border-radius:20px;background-color:padding:1px;">
							<p class="paragraphs" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:2;
								border:1px solid #FBBA48;padding:5;">
							Cosna School is so grateful to you Alois Berge for having paid us a vist. 
							You really gave our school a feeling of importance. Thank you very much. God bless you.<br/>
							Sincere gratitudes also go to all our Germany friend who keeping visiting our school.
							Thank you very much. And always come back. May the almighty God bless you so much.
						</p>
						</div>
					</div>
					<div class="row" style="background-color:#FFF; margin:0;">						
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events2.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Alois Berge opens Cosna School guest house.</p>
						</div>
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events3.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Alois Berge plants a tree at Cosna School guest house.</p>
						</div>
						&nbsp;
					</div>					
					<div class="row" style="background-color:#FFF; margin:0;">						
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events4.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Alois Berge opens The Nursery Section Block.</p>
						</div>
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events5.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Planting of the tree at the primary section.</p>
						</div>
						&nbsp;
					</div>					
					<div class="row" style="background-color:#FFF; margin:0;">						
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events6.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Alois Berge opens the Primary Section Block</p>
						</div>
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events7.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							Primary Section pupils welcoming  Alois Berge</p>
						</div>
						&nbsp;
					</div>
					<div class="row" style="background-color:#FFF; margin:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px;">						
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events8.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							The School Director  with Alois Berge</p>
						</div>
						<div class="small-6 columns" style="border-radius:15px;background-color:#FFF; padding:2px;">
							<img src="images/events9.jpg" width="100%" height="200px;"style="border-radius:15px;">
							<p class="paragraphs shade_two" 
							style="margin:5px;color:blue;background-color:#F5F5F5;border-radius:15px;padding:3;
								border:1px solid #FBBA48;text-align:center;">
							The Assistant School Director  with Alois Berge</p>
						</div>
						&nbsp;
					</div>											  					
					<div style="">   							
						<img src="images/banner.png" style="float:right;background-color:#FFF;border-radius:10px;padding:2px;
							margin-top:5px;">
					</div>
				</li>
				<li style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FBBA48; padding:8px; width:32%;">
					<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:#FBBA48;color:#FFF;border-radius:10px 10px; padding:10px; margin:3px;"
						class="heading">Upcoming Events</h3>
						<div class="small-12 columns" >													
							<p class="paragraphs" style="color:blue;background-color:#F5F5F5;border-radius:15px;padding:2;
								border:1px solid #FBBA48;margin-top:10px;">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
							<div class = row>
								<div class = "small-5 small-centered columns">									
									<P class = "button radius tiny">
										<a href="www.cosnaschools.blogspot.com" 
										style = "color:#FFF;"><b>Our blog</b></a>
									</P>
								</div>
							</div>							
						</div>
					</div>
					<p></p>
					<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;
					border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:blue;color:#FFF;border-radius:10px 10px; padding:10px; margin:3px;"
						class="heading">Facebook</h3>
						<div class="small-12 columns" >														
							<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" 
								data-height="450px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true">
							</div>	
						</div>
						</div>
					</div>				
				</li> 
			</ul>
		</div>
	</div>
<?php include("templates/footer.php"); ?>	