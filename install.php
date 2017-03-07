<html>
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />

<Title>The WIWBEE

</head>

<body>

<?php require("config.php"); ?>


	<div class="container_12">
		

		<div class="grid_12"><br><br></div>
                
                    
                <?php               
                
                // connecting to database and selecting the table
                $connection = mysql_connect($host, $user,$password);
                
                if(!$connection){
                    die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');
                }
                
                mysql_select_db($database);
                
                
                
                $sql1 = "CREATE TABLE IF NOT EXISTS `Order_head` (
  			 `ID` int(11) NOT NULL AUTO_INCREMENT,
 			 `Invoice_number` varchar(255) NOT NULL,
 			 `Buyer` varchar(255) NOT NULL,
  			 `Timestamp` text NOT NULL,
			 `Delivery_date` text NOT NULL,
  			 `Payment_method` text NOT NULL,
  			  PRIMARY KEY (`ID`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;";
		$sql2 = "CREATE TABLE IF NOT EXISTS `Order_line` (
  			 `ID` int(11) NOT NULL AUTO_INCREMENT,
  			 `Order_number` int(11) NOT NULL,
  			 `Item_ID` int(11) NOT NULL,
  			 `Quantity` int(11) NOT NULL,
  			 `Comment` varchar(255) NOT NULL,
  			  PRIMARY KEY (`ID`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;";
		$sql3 = "CREATE TABLE IF NOT EXISTS `Items` (
  			 `ID` int(11) NOT NULL AUTO_INCREMENT,
  			 `Name` varchar(255) NOT NULL,
  			 `Price` decimal(10,0) NOT NULL,
  			 `Comment` varchar(255) NOT NULL,
  			 `Added_at` text NOT NULL,
  			  PRIMARY KEY (`ID`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;";
                
                
                
  		mysql_query($sql1);
  		mysql_query($sql2);
  		mysql_query($sql3);
                    

		echo '<div class="grid_5 prefix_4"><h3>installation completed, delete install.php file</h3>';

                
                echo '<div class="grid_12"><br><br></div>'; ?>
                


		<div class="grid_12"><br/></div>
		
		
	<div/>

</body>

</html>
