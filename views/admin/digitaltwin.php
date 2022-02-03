<!DOCTYPE html>
<html>
  <head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!--<link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" /> -->

       
    <title>Digital Twin |  Dashboard</title>
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/91ae273ed7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/3rdparties/bootstrap/css/bootstrap.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/3rdparties/animate/animate.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="../assets/js/orbit.js"></script>
   
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>

    
  </head>
  <body>

    <div class="d-flex" id="wrapper" >
    <!-- Sidebar Holder -->
      <nav id="sidebar" class="card bg-black" style="position: absolute;">
        <div class="text-pink sidebar-header d-flex justify-content-center mt-3">
          Digital Twin
        </div>

        <ul class="list-unstyled components">
          <li class="active">
            <a href="/admin-dashboard">Dashboard</a>
          </li>
          <li>
            <a href="/devices">Devices</a>
          </li>
          <li>
            <a href="/digital-twin">Digital Twin</a>
          </li>
          <li>
            <a target = "__blank" href="https://console.firebase.google.com/u/0/project/elevator-3a561/database/elevator-3a561-default-rtdb/data">Data</a>
          </li>
        </ul>
      </nav>

    <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar bg-black">
        <button class="text-pink bg-transparent" id="menu-toggle"><i class="fas fa-times fa-lg"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/logout">logout</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Password Reset</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Settings</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main> 
 
        
   
      </main>
      </div>
      </div>
      <div class="handle">
            <div class="display">Cloud Based Digital Twin</div>
            <div class="buttons">
                <div class="btn-container bottom"><button class="btn-floor" data-set-floor="0">G</button></div>
                <div class="btn-container floor"><button class="btn-floor floor" data-set-floor="1">1</button></div>
                <div class="btn-container floor"><button class="btn-floor floor" data-set-floor="2">2</button></div>
            </div>
        </div>
        <div id="threejs" class="float-end"></div> 

  <script src="../assets/3rdparties/jquery/jquery.js"></script>
  <script src="../assets/3rdparties/bootstrap/js/bootstrap.js"></script>

  
  <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
  </script>
  <script>

    const firebaseConfig = {
    apiKey: "AIzaSyBpX0r75at6hZEfyjTC6iydB63elHBSCWc",
    authDomain: "elevator-3a561.firebaseapp.com",
    databaseURL: "https://elevator-3a561-default-rtdb.firebaseio.com",
    projectId: "elevator-3a561",
    storageBucket: "elevator-3a561.appspot.com",
    messagingSenderId: "469815765021",
    appId: "1:469815765021:web:f18d43deb2c8ac1b2cfef4"
};
// Initialize Firebaseddd
firebase.initializeApp(firebaseConfig);

//elevator queue logic
let buttons = document.querySelectorAll(".handle button");
let display = document.querySelector(".display");
let currentFloor = null;
let setFloor = null;
let floors = [0, 1, 2];
let ismoving = false;
let destinyFloors = [];
let elevatorStatus = 'idle';
let leavingFloor = false;



const floorVal = firebase.database().ref('elevatorData/floor/value');
    floorVal.on('value', (snapshot) => {
    console.log('Floor was changed !!');
    currentFloor = snapshot.val()
    console.log(currentFloor);
});



    function writeUserData(floorValue) {
        var databs = firebase.database().ref('elevatorData/floor');
        console.log("Converted value: ",parseInt(floorValue));
        databs.set({ value: parseInt(floorValue)})
        .then(function() {
          status = 'DONE'; 
        })
        .catch(function(error) {
          console.log('Synchronization failed');
        });}


const scene = new THREE.Scene();
//scene.add(new THREE.AxesHelper(5));
scene.background = new THREE.Color(0xffffff);

const light = new THREE.HemisphereLight(0xffffbb, 0x080820, 1);
scene.add(light);
const light2 = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(2, 2, 5);
scene.add(light2);
const light3 = new THREE.AmbientLight(0x404040); // soft white light
scene.add(light3);

const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.y = 3;
camera.position.z = 5;
camera.position.x = 3;

camera.lookAt(scene.position);
scene.add(camera);


const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById("threejs").appendChild(renderer.domElement);

const controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;

const bucketLoader = new THREE.GLTFLoader();

bucketLoader.load('../assets/3d/bucket.glb', function (gltf) {

    bucketRoot = gltf.scene;
    console.log(bucketRoot);
    bucketRoot.scale.set(0.005, 0.005, 0.005);
    bucketRoot.position.set(0.52, 0, 0.5);
    scene.add(bucketRoot);

}, function (xhr) {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');

}, function (error) {

    console.log(error);

});

const frameLoader = new THREE.GLTFLoader();

frameLoader.load('../assets/3d/frame.glb', function (gltf) {

    frameRoot = gltf.scene;
    frameRoot.scale.set(0.003, 0.003, 0.003);
    scene.add(frameRoot);

}, function (xhr) {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');

}, function (error) {

    console.log(error);

});

const motorLoader = new THREE.GLTFLoader();

motorLoader.load('../assets/3d/motor.glb', function (gltf) {

    motorRoot = gltf.scene;
    console.log(motorRoot);
    motorRoot.scale.set(0.005, 0.005, 0.005);
    motorRoot.position.set(0.8, 2.62, 0.94);
    motorRoot.rotation.y = 1.58;
    scene.add(motorRoot);

}, function (xhr) {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');

}, function (error) {

    console.log(error);

});

const buttonLoader = new THREE.GLTFLoader();
buttonLoader.load('../assets/3d/button.glb', function (gltf) {
    buttonRoot = gltf.scene;
    buttonRoot.scale.set(0.03, 0.03, 0.03);
    buttonRoot.position.set(0.2, 2.8, 1.1);
    scene.add(buttonRoot);

}, function (xhr) {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');

}, function (error) {

    console.log(error);

});


window.addEventListener('resize', onWindowResize, false);
function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    render();
}
function animate() {
    requestAnimationFrame(animate);
    controls.update();
    console.log(bucketRoot.position.y);
    if (currentFloor === 2) {
        display.innerHTML = "Second Floor";
        if (bucketRoot.position.y !== 1.8400000000000014) {
            if (bucketRoot.position.y < 1.85) {
                bucketRoot.position.y += 0.01;
            } else {
                bucketRoot.position.y -= 0.01;
            }
        }
    }
    else if (currentFloor === 1) {
        display.innerHTML = "First Floor";
        if (bucketRoot.position.y !== 0.9000000000000006) {
            if (bucketRoot.position.y < 0.9) {
                bucketRoot.position.y += 0.01;
            } else {
                bucketRoot.position.y -= 0.01;
            }
        }
    }
    //-8.673617379884035e-17
    //0.009999999999999913
    else if (currentFloor == 0) {
        display.innerHTML = "Ground Floor";
        if (bucketRoot.position.y !== 0.009999999999999913 && bucketRoot.position.y !== -8.673617379884035e-17) {
            if (bucketRoot.position.y > 0) {
                bucketRoot.position.y -= 0.01;
            }
            else {
                bucketRoot.position.y += 0.01;
            }
        }
    }
    render();
}
function render() {
    renderer.render(scene, camera);
}

buttons.forEach(button => {
button.addEventListener("click", function () {
    let setFloor = this.getAttribute("data-set-floor");
    writeUserData(setFloor);
    });
});

 $(document).ready( function(){
    animate();
 });
 
 </script>
  
  </body>
</html>