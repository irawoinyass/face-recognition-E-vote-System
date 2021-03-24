<?php
include('../DB/db.php');
session_start();

$admin_id = $_SESSION['admin_id'];

	$me = mysqli_query($db, "SELECT * FROM `admin` WHERE `id` = '$admin_id' ");

	while ($row = mysqli_fetch_assoc($me)) {
		$name = $row['name'];
    $key = $row['secret_key'];
	}



if (isset($_FILES['image']['name'])) {

	 
$name = $_POST['name'];
$image = $_FILES['image']['name']; 
$temp = $_FILES['image']['tmp_name'];
$course_title = $_POST['course_title'];

$level = $_POST['level'];
$student_id = $_POST['student_id'];

	


		
//echo json_encode('okay'); 

	$check = mysqli_query($db, "SELECT * FROM `voters` WHERE `voter_student_id` = '$student_id'");
	$nums = mysqli_num_rows($check);


	if ($nums > 0) {
		echo json_encode('Student ID has been taken');
	}else{


//echo json_encode(['el'=>'hello', 'yes'=>'yeso']);
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.luxand.cloud/subject/v2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => [ "name" => $student_id, "store" => "1", "photo" => curl_file_create($temp,$image)], 
	// or use URL
	// CURLOPT_POSTFIELDS => [ "photo" => "https://dashboard.luxand.cloud/img/brad.jpg" ], 
	CURLOPT_HTTPHEADER => array(
		"token: ".$key
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$result = json_decode($response,true);
  //ob_flush();//Flush the data here
   
   //print_r($result);

   // foreach ($result as $key) {
   // 		$key['id'].'<br/>';
   // 		$key['name'].'<br/>';
   // 		$key['probability'].'<br/>';
   		
   // }
echo json_encode($result);
curl_close($curl);
 //ob_end_flush();

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	echo $response;


// }


	}



	
	
	

	
	
}





?>