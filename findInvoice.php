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
				
		

		<div class="grid_6 prefix_3">*Hint: you can search by any field</div>
		<div class="grid_12"><br/></div>
			
					
			<form action="processFindInvoice.php" method="post">
			
				<div class = "grid_2 prefix_3">
					Invoice number:					
				</div>
			
				<div class = "grid_1">
					<input type="number" name="invoice_number" value="" />						
				</div>
			
		   	<div class="grid_12"><br/></div>
			
				<div class = "grid_2 prefix_3">
					Issue Date:					
				</div>
			
				<div class = "grid_1">
					<input type="text" name="issue_date" value="" />						
				</div>

				<div class="grid_12"><br/></div>
			
				<div class = "grid_1 prefix_3">
					Buyer:						
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="text" name="buyer" value="" />						
				</div>

				<div class="grid_12"><br/></div>

				<div class = "grid_1 prefix_6">
					<input type="submit" name="Submit" value="Find" />
				</div>			

			</form>		




		<div class="grid_12"><br/></div>
			
		

	<?php include ('footer.php'); ?>
			
		
	<div/>

</body>

</html>
