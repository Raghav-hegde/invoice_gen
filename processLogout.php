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
        	require('config.php');
                session_start();
	
        	//already logged in
                if(isset($_SESSION['logedin'])){ 
		unset($_SESSION['logedin']);
		header('Location: default.php'); 
        	}else{
                header('Location: login.php'); } ?>



		<div class="grid_12"><br/></div>
		
			
	<div/><!-- ending container -->

</body>

</html>
