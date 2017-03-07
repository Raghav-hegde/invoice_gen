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
                
                	if(!$connection){ die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');}
               
            		mysql_select_db($database);
                

			// clearing the variables from insecure code - preventing SQL injection
                	$invoice_number = $_POST['invoice_number'];
                	$buyer = $_POST['buyer'];
                	$email = $_POST['email'];
                	$contact = $_POST['contact'];
					$time_stamp = $_POST['time_stamp'];
					
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo '<div class="grid_5 prefix_4"><h3>Invalid Email</h3></div>'; 
                        }
	
		
			//checking for invalid inputs
			else if($invoice_number == ''|| $buyer == '' || $email =='' || $contact =='') {
                	//one field at least is empty
                	echo '<div class="grid_5 prefix_4"><h3>Invalid input</h3></div>';
     			}else if(strlen($contact)!=10){
				echo '<div class="grid_5 prefix_4"><h3>Invalid contact</h3></div>';
				}
				else {


			//loading items from database
     		        $sql3 = "Select * from $database.Items"; 
     		        $result2 = mysql_query($sql3);
			$items = array();
			$c1 = 0;
			$c2 = 1;
			
			while($row2 = mysql_fetch_array($result2)){
			$items[$c1] = $row2['ID'];
			$items[$c2] = $row2['Name'];
			$c1 = $c1 + 2;
			$c2 = $c2 + 2;}

			$count = count($items);          		

		

			echo '<form action="ProcessAddInvoice_2.php" method="post">';
	


			echo '<div class="grid_1 prefix_2">';
	                echo '<b>Item</b>';

	                echo '</div>';
                    
	                echo '<div class="grid_2 prefix_1">';
	                echo '<b>Quantity:</b> numbers only';
	                echo '</div>';
                  


			
			echo '<div class="grid_12"><br/></div>';
			

	
			
			for ($i=0 ; $i<$invoiceLinesNumber; $i++){
		
						
			echo '<div class="grid_1 prefix_2">';


	                echo '<select name=list'.$i.'>';
			echo '<option value="" selected>Select an item</option>';
			for ($y = 0; $y < $count; $y = $y + 2){ echo '<option value='.$items[$y].'>'.$items[$y+1].'</option>';}
			echo '</select>';
		
	                echo '</div>';
                    

	                echo '<div class="grid_1 prefix_1">';
	                echo '<input type="number" name="quantity'.$i.'" value="" />';
	                echo '</div>';
                    
	        }
			echo '<div class="grid_12"><br/></div>';
			
			echo '<div class = "grid_1 prefix_5">';	
			echo '<input type="hidden" name="invoice_number" value="'.$invoice_number.'"/>';
			echo '<input type="hidden" name="buyer" value="'.$buyer.'"/>';
			echo '<input type="hidden" name="email" value="'.$email.'"/>';
			echo '<input type="hidden" name="contact" value="'.$contact.'"/>';
			echo '<input type="hidden" name="time_stamp" value="'.$time_stamp.'"/>';								
			echo '<input type="submit" name="Submit" value="Save" />';
			echo '</div>';					

			echo '</form>';} ?>

                


		<div class="grid_12"><br/></div>
		
				

<?php include ('footer.php'); ?>
			
		
	<div/>

</body>

</html>
