<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'ACTIVITIES';
?>
<?php include("templates/header.php"); ?>

<div class="row" style="background-color:#7BBFDB; border-radius:10px;">
	<div class="small-12 columns" style="padding:10px;">
		<ul class="example-orbit" data-orbit data-options="animation:fadeIn; animation_speed:7000; bullets:false; navigation_arrows:true; timer:true; timer_speed:2500; slide_number:false; next_on_click:true; pause_on_hover:false;" style="background-color:#91C5F2; border-radius:10px;">
			
			<li>
				<img src="images/activity11.jpg" width="100%" style="border-radius:10px; border:1px solid blue;" />
				<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.7); color:#FFF; text-align:center; border-radius:5px; padding:5px;">
					<b style="color:#FFF; font-family:Calisto MT;">Cosna School - Pupils in the Maize Garden</b>
				</div>
			</li>
			
			<li>
				<img src="images/activity10.jpg" width="100%" style="border-radius:10px; border:1px solid blue;" />
				<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.7); color:#FFF; text-align:center; border-radius:5px; padding:5px;">
					<b style="color:#FFF; font-family:Calisto MT;">Cosna School - Goat Rearing</b>
				</div>
			</li>
			
			<li>
				<img src="images/activity9.jpg" width="100%" style="border-radius:10px; border:1px solid blue;" />
				<div class="orbit-caption" style="background-color:rgba(0, 0, 0, 0.7); color:#FFF; text-align:center; border-radius:5px; padding:5px;">
					<b style="color:#FFF; font-family:Calisto MT;">Cosna School - Cattle Rearing</b>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class="row" style="margin-top:15px;">
	<div class="small-12 columns text-center">
		<h2 style="background-color:green; color:white; border-radius:10px; padding:15px;">Our Farming Activities</h2>
	</div>
</div>

<div class="row" style="margin-top:15px;">
	<div class="small-12 columns">
		<div style="background-color:#FFF; border-radius:10px; padding:20px;">
			<h3 style="color:green; text-align:center; margin-bottom:15px;">Learning Through Farming</h3>
			<p style="font-size:1.1em; line-height:1.6;">
				At Cosna School, students participate in various hands-on farming activities that promote both personal growth and practical skill development. Activities include fish farming, poultry keeping, rabbit rearing, and other agricultural practices. Our school farm, Kasozi Farm, provides a sustainable source of fresh milk, eggs, beef, and chicken, which are part of the students' balanced daily meals.
			</p>
			<p style="font-size:1.1em; line-height:1.6;">
				Through their work on the farm, students gain valuable knowledge and skills that will benefit them in the future. This approach to learning ensures that they are not only well-nourished but also equipped with practical experience in agriculture.
			</p>
		</div>
	</div>
</div>

<?php include("templates/footer.php"); ?>
