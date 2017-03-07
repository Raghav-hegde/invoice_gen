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
		
		
					
			<form action="processAddItem.php" method="post">
			
				<div class = "grid_1 prefix_3">
					Name:					
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="text" name="name" value="" />						
				</div>
			
			   	<div class="grid_12"><br/></div>
			
				<div class = "grid_1 prefix_3">
					Price:					
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="number" name="price" value="" />						
				</div>

				<div class="grid_12"><br/></div>
			
				<div class = "grid_1 prefix_3">
					Seller Details:						
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="text" name="seller" value="" />						
				</div>
                 <div class="grid_12"><br/></div>
				 
				 <div class = "grid_1 prefix_3">
					Seller Contact:						
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="number" name="cont" value="" />						
				</div>
				 
				 
				<div class="grid_12"><br/></div>

				<div class = "grid_1 prefix_6">
					<input type="submit" name="Submit" value="Add" />
				</div>			

			</form>		



		<div class="grid_12"><br/></div>
			
		
<?php include ('footer.php'); ?>
					
		
	<div/>

</body>

</html>
