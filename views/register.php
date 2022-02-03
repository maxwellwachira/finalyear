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

    <!-- Montserrat -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/3rdparties/bootstrap/css/bootstrap.css">

    <!--animate-->
    <link rel="stylesheet" type="text/css" href="assets/3rdparties/animate/animate.css">

     <!--International CODE-->
    <link rel="stylesheet" href="assets/3rdparties/build/css/intlTelInput.css">

    <!--custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Gamai Tech | sign up</title>
  </head>
  <body>
    <div class="horizontal-navbar">   
      <nav class="navbar navbar-expand-lg mb-0">
        <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars fa-lg"></i>
        </button>

        <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
         <ul class="nav navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#">User Manuals</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sign-in">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link current active" href="/sign-up">Register</a>
            </li>
          </ul>
         <div class="navbar-nav flex-row mb-2">
            <input id="search" type="text" class="nav-form" placeholder="Search....">
              <div class="input-group-append">
                  <span class="input-group-text nav-form-search-icon"><i class="fa fa-search fa-lg"></i></span>
              </div>
        </div>
        </div>
        <div class="text-theme mr-2 font-weight-bold none">
          IoT made easy
        </div>
      </nav>
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
                   <form method="post" class="mt-3" id="register-form">
                        <?php echo $message;?>
                        <?php echo $ref;?>
                       <label class="ml-5 black-text-sm">First Name</label>
                      <div class="form-group d-flex justify-content-center">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="fas fa-user"></i></button>
                        </div>   
                          <input type="text" name="firstname"  class="form-control" id = "firstname" placeholder="John"> 
                          <span class="equallizer"></span> 
                      </div> 

                      <label class="ml-5 black-text-sm">Last Name</label>
                      <div class="form-group d-flex justify-content-center">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="fas fa-user"></i></button>
                        </div>   
                          <input type="text" name="secondname"  class="form-control" id = "secondname" placeholder="Doe"> 
                          <span class="equallizer"></span> 
                      </div>  

                      <label class="ml-5 black-text-sm">Email</label>
                      <div class="form-group d-flex justify-content-center">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="far fa-envelope"></i></button>
                        </div>   
                          <input type="email" name="email"  class="form-control" id = "email" placeholder="example@site.com"> 
                          <span class="equallizer"></span> 
                      </div>

                      <label class="ml-5 black-text-sm">Phone</label>
                      <div class="form-group d-flex justify-content-center phone-margin">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="fas fa-phone"></i></button>
                        </div>   
                          <input type="tel" name="phonenumber"  class="form-control" id = "phonenumber"> 
                      </div>


                      <label class="ml-5 black-text-sm">Password</label>
                      <div class="form-group d-flex justify-content-center">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="fas fa-unlock-alt"></i></button>
                        </div> 
                          <input type="password" name="password" id = "password" class="form-control" placeholder=" Enter Password">
                          <span toggle="#password-field" id="toggle-password" class="fa fa-fw fa-eye field-icon toggle-password"></span><br>
                      </div>
                       <small class="form-text text-muted ml-5 mt-0">* Password Must be atleast 8 (eight) Characters</small>

                      <label class="ml-5 black-text-sm mt-3">Confirm Password</label>
                      <div class="form-group d-flex justify-content-center">
                        <div class="input-group-prepend bg-black">
                          <button class="input-button" disabled="true"><i class="fas fa-unlock-alt"></i></button>
                        </div> 
                          <input type="password" name="confirmPassword" id = "confirmPassword" class="form-control" placeholder=" Confirm Password">
                          <span toggle="#confirmPassword-field" id="toggle-confirmPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      </div>
                      <div class="form-check mt-3 ml-5">
                        <input type="checkbox" class="form-check-input" value="terms">
                        <label class="form-check-label" >Agree to <a href="/terms-and-conditions" class="text-pink">Terms and Conditions</a></label>
                      </div>


                      <div class="form-group text-center mt-3">
                        <button type="submit" id="register_submit" class="auth-button" ><i class='fa fa-check'></i>Sign Up</button>
                    </div>
                    <div class="d-flex justify-content-center" style="width:90%; margin-left:4%">
                      <div id="response"></div>
                    </div>
                    <div class="form-group text-center mt-3" >
                        <a id="" href="/sign-in" class="text-black">or Sign In here</a>
                    </div>

                  </form> 
                </div>
              </div>
          </div>
      </div> 
    </div>
 
  <script src="assets/3rdparties/jquery/jquery.js"></script>
  <script src="assets/3rdparties/bootstrap/js/bootstrap.js"></script>

    <script src="assets/3rdparties/build/js/intlTelInput-jquery.js"></script>


    <script type="text/javascript">
      $("#toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#password").attr("type");
        if (input == "password") {
          $("#password").attr("type", "text");
        } else {
          $("#password").attr("type", "password");
        }
      });
      $("#toggle-confirmPassword").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#confirmPassword").attr("type");
        if (input == "password") {
          $("#confirmPassword").attr("type", "text");
        } else {
          $("#confirmPassword").attr("type", "password");
        }
      });
      $('.nav-link').hover(function(){
         $('.current').removeClass('active');
       }, function(){
        $('.current').addClass('active');
     }); 

      $(".category input[type='radio']").click(function(){
            var radioValue = $("input[name='engineeringbg']:checked").val();
            if(radioValue == 'yes'){
               $('.expert').removeClass('d-none'); 
            }else{
                $('.expert').addClass('d-none'); 
            }
        });

      $("#phonenumber").intlTelInput({
        initialCountry: "auto",
              geoIpLookup: function(callback) {
                $.get('https://ipinfo.io?token=2433f368462b55', function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
                });
              }

     });

      function clear_register_field() {
          $("#firstname").val('');
          $("#secondname").val('');
          $("#phonenumber").val('');
          $("#email").val('');
          $("#password").val('');
          $("#confirmPassword").val('');
      }


      function register_submit(){
        
        // pull in values/variables
        var firstname = $("#firstname").val();
        var csrf_token = $("#csrf").val();
        var secondname = $("#secondname").val();
        var phonenumber = $("#phonenumber").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        var ref = $('#ref').val();
        var terms = $('input[type="checkbox"]:checked').val();
       
        //console.log(background);
        //check if any of the variable is empty
        if (!firstname || !secondname  || !phonenumber || !email || !password || !confirmPassword) {
          $('#response').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Please fill out all sections</div>');
        } 
        else {

            if (password != confirmPassword) {

                $('#response').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Passwords do not match</div>');

              } else {

                if (Number(password.length) < 8){

                  $('#response').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Password Must be atleast 8 characters</div>');

                }else {

                  if(!terms){
                    $('#response').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i>You have to agree to Terms and Conditions</div>');
                  }else{
                   
                    $('#response').html('');

                    $.ajax({  
                        url:"/register",  
                        method:"POST",  
                        data:{
                          csrf_token:csrf_token,
                          firstname:firstname,
                          secondname:secondname,
                          email:email,
                          phonenumber:phonenumber,
                          password:password,
                          confirmPassword:confirmPassword
                          
                        },
                        dataType: 'text', 
                        success:function(data)  
                        {  
                         
                    
                            
                            //console.log(data);
                            var response = JSON.parse(data);
                            console.log(response);
                            if (response.message == 'success') {
                              var link = '/resend-activation-link?email='+email;
                              $('#response').html('<div class="alert alert-success animated bounce" role="alert"><i class="fa fa-check animated swing infinite"></i>Sign Up Success. Check your email to verify your account </div><div>Did not get email?  Click <a href = "'+link+'">here to resend email</a></div>');
                              
                              // clear the fields
                              clear_register_field();

                            } else {
                              $('#response').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> '+response.message +'</div>');
                              
                            }
                            
                        },
                        error: function (jqXhr, textStatus, errorThrown) {
                            
                            $('#response').html('<hr><div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Contact system Admin. System error</div>');
                            //console.log(jqXhr + " || " + textStatus + " || " + errorThrown);
                        } 
                    });
                  }

                }

              } 
          }
        }

        $(document).ready(function() {

          $('#register-form').submit(function(event){
            event.preventDefault();            
              register_submit();  
              return false;    
            });
      });
    
    </script>
</html>
