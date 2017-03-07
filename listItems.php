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
                
                
                //select statment
                $sql = "Select * from $database.Items"; 
                
                
                //executing the sql
                $result = mysql_query($sql);


		//checking if there is items stored in the database or not
		if(mysql_num_rows($result) == 0){
		echo '<div class="grid_5 prefix_4"><h3>The items database is empty</h3></div>';
		}else{                    
                
                
                //printing the header
                echo '<div class="grid_12"><br><br></div>';   
                
                
                echo '<div class="grid_1 prefix_2">';
                echo '<b>Name</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Price</b>';
                echo '</div>';
                    
                echo '<div class="grid_3">';
                echo '<b>Seller Details</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Add date</b>';
                echo '</div>';
				
				echo '<div class="grid_1">';
                echo '<b>Seller Contact</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Edit item</b>';
                echo '</div>'; 
                    
                echo '<div class="grid_12"><br><br></div>';    
                    
                // printing the array content
                while($row = mysql_fetch_array($result)){
                    
                    echo '<div class="grid_1 prefix_2">';
                    echo $row['Name'];
                    echo '</div>';
                    
                    echo '<div class="grid_1">';
                    echo $row['Price'];
                    echo '</div>';
                    
                    echo '<div class="grid_3">';
                    echo $row['seller'];
                    echo '</div>';
                    
                    echo '<div class="grid_1">';
                    echo $row['Added_at'];
                    echo '</div>';
					
					echo '<div class="grid_1">';
                    echo $row['contact'];
                    echo '</div>';
                    
                    echo '<div class="grid_1">';
                    echo '<a href="editItem.php?id='.$row['ID'].'">Edit item</a> ';
                    echo '</div>';
                                    
                    
                    echo '<div class="grid_12"><br><br></div>'; 
                    
                }//End array fetch
		}//End else
                ?>


<!-- spacing <br> before the buttom-->
		<div class="grid_12"><br/></div>		
		
		
<!-- the buttom-->
<?php include ('footer.php'); ?>		
		
		
	<div/><!-- ending container -->

</body>

</html>
