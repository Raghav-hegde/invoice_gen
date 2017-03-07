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
                
        	        if(!$connection){die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');}
                
                	mysql_select_db($database);
		
			// clearing the variables from insecure code - preventing SQL injection
                	$invoice_number = $_POST['invoice_number'];
                	$buyer = $_POST['buyer'];
                	$email = $_POST['email'];
                	$contact = $_POST['contact'];
			$time_stamp = $_POST['time_stamp'];
	


			$sql = "INSERT into $database.Order_head values('', '$invoice_number', '$buyer', '$time_stamp', '$email', '$contact')"; 
                
	                mysql_query($sql);


			$sql2 = "select ID from $database.Order_head where Invoice_number = '$invoice_number' and Timestamp = '$time_stamp' ";

	                $result = mysql_query($sql2);
			$row = mysql_fetch_row($result);
			$header_id = $row[0];
                           


			for ($i=0 ; $i<$invoiceLinesNumber; $i++){
                
          		if(!($_POST['list'.$i] == 0 || $_POST['quantity'.$i] == '')){

                	$list = mysql_real_escape_string($_POST['list'.$i]);
                	$quantity = mysql_real_escape_string($_POST['quantity'.$i]);
                	$quantity = preg_replace('/[^0-9]/', '', $quantity);
                
                

			$sql = "INSERT into $database.Order_line values('', '$header_id', '$list', '$quantity')"; 
                
	                mysql_query($sql);
			}
		
                }
		
                echo '<div class="grid_5 prefix_4"><h3>Invoice Saved successfully</h3></div>'; ?>



		<div class="grid_12"><br/></div>
				
		

<?php include ('footer.php'); ?>
				
	<div/>

</body>

</html>
