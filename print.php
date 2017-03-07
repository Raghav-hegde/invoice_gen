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





		

		<div class="grid_12"><br><br></div>
		<div class="grid_3 prefix_1">
		<img src="img/log.jpg"  width="280" height="150"/>
		 </div>
	      <div align="right">
		    <p><h6>FROM :</h6>The WIWBEE Store<br/>Indhira Nagar<br/>Bangalore-01<br/>Gmail:info@wiwbee.com<br/>contact:7931133883</p>
	      </div>
        		  
                    
                <?php               
                
                // connecting to database and selecting the table
                $connection = mysql_connect($host, $user,$password);
                
                if(!$connection){
                    die('<div class="grid_5 prefix_4"><h3>Could not connect to database - </h3>'.  mysql_errno().'</div>');
                }
                
                mysql_select_db($database);
                
                
                
                $id = mysql_real_escape_string($_GET['id']);
                $invoice_sum = 0;
                
                
                $sql = "select * from $database.Order_head where ID = $id";
                
                $result = mysql_query($sql);
                
                $ar = array();
                $ar = mysql_fetch_row($result);
                
                if(count($ar) == 0){
                echo '<div class="grid_2 prefix_5" align = center><h4>The invoice ID is invalid</h4></div>';
                }else{          
                
               
                echo '<div class="grid_12"><br><br></div>';
                           
                
                echo '<div class="grid_2 prefix_1">';
                echo '<b>Buyer: </b>'.$ar[2];;
                echo '</div>';
                    
                echo '<div class="grid_3">';
                echo '<b>Invoice Number: </b>'.$ar[1];
                echo '</div>';
                                        
                echo '<div class="grid_3">';
                echo '<b>Date: </b>'.$ar[3];
                echo '</div>';
                    
                echo '<div class="grid_3">';
                echo '<b>Contct: </b>'.$ar[5];
                echo '</div>';                
                
                
                echo '<div class="grid_12" align = center>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</div>';
                echo '<div class="grid_12"><br><br></div>';

                           
                //preparing the second select statement
                $sql2 = "select $database.Order_line.ID LID, (($database.Items.Price * $database.Order_line.Quantity*0.055)+$database.Items.Price * $database.Order_line.Quantity) Line_comment, $database.Items.Name Item_name, $database.Items.Price 	Item_Price, $database.Order_line.Quantity Quantity, ($database.Items.Price * $database.Order_line.Quantity) q
                from $database.Order_line join $database.Items
                where ($database.Order_line.Item_ID = $database.Items.ID) and $database.Order_line.Order_number = $id
                order by $database.Order_line.ID"; 
                
                
                $result2 = mysql_query($sql2);
                
                 if(mysql_num_rows($result2) ==  0){
                echo '<div class="grid_4 prefix_4" align = center><h4>The invoice has no lines</h4></div>';
                }else{
                    
                
                echo '<div class="grid_2 prefix_3">';
                echo '<b>Item name</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Price</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Quantity</b>';
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo '<b>Total</b>';
                echo '</div>';
                    
                echo '<div class="grid_3">';
                echo '<b>Including VAT(5.5%)</b>';
                echo '</div>'; 
                           
               
                // printing the invoice lines' header
                while($row2 = mysql_fetch_array($result2)){
                    
                echo '<div class="grid_2 prefix_3">';
                echo $row2['Item_name'];
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo $row2['Item_Price'];
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo $row2['Quantity'];
                echo '</div>';
                    
                echo '<div class="grid_1">';
                echo $row2['q'];
                echo '</div>';
                    
                echo '<div class="grid_3">';
                echo $row2['Line_comment'];
                echo '</div>';
                
              
                $invoice_sum += $row2['Line_comment'];
                    
                }
                echo '<b></b><div >';
				echo '______________________________________________________________________________________________________________________________________<br/>';
                echo '<center>Bill Total:'.$invoice_sum.'</center>';
		        echo '</div>';
echo '______________________________________________________________________________________________________________________________________';				
                }
                
                }
                ?>
 <form> <center><br/> 
<input type="button" value="print" name="print" onclick="window.print();">
</center></form>

		<div class="grid_12"><br/></div>		
		
		

<?php include ('footer.php'); ?>
			
		
	<div/>

</body>

</html>
