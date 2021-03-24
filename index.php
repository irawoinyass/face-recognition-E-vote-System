<?php
session_start();
if(isset($_SESSION['voter_id'])){
header("location: dashboard.php");
}else

  


?>


<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Vote system using facial as authentication - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

<link href="css/overlay.css" rel="stylesheet">
<link href="css/progress.css" rel="stylesheet">

</head>
<div class="overlays"><div class="loaders"></div></div>
<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h2>E-Vote System</h2>
                      <h4 class="h6 text-gray-900 mb-4">Using facial as authentication!</h4>
                    <h4 class="h5 text-gray-900 mb-2">Login!</h4>
                  </div>
                  <form id="find_face_form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Upload Your Face.</label>
                      <input type="file" class="form-control" id="image" name="image">
                    </div>
                    
             
                   

                    <button class="btn btn-info btn-block" type="submit">Login</button>
            
                  </form>
                 
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


  <script type="text/javascript">
    
    $(document).ready(function(){





$('#find_face_form').on('submit', function(event){

  event.preventDefault();



var image = $('#image').val();


 if (image == '') {

alert('Image Title Field is required');

}else{

      if (confirm("Are you sure")) {

$('.overlays').show();

$.ajax({
    url:"ajaxprocess/findface.php",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data); 

 

if (data == null) {
alert('Face Not Found');
$('.overlays').hide();
}else{

   $.each(data, function(i, value){

//console.log(value.id); 

if (value.probability == 1) {

    Login(value.name);
$('.overlays').hide();
  }else{

alert('Unregistered face, or Server Error, Please Try Again');
$('.overlays').hide();
  }


 
    })




}
     

    }


  })


      }


    }


});





function Login(student_id){


   $.ajax({        
        url:"ajaxprocess/login.php",
        method:"POST",
        data:{student_id:student_id},
        success:function(data){

    //console.log(data);

 if (data == 'success') {

      window.location.href = 'dashboard.php';

    }else{

      alert(data);
      $('.overlays').hide();
    
          }

        }
        
         })



}




























    });


  </script>

</body>

</html>
