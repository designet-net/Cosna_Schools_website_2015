<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'GALLERY';
?>
<?php 
	include("templates/header.php");
	// include("templates/conn.php");
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
							Cosna School Offers A Balanced Environment</h3>
					</div>	
				</li>
			</ul>
		</div>
		<div class="small-2 columns">
			<hr style="border-radius:15px;background-color:orange;padding:8px;width:100%;" class="shade">
		</div>		
	</div>
	<div class="row"  style="margin-top:20px;">
		<div class="small-12 columns">
			<ul class="small-block-grid-1">					
				<li style="border-radius:10px; background-color:#A440A3; padding:8px;margin-right:18px;">
					<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;background-color:#FFF; margin:0;">
						<h3 style="background-color:#A440A3;color:#FFF;border-radius:15px; padding:10px; margin:3px;text-transform: uppercase;"
						class="heading">Grand Pa's Birth Day Party</h3>
					</div>
					<div class="row" style="background-color:#FFF; margin:0;">	
						<div class ="small-12 columns">
							<ul class ="small-block-grid-2" style ="margin-bottom:5px;">
								<li style="padding:0;">
									<img src="<?php echo ('images/'.$row['images']);?>" width="100%" 
									height="300px;" style="padding:0;border:2px solid #FFF;">
								</li>
							</ul>
						</div>
					</div>
				</li>			
			</ul>
		</div>
	</div>
<?php include("templates/footer.php"); ?>	