<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
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


<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; ">
<h1 style="text-align: center; color: rgb(46, 110, 150); margin-top:40px;">ADMIN PAGE</h1>
<img src="back.webp" alt="logo" width="200px" >
</div>


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



$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);

if ($result) {

    echo '
<table class="table table-success table-striped table-bordered" style="margin-top: 50px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        ';


    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    <tbody>
            <tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['date'] . '</td>
            </tr>';
    }
    echo '
    </tbody>
</table>';
}
else {
    echo "There is An Error";
}



?>



</body>
</html>