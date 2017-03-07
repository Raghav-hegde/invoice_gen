<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>The WIWBEE</title>

</head>

<body>


<?php require("config.php"); ?>



	<div class="container_12">


<?php include ('header.php'); ?>


		<div class="grid_12"><br><br></div>
	
                <?php               
                
                // connecting to database and selecting the table
                $connection = mysql_connect($host, $user,$password);
                
                if(!$connection){
                    die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');
                }
                
                mysql_select_db($database);
				 $id = mysql_real_escape_string($_GET['id']);
				 
				 

                $sql = "DELETE from $database.Items where ID ='$id';"; 
                
                  
                    mysql_query($sql);
                    
                    echo '<div class="grid_5 prefix_4"><h3>Item Deleted successfully</h3></div>';
                 ?>



		<div class="grid_12"><br/></div>
		
		

<?php include ('footer.php'); ?>		
		
		
	<div/>

</body>

</html>
