<?php
include('../DB/db.php');
session_start();

$admin_id = $_SESSION['admin_id'];

	$me = mysqli_query($db, "SELECT * FROM `admin` WHERE `id` = '$admin_id' ");

	while ($row = mysqli_fetch_assoc($me)) {
		$name = $row['name'];
    $key = $row['secret_key'];
	}



if (isset($_FILES['change_image']['name'])) {

	 

$image = $_FILES['change_image']['name']; 
$temp = $_FILES['change_image']['tmp_name'];

$face_id = $_POST['face_id'];

	
//echo json_encode(['el'=>'hello', 'yes'=>'yeso']);
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.luxand.cloud/subject/".$face_id,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => [ "store" => "1", "photo" => curl_file_create($temp,$image)], 
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





?>