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
	
		
		// clearing the variables from insecure code - preventing SQL injection
                $invoice_number = mysql_real_escape_string($_POST['invoice_number']);
                $issue_date = mysql_real_escape_string($_POST['issue_date']);
                $buyer = mysql_real_escape_string($_POST['buyer']);
                
		
		//checking for invalid inputs
		if($invoice_number == '' && $issue_date == '' && $buyer == '') {
                    //one field at least is empty
                    echo '<div class="grid_5 prefix_5"><h3>Invlaid input</h3></div>';
                }else{
                

		
		$sql = "SELECT * FROM $database.Order_head WHERE 1 ";

		if ($invoice_number != ''){
                $sql.=" and Invoice_number like '%$invoice_number%' ";}
		
		if ($buyer != ''){
                $sql.=" and Buyer like '%$buyer%' ";}

		if ($issue_date != ''){
                $sql.=" and Timestamp like '%$issue_date%' ";}

                $result = mysql_query($sql);

                
                echo '<div class="grid_12"><br><br></div>';
                
                if (mysql_num_rows($result) ==  0){
                echo '<div class="grid_2 prefix_5" align = center><h4>No match</h4></div>';
                }else{
                
                //printing the headers
                echo '<div class="grid_2 prefix_1">';
                echo '<b>Invoice Number</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Buyer</b>';
                echo '</div>';
                    
                echo '<div class="grid_2">';
                echo '<b>Timestamp</b>';
                echo '</div>';
                    
                echo '<div class="grid_2">';
                echo '<b>Email</b>';
                echo '</div>';
                
                echo '<div class="grid_2">';
                echo '<b>Contact</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>details</b>';
                echo '</div>'; 
                
                echo '<div class="grid_12"><br><br></div>';
                    
                    
                // printing the array content
                while($row = mysql_fetch_array($result)){
                    
                    echo '<div class="grid_2 prefix_1">';
                    if($row['Invoice_number'] != ''){ echo $row['Invoice_number']; }else{
                    echo '------------';}
                    echo '</div>';
                    
                    echo '<div class="grid_1">';
                    if($row['Buyer'] != ''){ echo $row['Buyer']; }else{
                    echo '------------';}
                    echo '</div>';
                    
                    echo '<div class="grid_2">';
                    if($row['Timestamp'] != ''){ echo $row['Timestamp']; }else{
                    echo '------------';}
                    echo '</div>';
                    
                    echo '<div class="grid_2">';
                    if($row['email'] != ''){ echo $row['email']; }else{
                    echo '------------';}
                    echo '</div>';
                    
                    echo '<div class="grid_2">';
                    if($row['contact'] != ''){ echo $row['contact']; }else{
                    echo '------------';}
                    echo '</div>';
                    
                    echo '<div class="grid_1">';
                    echo '<a href="showInvoice.php?id='.$row['ID'].'">Details</a> ';
                    echo '</div>';
                    
                    echo '<div class="grid_12"><br><br></div>'; 
                    
                    }
                
                }
                
                }

		?>

                


		<div class="grid_12"><br/></div>
		
		
		

	<?php include ('footer.php'); ?>	
		
		
	<div/>

</body>

</html>
