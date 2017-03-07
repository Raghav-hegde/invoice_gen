<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>The WIWBEE</title>

</head>

<body>


	<div class="container_12">



<?php include ('header.php'); ?>		



		<div class="grid_12"><br><br></div>
		
		

			<div class="grid_6 prefix_3">*Please fill all the fields</div>
			<div class="grid_12"><br/></div>
		
		
		

			<form action="ProcessAddInvoice_1.php" method="post">
			
				<div class = "grid_2 prefix_3">
					Invoice Number:					
				</div>
			
				<div class = "grid_1">
					<input type="number" name="invoice_number" value="" />						
				</div>
			
		   		<div class="grid_12"><br/></div>
			
				<div class = "grid_1 prefix_3">
					Buyer:					
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="text" name="buyer" value="" />						
				</div>

				<div class="grid_12"><br/></div>
			
				<div class = "grid_2 prefix_3">
					Email :						
				</div>
			
				<div class = "grid_3">
					<input type="text" name="email" value="" /> 			
				</div>
				
				<div class="grid_12"><br/></div>
			
				<div class = "grid_2 prefix_3">
					Contact:						
				</div>
			
				<div class = "grid_1">
					<input type="number" name="contact" value="" />						
				</div>

				<div class="grid_12"><br/></div>

				<div class = "grid_1">				
					<input type="hidden" name="time_stamp" value="<?php echo date('Y-m-d'); ?>"/>						
				</div>

				<div class = "grid_1 prefix_6">
					<input type="submit" name="Submit" value="Next >>" />
				</div>			

			</form>



		<div class="grid_12"><br/></div>
		
		

<?php include ('footer.php'); ?>
			
				
	<div/>

</body>

</html>
