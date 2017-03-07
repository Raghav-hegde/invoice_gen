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
                
                $connection = mysql_connect($host, $user,$password);
                
                if(!$connection){
                    die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');
                }
                
                mysql_select_db($database);
                
                
                //select statment
                $id = mysql_real_escape_string($_GET['id']);
                $sql = "Select * from $database.Items where ID =".$id; 
                
                
                //executing the sql
                $result = mysql_query($sql);
                
                
                //returning the result in an array
                $row = mysql_fetch_row($result);
                
                if(count($row)==0){
                    echo '<div class="grid_5 prefix_4"><h3>Incorrect item ID</h3></div>';
                }else{
                    
                //printing the edit form and fill it with data from database
                    
                    echo'<form action="processEditItem.php" method="post">';
                    
                    echo'<input type="hidden" name="id" value="'.$id.'" />';
                    
                    echo'<div class = "grid_1 prefix_3">Name:</div>';
                    echo'<div class = "grid_1 prefix_1"><input type="text" name="name" value="'.$row[1].'" /></div>';
                    echo'<div class="grid_12"><br/></div>';
                    
                    echo'<div class = "grid_1 prefix_3">Price:</div>';
                    echo'<div class = "grid_1 prefix_1"><input type="text" name="price" value="'.$row[2].'" /></div>';
                    echo'<div class="grid_12"><br/></div>';
                    
                    echo'<div class = "grid_1 prefix_3">Seller Details:</div>';
                    echo'<div class = "grid_1 prefix_1"><input type="text" name="seller" value="'.$row[3].'" /></div>';
                    echo'<div class="grid_12"><br/></div>';
					
					echo'<div class = "grid_1 prefix_3">Seller Contact:</div>';
                    echo'<div class = "grid_1 prefix_1"><input type="text" name="cont" value="'.$row[5].'" /></div>';
                    echo'<div class="grid_12"><br/></div>';
					
		
                             
                    echo'<div class = "grid_1 prefix_6"><input type="submit" name="Submit" value="Edit" /></div>';	
					echo '<div class="grid_1">';
                    echo '<a href="DeleteItem.php?id='.$id.'">DeleteItem</a> ';
                    echo '</div>';
							

                    echo'</form>';} 
					
					?>	



		<div class="grid_12"><br/></div>
				
		

	<?php include ('footer.php'); ?>
	
		
	<div/>

</body>

</html>
