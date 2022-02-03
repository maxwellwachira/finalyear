<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Site Metas --> 
    <meta name="description" content="">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="author" content="maxwellwachira67@gmail.com +254703519593">


    <!--icon-->
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon"/>

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/91ae273ed7.js" crossorigin="anonymous"></script>

    <!--CK Editor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <!-- Montserrat
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'> -->

    <!-- CSS only -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--animate-->
    <link rel="stylesheet" type="text/css" href="assets/3rdparties/animate/animate.css">

    <!--pogo-slider-->
    <link rel="stylesheet" href="assets/3rdparties/pogoslider/pogo-slider.min.css">

    <!--custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Final Year Project</title>
  </head>
  <body>
  <div class="gradient-bg">
		<div class="shadow-lg rounded">
			<nav class="navbar navbar-expand-lg ">
			  <div class="container-fluid nav-margin">
			    <a class="navbar-brand" href="/"><img src="assets/img/logo.png" height="80px" width="100px"></a>
			    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <i class="fas fa-bars fa-lg"></i>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	              <ul class="navbar-nav ms-auto align-bottom">
	                <li class="nav-item">
	                  <a class="nav-link current active" href="/">Home</a>
	                </li>
	                <li class="nav-item">
	                  <a class="nav-link" href="https://new.siemens.com/global/en/company/stories/research-technologies/digitaltwin/digital-twin.html" target="__blank">Digital Twin</a>
	                </li>
	                <li class="nav-item">
	                  <a class="nav-link" href="https://firebase.google.com/" target="__blank">Google Firebase</a>
	                </li>
	                <li class="nav-item">
	                  <a class="nav-link auth-sign-in" href="/sign-in">Sign in</a>
	                </li>
	              </ul>
	            </div>
			  </div>
			</nav>
		</div>
</div>
    <div class="h-100">
     <div class="container">
          <div class = "row animated bounce" >
              <div class="none col-lg-3 col-md-3 col-sm-12 mt-5 mt-5"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 mt-3 p-3 mb-5 d-flex justify-content-center">
               <div class="card card-auth"  style="box-shadow: 0px 0px 10px  #0C0C0C !important;margin:5px; width:90%">
                 <div class="d-flex justify-content-center">
                  <img src="assets/img/logo.png" class="card-img-top card-img-top-auth" alt="logo">
                </div>
                   <form method="post" class="mt-3 ">
                    
                    <?php echo $message;?>
                    <div id="op"></div>
                    <div class="form-group d-flex justify-content-center mt-3">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="far fa-envelope"></i></button>
                        </div>   
                          <input type="email" name="email"  class="form-control" id = "email" placeholder="Enter your email"> 
                          <span class="equallizer"></span> 
                      </div>  
                      <div class="form-group">
                        <div class="d-flex justify-content-center mb-5 mt-3">
                          <button type="submit" class="auth-button text-white" id="send_button" >Get New Password</button>
                        </div>
                      </div>
                  </form> 
              </div>
          </div>
      </div> 
    </div>
    <script src="../assets/3rdparties/jquery/jquery.js"></script>
    <script src="../assets/3rdparties/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript">
       function clear_register_field() {
          $("#email").val('');
        }


      function forgotpassword_submit(){
        
        // pull in values/variables
        var email = $("#email").val();
        var csrf = $('#csrf').val();



        //check if any of the variable is empty
        if (!email || (email == "")) {
          $('#op').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Please enter your Email</div>');
        } 
        else {

          $('#op').html('');

          console.log(email);
          console.log(csrf);

          $.ajax({  
              url:"/forgot-password",  
              method:"POST",  
              data:{
                csrf:csrf,
                email:email
              },
              dataType: 'text', 
              success:function(data)  
              {  
                  console.log(data);
                  var response = JSON.parse(data);
                  //console.log(response);
                  if (response.message !== 'success') {
                    
                     $('#op').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> ' + response.message +'</div>');
                    

                  }else if(response.message === 'success'){
                    // clear the fields
                    $('#op').html('<div class="alert alert-success animated bounce" role="alert"><i class="fa fa-tick"></i>  Password reset link sent to email </div>');
                    clear_register_field();
                  }
                  
              },
              error: function (jqXhr, textStatus, errorThrown) {
                  
                  $('#op').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Contact system Admin. System error</div>');
                  console.log(jqXhr + " || " + textStatus + " || " + errorThrown);
              } 
          });
        }
      }


      $('form').submit(function(event){
          event.preventDefault();
          forgotpassword_submit();
          return false;
         });
    </script>
</html>