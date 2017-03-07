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
                $name = mysql_real_escape_string($_POST['name']);
                $price = mysql_real_escape_string($_POST['price']);
                $seller = mysql_real_escape_string($_POST['seller']);
				$cont = mysql_real_escape_string($_POST['cont']);
				
                
                if($name == ''|| $price == '' || $seller =='' || $cont=='') {
                    //one field at least is empty
                    echo '<div class="grid_5 prefix_4"><h3>Invlaid input</h3></div>';
                }else if(strlen($cont)!=10) {
                   echo '<div class="grid_5 prefix_4"><h3>Invlaid input</h3></div>';				
				}
				else {
				
				$sq = "SELECT * FROM $database.items WHERE  items.name like '%$name%' ";
				mysql_query($sq) or die ("Invalid Item!!!!! item already exsist!!");
				$val=mysql_affected_rows($connection);
				if($val){
                  echo '<div class="grid_5 prefix_4"><h3>Invalid item !!!! Item already Exist!!!</h3></div>';
				  }
				  else {
				
                     $currentTimeStamp = date('Y-m-d');
                    
                $sql = "INSERT into $database.Items values('', '$name', '$price', '$seller', '$currentTimeStamp', '$cont')";  
                    mysql_query($sql); 
                    echo '<div class="grid_5 prefix_4"><h3>Item added successfully</h3></div>';
                      }					
					} ?>
                


		<div class="grid_12"><br/></div>
		
		

<?php include ('footer.php'); ?>	
		
		
	<div/>

</body>

</html>
