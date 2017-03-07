<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>The WIWBEE</title>

</head>

<body>

	<div class="container_12">

            
<?php require("config.php"); ?>

	
		<div><br><br></div>

        	<?php
                require('config.php');
        	session_start();
	
        	//already logged in
        	if(isset($_SESSION['logedin'])){ header('Location: default.php'); }
	
        	if($_POST['username'] == '' || $_POST['password'] == ''){
        	echo '<div class="grid_2 prefix_5"><h3>Invalid input</h3></div>';
        	}elseif($_POST['username'] != $adminUsername || $_POST['password'] != $adminPassword){
        	echo '<div class="grid_5 prefix_4"><h3>Invlaid username or password</h3></div>';
        	}else{
        	$_SESSION['logedin']=1;
        	header('Location: default.php');} ?>

		<div><br/></div>
		
		
	<div/>

</body>

</html>
