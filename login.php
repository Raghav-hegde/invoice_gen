<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>The WIWBEE</title>

</head>

<body>

    
	<div class="container_12">


		<div class="grid_12"><br><br></div>


		<?php 
			session_start();
			if(isset($_SESSION['logedin'])){ header('Location: default.php'); } 
		?>

		

		<div class="grid_6 prefix_3">*Please enter Your username and password</div>
		<div class="grid_12"><br/></div>


					
			<form action="processLogin.php" method="post">
			
				<div class = "grid_2 prefix_3">
					User Name:					
				</div>
			
				<div class = "grid_1">
					<input type="text" name="username" value="" />						
				</div>
			
		   	<div class="grid_12"><br/></div>
			
				<div class = "grid_1 prefix_3">
					Password:					
				</div>
			
				<div class = "grid_1 prefix_1">
					<input type="password" name="password" value="" />						
				</div>

				<div class="grid_12"><br/></div>

				<div class = "grid_1 prefix_6">
					<input type="submit" name="Submit" value="Login" />
				</div>			

			</form>		



		<div class="grid_12"><br/></div>
		
		
	<div/>

</body>

</html>
