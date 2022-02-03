<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Site Metas --> 
    <meta name="description" content="Beyond Grades is an online learning and teaching Academy with over 20 courses. Our main focus is IoT ranging from PCB design to firmware and web development. Learn PCB design, Firmware programming, web development and more">
    <meta name="title" content="Online Courses - Anytime, Anywhere | BeyondGrades">
    <meta name="keywords" content="Internet of Things, IoT, PCB design courses, Programming Courses, AI course, High Frequency PCB design, Free technology courses, Web development courses, 2021,">
    <meta name="author" content="maxwellwachira67@gmail.com +254703519593">


   <!--icon-->
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon"/>

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/91ae273ed7.js" crossorigin="anonymous"></script>

    <!-- Montserrat -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--animate-->
    <link rel="stylesheet" type="text/css" href="assets/3rdparties/animate/animate.css">
    <!--custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Beyond Grades</title>
  </head>
  <body>
    <div>
      <div class="contact-us">
       <div class="container">
            <div class = "row" >
                <div class="col-lg-12 col-xl-12 col-md-12 col-md-12 col-sm-12 mb-5 mt-5">
                   <h3 class="text-white" style="letter-spacing: 2.5px;">We are glad when you reach us!</h3>
                   <h5 class="text-white mt-3" style="letter-spacing: 2.5px;">Send Us Your Request</h5>
                   <form method = "post" autocomplete="off">
                     <div id="op"></div>
                     <input autocomplete="false" name="hidden" type="text" style="display:none;">
                     <input type="text" name="name" id="name" placeholder="Name" class="contact-us-input mt-2">
                     <input type="email" name="email" id="email" placeholder="Enter Email" class="contact-us-input mt-5">
                     <textarea name="message" id="message" placeholder="Description" class="contact-us-input mt-5"></textarea><br><br>
                     <button class="btn btn-success btn-large" type="submit" id="submit">Submit</button>
                   </form>
                   <p class="text-white mt-5">Call US <button onclick = "myFunction()" class="text-white align-middle contact-us-phone"><i class="fas fa-phone fa-2x"></i> </button> or <a target="_blank" href="https://wa.me/254703519593?text=Hello%2C%20I%20just%20visited%20Beyond%20Grades%20website%20and%20I%20wish%20to%20know%20more%20about%20the%20Academy" class="text-white align-middle">   <i class="fab fa-whatsapp-square fa-3x"></i> </a></p>
                   <div class="text-white mb-3 mt-3" id="phone-number" style="display: none;"><button class="btn btn-info btn-lg animated pulse infinite">+254 795 984727</button></div>
                   <p class="text-white">you can also scan the QR Code below to reach us on WhatsApp</p>
                   <img src="assets/img/qr-code.png" height="250px" width="250px">
                </div>
                
            </div>
        </div> 
      </div>
    </div>
    
    <?php include_once 'layouts/footer.php'; ?>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      function myFunction() {
        var x = document.getElementById("phone-number");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      function clearSendFields(){
        $("#name").val('');
        $("#email").val('');
        $("#message").val('');
      }

       function contactFormSend(){
          var name = $("#name").val();
          var email = $("#email").val();
          var message = $("#message").val();

          if(!name || !email || !message){
             $('#op').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Please fill out all sections</div>');
          }else{
            $('#op').html('');

            $.ajax({

              url:"/contact-us",  
              method:"POST",  
              data:{
                name:name,
                email:email,
                message:message
              },
              dataType: 'text', 
              success:function(data)  
              {  
                  //console.log(data);
                  var response = JSON.parse(data);
                  //console.log(response);
                  if (response.message !== 'success') {
                  
                     $('#op').html('<div class="alert alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> ' + response.message +'</div>');

                  }else {
                     $('#op').html('<div class="alert alert-success animated bounce" role="alert"><i class="fa fa-check"></i>Message Sent!!</div>');
                    clearSendFields();
                    setInterval(function(){
                      $('#op').html('');
                    }, 10000);
                  }
                  
              },
              error: function (jqXhr, textStatus, errorThrown) {
                  
                  $('#op').html('<div class="alert-danger animated bounce" role="alert"><i class="fa fa-warning animated swing infinite"></i> Contact system Admin. System error</div>');
                  console.log(jqXhr + " || " + textStatus + " || " + errorThrown);
                }
              

            });
          }
       }
     
     $(document).ready(function() {
       $('form').submit(function(event){
          event.preventDefault();
          contactFormSend();
          return false;
       });
     });


    </script>
</html>