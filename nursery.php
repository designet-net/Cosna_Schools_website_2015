<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'SECTIONS';
?>
<?php 
include("templates/header.php");
?>
	
	<div class="row" style="margin-top:10px;">
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>
		<div class="small-8 columns">
			<ul class="small-block-grid-2">					
				<li style="border-radius:15px;background-color:green; padding:8px;width:100%;margin-right:8px;">
					<div class="row shade" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:green;color:#FFF;border-radius:10px 10px; padding:10px;margin:3px;text-align:center;">
							Here Are The  Nursery Teachers For Cosna School</h3>
					</div>	
				</li>
			</ul>
		</div>
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>		
	</div>	
<?php 
include("templates/footer.php");
?>