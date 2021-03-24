<?php

include('../DB/db.php');

	if (isset($_POST['student_id'])) {

		$student_id = $_POST['student_id'];
		

		$validate = mysqli_query($db, "SELECT * FROM `voters` WHERE `voter_student_id`='$student_id'  ");

		$num_row = mysqli_num_rows($validate);

		if ($num_row < 1) {
			echo 'No Access';
		}else{

			session_start();

			while ($row = mysqli_fetch_assoc($validate)) {
				
				$_SESSION["voter_id"] = $row["id"];

				echo 'success';
			}

		}
		
	}else{

		echo 'Something went wrong, please try again';

	}














?>