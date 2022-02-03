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
    <meta name="author" content="">


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
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-white">
					<h2 class="heading">Development of IoT Application with Live Data<br>Case study: Elevator</h2>
					<p >
						A <b>digital twin</b> is a virtual double of a product, a machine, a process or of a complete production facility. It contains all the data and simulation models relevant to its original. Digital twins not only enable products to be conceived, simulated, and manufactured faster than in the past, but also to be designed with a view to improved economy, performance, robustness or environmental compatibility. The virtual twin of a product can also accompany it like a digital shadow through all the stages of the value chain – from design through production to operation to servicing and even recycling. It seamlessly and ideally links together the three Ps: product, production, and performance. 

					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="assets/img/dt1.jpeg" alt="Digital Twin" class="dt1">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h2 ></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 d-flex justify-content-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" 
					  viewBox="-25 -25 250 250" class="rotate"> 
					  <defs>
					   <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%" >
					     <stop offset="0%" style="stop-color:#00FF84;stop-opacity:1.00" />
					     <stop offset="100%" style="stop-color:#008EE6;stop-opacity:1.00" />
					   </linearGradient>
					  </defs>
					  <path d="M156.03155361305835 17.172075966453377 C145.39372173349133 7.06014955653216 114.44146013247051 -1.9236323281704586 99.891067243783 0.00005933174448102818 C73.61790946467634 3.4736050212626792 23.791848386374284 33.61821944192897 10.06089840313436 56.285494353147705 C0.5917095217171582 71.91738492323432 -3.5743089224076527 112.69707613206212 4.34808795455946 129.166962852709 C17.95894690554634 157.46260476193808 76.93227249594541 201.07654014560455 108.29910433135178 199.6550293126109 C136.64056010774036 198.37062524463389 188.55402774121987 155.08567432110758 196.07804334828887 127.73102209375494 C203.87429830105555 99.38660415975417 177.33842345560825 37.425592125838655 156.03155361305835 17.172075966453377Z" stroke="none" fill="url(#lgrad)"  />
					</svg>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 text-white">
					<h2 class="heading">Project Objectives</h2>
					<ol>
						<li>Connect the  elevator model to the cloud</li>
						<li>Create a cloud based digital twin of the elevator system that simulates the actual elevator system real time</li>
						<li>Integrating the Individual systems so that they function together seamlessly</li>
						<li>Collect, monitor and visualize the system data real time on a cloud IOT platform</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-white mt-5 d-flex justify-content-center">
					<h3 class="heading ">Group Members</h3> 
					<ul class="mt-1">
						<li>Mosoito Mutete </li>
						<li>Wanjir Owuor   </li>
						<li>Chege Nduati   </li>
						<li>Wachira Mwangi </li>
					</ul>
					
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-white mt-5 d-flex justify-content-center">
					<h3 class="heading ">Registration Number</h3> 
					<ul class="mt-1">
						<li>E022-01-1540/2017</li>
						<li>E022-01-0720/2017</li>
						<li>E022-01-0695/2017</li>
						<li>E022-01-0746/2017</li>
					</ul>
					
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-white mt-5 d-flex justify-content-center">
					<h3 class="heading ">Contacts</h3> 
					<ul class="mt-1">
						<li>+254797067875</li>
						<li>+254719264493</li>
						<li>+254723060846</li>
						<li>+254703519593</li>
					</ul>
					
				</div>
			</div>	
		</div>
		<div class="container-fluid">
			<div class="row ">
	          <div class="copyright col-sm-12 col-md-12 col-lg-12  d-flex justify-content-center pt-2 pb-2 text-white">
	            © 2021 Dedan Kimathi University of Technology
	          </div>
		</div>
		</div>
  </body>
</html>
