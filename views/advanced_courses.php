<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P90VYKNMTL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-P90VYKNMTL');
    </script>
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
    <?php
      session_start();
      $returnurl = 'https://chats.beyond-grades.com/?user='.urlencode(base64_encode($_SESSION['name'])).'&email='.urlencode(base64_encode("you won't guess the amount of this course hash value and if you do my backend will still catch you ".$_SESSION['email']));
      if($GLOBALS['live'] == true){
        $dotClass = '<span class="red-dot"></span>';
      }else{
        $dotClass = '<span class="grey-dot"></span>';
      }
      if($_SESSION["subscription"] == true){
        $subscription = '<p class = "text-success subscribe-text">Subscription Active</p>';
       }else{
         $subscription = '<p class = "text-warning subscribe-text">No active Subscription</p>';
       }
      if($_SESSION["loggedin"] == true){
        $username = $_SESSION['name'];
        $initials = explode(' ', $username);
        $initials = $initials[0][0].$initials[1][0];  
        echo '
          <nav class="navbar navbar-expand-lg mb-0">
            <a class="navbar-brand" href="/"><img src="assets/img/Beyond Grades.svg" height="100px" width="150px" alt="Responsive image"></a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto align-bottom">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/live">'.$dotClass.' Live</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/all-courses">All Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link current active" href="/advanced-courses">Advanced Courses</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="/pro">Pro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" target = "_blank" href="'.$returnurl.'">Chats</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/shop">Shop</a>
                </li>
                 <li class="nav-item dropleft">
                  <a class="nav-link  user" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$initials.'
                  </a>
                    <div class="dropdown-menu dropdown-menu-nav " aria-labelledby="navbarDropdown">
                    <ul id="parent">
                        <p class = "user-big">'.$initials.'</p>
                        <li><b>'.$_SESSION['name'].'</b><br><span class = "small-text">'.$_SESSION['email'].'</span></li>
                        '.$subscription.'
                    </ul>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Payment History</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Wishlist</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Messages</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Referrals</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout?returnurl=/">log Out</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>';

      } else{
        echo '
          <nav class="navbar navbar-expand-lg mb-0">
            <a class="navbar-brand" href="/"><img src="assets/img/Beyond Grades.svg" height="100px" width="150px" alt="Responsive image"></a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto align-bottom">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/live">'.$dotClass.' Live</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/all-courses">All Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link current active" href="/advanced-courses">Advanced Courses</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="/pro">Pro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link auth-sign-in" href="/sign-in">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link auth-sign-up" href="/sign-up">Sign up</a>
                </li>
              </ul>
            </div>
          </nav>';
      } 
    ?>
    <div class="bg2 h-55">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 mt-3 mb-2">
            <h3 class="text-center about-text" style="letter-spacing: 2.5px;">Advanced Courses</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-3 col-md-3">
            <div class="btn-group dropdown">
          <button type="button" class="bg-transparent-custom">
            Category:
          </button>
          <button type="button" class="bg-transparent-2 dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only"></span>All <i class="fas fa-caret-down"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">All</a>
            <a class="dropdown-item" href="#">Electronics</a>
            <a class="dropdown-item" href="#">PCB Design</a>
            <a class="dropdown-item" href="#">IoT Development</a>
            <a class="dropdown-item" href="#">Web Development</a>
            <a class="dropdown-item" href="#">Arduino</a>
            <a class="dropdown-item" href="#">ESP32</a>
            <a class="dropdown-item" href="#">NodeMCU</a>
          </div>
        </div>
          </div>
          <div class="col-sm-12 col-lg-3 col-md-3">
             <div class="btn-group dropdown">
          <button type="button" class="bg-transparent-custom">
            Author:
          </button>
          <button type="button" class="bg-transparent-2 dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only"></span>All <i class="fas fa-caret-down"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">All</a>
          </div>
        </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 d-flex justify-content-right">
            <input id="search" type="text" class="search-input" placeholder="Find a Course..">
            <div class="input-group-append">
                <span class="input-group-text bg-transparent"><i class="fa fa-search fa-lg"></i></span>
            </div>
          </div>
        </div>
         <div class = "row animated bounce" id="data_container" ></div>
      </div>
    </div>

   
    <?php include_once 'layouts/footer.php'; ?>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
     $('.nav-link').hover(function(){
       $('.current').removeClass('active');
     }, function(){
      $('.current').addClass('active');
     }); 



      $( document ).ready(function() {

            // main crud
             read(); 

        // search
           $('#search').on('keyup', function(){
              read();
              // console.log("data");
            });
        });
    
    function read(){
      var search = $('#search').val();
      $.get(
        "/api-advanced-course-read",
        {
          search:search  
        },
        function (data, status) {
          //console.log(data);
              $("#data_container").html(data);
          }
        );
    } 
    </script>
</html>