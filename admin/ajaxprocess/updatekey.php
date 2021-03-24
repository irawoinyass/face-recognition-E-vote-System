<?php
include('../DB/db.php');

if (isset($_POST['secret_key'])) {

	 
	$secret_key = $_POST['secret_key'];
	


$update = mysqli_query($db, "UPDATE `admin` SET `secret_key`='$secret_key' WHERE `id` = 1");

	if ($update) {
echo 'success';
	}else{

		echo 'Error, Please Try Again.';
	}


	



	
	

	
	

	
	
}





?>