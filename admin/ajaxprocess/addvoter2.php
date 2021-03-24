<?php
include('../DB/db.php');

if (isset($_POST['name'])) {

	 
$name = $_POST['name'];
$course_title = $_POST['course'];
$level = $_POST['level'];
$student_id = $_POST['student_id'];
$face_id = $_POST['face_id'];

		

$add = mysqli_query($db, "INSERT INTO `voters`(`id`, `voter_name`, `voter_course`, `voter_level`, `voter_student_id`, `face_id`) VALUES ('','$name','$course_title','$level','$student_id','$face_id')");

	if ($add) {

	echo 'success';
	}else{

		echo 'Error, Please Try Again.';
	}



	//}
	

	
	

	
	
}





?>