<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'ACTIVITIES';
?>
<?php include("templates/header.php"); ?>

<div class="row" style="background-color:#7BBFDB; border-radius:10px;">
	<div class="small-12 columns" style="padding:10px;">
		<ul class="example-orbit" data-orbit data-options="animation:fadeIn; animation_speed:7000; bullets:false; navigation_arrows:true; timer:true; timer_speed:2500; slide_number:false; next_on_click:true; pause_on_hover:false;" style="background-color:#91C5F2; border-radius:10px;">
			<?php for($i=1; $i <= 5; $i++): ?>
			<li>
				<img src="<?php echo 'images/sports' . $i . '.jpg'; ?>" width="100%" style="border-radius:10px; border:1px solid blue;" />
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</div>

<div class="row" style="margin-top:15px;">
	<div class="small-2 columns">
		<hr style="border-radius:15px; background-color:orange; padding:8px; width:100%;" class="shade">
	</div>
	<div class="small-8 columns">
		<div class="content-section" style="border-radius:15px; background-color:green; padding:10px; width:100%;">
			<h3 style="background-color:green; color:#FFF; border-radius:10px; padding:10px; text-align:center;">We Engage in Various Sports Activities</h3>
		</div>
	</div>
	<div class="small-2 columns">
		<hr style="border-radius:15px; background-color:orange; padding:8px; width:100%;" class="shade">
	</div>
</div>

<div class="row" style="margin-top:15px;">
	<div class="small-12 columns">
		<div style="background-color:#FFF; border-radius:10px; padding:20px;">
			<h3 style="color:green; text-align:center; margin-bottom:15px;">Sports</h3>
			<p style="font-size:1.1em; line-height:1.6;">
				Our students actively participate in a variety of sports, including football, netball, volleyball, rugby, tug of war, and relay races. We believe in nurturing talent through regular training, which mainly takes place over the weekends. These activities allow students to develop their skills, gain confidence, and showcase their unique talents.
			</p>
			<p style="font-size:1.1em; line-height:1.6;">
				Through our sports programs, we have built a dynamic school team that has proudly won numerous trophies in different competitions. These achievements not only boost school spirit but also inspire and motivate our students to pursue their interests with enthusiasm and dedication. Sports have become a cherished part of our school culture, fostering teamwork and resilience in every participant.
			</p>
		</div>
	</div>
</div>

<?php include("templates/footer.php"); ?>
