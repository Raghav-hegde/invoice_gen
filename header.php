
	<?php	session_start();
	
	if(!isset($_SESSION['logedin'])) { header('Location: login.php'); } ?>


	<div><br/></div>


	<div class="grid_3 prefix_1">
		<img src="img/log.jpg"  width="150" height="100"/>
	</div>



	<div class="grid_12"></br></div>


	<div class="grid_2 ">
		<a href="default.php">
		<img src="img/home.png"/>
		</a>
	</div>

	<div class="grid_2">
		<a href="addItem.php">
		<img src="img/add_item.png"/>
		</a>
	</div>

	<div class="grid_2">
		<a href="listItems.php">
		<img src="img/list_items.png"/>
		</a>
	</div>

	<div class="grid_2">
		<a href="addInvoice.php">
		<img src="img/add_invoice.png"/>
		</a>
	</div>

	<div class="grid_2">
		<a href="findInvoice.php">
		<img src="img/find_invoice.png"/>
		</a>
	</div>

	<div class="grid_2">
		<a href="processLogout.php">
		<img src="img/log_out.png"/>
		</a>
	</div>
	

