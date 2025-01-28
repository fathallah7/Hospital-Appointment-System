  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Take Place</title>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#">Abdullah Hospital </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>




    <section >
<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="margin: 45px 0;">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; " >
                <img src="back.webp" alt="logo" width="50px" >
                <h2 class="text-uppercase text-center mb-5 " style="color: rgb(46, 110, 150);">Abdo Hospital</h2>
              </div>
            <form action="index.php" method="post">
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text"  class="form-control form-control-lg" placeholder="Enter Your Name" name="name"/>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <input type="email"  class="form-control form-control-lg" placeholder="Your Email" name="email"/>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <input type="date" class="form-control form-control-lg" placeholder="Date" name="date"/>
                </div>

                <div class="d-flex justify-content-center">
                <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body" name="send">Submit</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>



<?php

$host = 'localhost';
$user = 'abdullah';
$password = '1234';
$dbName = 'hospital';

$conn = mysqli_connect($host,$user,$password,$dbName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";


$pName = $_POST['name'];
$pEmail = $_POST['email'];
$pDate = $_POST['date'];
$pSend = $_POST['send'];

if ( isset($_POST['send']) && !empty($pName) && !empty($pEmail) && !empty($pDate) ) {
    $query = "INSERT INTO users(name,email,date) VALUE ('$pName','$pEmail','$pDate')";
    $result  = mysqli_query($conn , $query);
    echo '<div class="alert alert-success" role="alert">Done You Are Registered</div>';
}
else {
    echo '<div class="alert alert-danger" role="alert">There IS Error Enter All Information</div>';
}


?>



</body>
</html>