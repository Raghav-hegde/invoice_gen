<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>Easy Invoice</title>

</head>

<body>



<?php require("config.php"); ?>


	<div class="container_12">



<?php include ('header.php'); ?>



		<div class="grid_12"><br><br></div>

                                   
                <?php               
              
                
                $connection = mysql_connect($host, $user,$password);
                
                if(!$connection){die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');}
                
                mysql_select_db($database);
                
                
                //select statment
                $sql = "Select * from $database.Items"; 
                
                $result = mysql_query($sql);

		$sql1 = "SELECT Invoice_number, Buyer, Timestamp
			 FROM $database.Order_head
			 ORDER BY Timestamp DESC
			 LIMIT 0 , 5"; //Top 5 invoices
		$sql2 = "SELECT count( * ) FROM $database.Items"; //Total items
		$sql3 = "SELECT count( * )
			 FROM $database.Order_head
			 WHERE ID IN (
			 SELECT Order_number
			 FROM $database.Order_line )"; //Total invoices
		$sql4 = "SELECT SUM( Order_line.Quantity * Items.Price )
			 FROM $database.Order_line
			 JOIN $database.Items"; //Total sales


		
		$total_items = 0;
		$result1 = mysql_query($sql2);
		if(mysql_num_rows($result1)>0) {
		$array = array();
		$array = mysql_fetch_row($result1);
		$total_items = $array[0];}



		$total_invoices = 0;
		$result2 = mysql_query($sql3);
		if(mysql_num_rows($result2)>0) {
		$array = array();
		$array = mysql_fetch_row($result2);
		$total_invoices = $array[0];}


		
		$total_sales = 0;
		$result3 = mysql_query($sql4);
		if(mysql_num_rows($result3)>0) {
		$array = array();
		$array = mysql_fetch_row($result3);
		$total_sales = $array[0];}	?>


		<div class="grid_4 prefix_1">
			<img src="img/handshake.jpg" />
		</div>


		<dic class="grid_6 prefix_1">
			<b>total sales: </b> <?php echo $total_sales; ?> <br>
			<b>total added items: </b> <?php echo $total_items; ?> <br>
			<b>total invoices: </b> <?php echo $total_invoices;?> <br> <br>
			<b>latest 5 invoices: </b><br>
			<?php	

			$result = mysql_query($sql1);


			if (mysql_num_rows($result) ==  0){echo '<b> there is no invoices in database </b>';
                	}else{
                
                	
                	echo '<div class="grid_2">';
   		        echo '<b>Invoice Number</b>';
   	        	echo '</div>';
                    
     		       	echo '<div class="grid_1">';
        		echo '<b>Buyer</b>';
                	echo '</div>';
                    
                	echo '<div class="grid_2">';
                	echo '<b>Date</b>';
                	echo '</div>';

                    
	                
	                while($row = mysql_fetch_array($result)){                    
  	                echo '<div class="grid_2">';
        	        if($row['Invoice_number'] != ''){ echo $row['Invoice_number']; }else{echo '-----';}
                    	echo '</div>';
                    
                    	echo '<div class="grid_1">';
                    	if($row['Buyer'] != ''){ echo $row['Buyer']; }else{echo '-----';}
                    	echo '</div>';
                    
                 	echo '<div class="grid_2">';
                    	if($row['Timestamp'] != ''){ echo $row['Timestamp']; }else{echo '-----';}
                    	echo '</div>';
                    
                 	}
                
               		}?>
		</div>
			
		
	<div/>

</body>

</html>
