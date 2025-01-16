<?php
$dbconnect = mysql_connect("localhost","root","") or die("Server not found");
mysql_select_db("cosna_website",$dbconnect);		
?>
<?php include("templates/header.php"); ?>
<form action="<?php $_PHP_SELF ?>" method ="get">
	<div class="row">
		<div class="large-12 columns" style="padding:0px;">
			<label>
				<input name="lname" type = "text" placeholder="Name:"style="height:30px;
				 margin-bottom:5px;"/>
			</label>      						
		</div>
		<div class="large-12 columns" style="padding:0px;">
			<label>
				<input name="amount" type = "text" placeholder="Amount:"style="height:30px;
				 margin-bottom:5px;"/>
			</label>      						
		</div>
		<div class="large-12 columns" style="padding:0px;">
			<label>
				<input name="interest" type = "text" placeholder="Interest:"style="height:30px;
				 margin-bottom:5px;"/>
			</label>			      						
		</div>
		<div class="large-12 columns" style="padding:0px;">
			<label>
				<input name="total" type = "text" placeholder="Interest:"style="height:30px;
				 margin-bottom:5px;"/>
			</label>			      						
		</div>
		<strong>
			<input name="submit_one" type = "Submit" 
			style="border-radius:15px;color:#FBBA48;"value = "Submit" />
		</strong>		
	</div>
	</form>
	<?php 
		if(isset($GET['submit_one'])){
			if (!empty($GET['lname']) && !empty($GET['amount']) && !empty($GET['interest']) && !empty($GET['interest'])){			
			// $query = "SELECT * FROM manupulation";
			// $result = mysql_query($query);
			// while ($row=mysql_fetch_array($result)){				
			// $total 		= $row['total'];
			// $total 		+= $amount;
			$lname  	= $GET['lname'];
			$amount  	= $GET['amount'];
			$interest 	= $GET['interest'];			
			$total 		= $GET['total'];
			$querry 	= "INSERT INTO manupulation(lname,amount,interest,total) VALUES
			('".$lname."','".$amount."','".$interest."','".$total."')";
			$insert 	= mysql_query($querry);
				if($insert){
				echo "<b style='color:green'>".'Thanks. We have received your email!'."</b>";
				}
				else{
					echo "<b style='color:red'>"."Sorry the email was not sent"."</b>".mysql_error();
				}					
			}
		}
		// }
	?>

<?php include("templates/footer.php"); ?>