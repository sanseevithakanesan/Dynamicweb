<?php
$host="localhost";
$user="root";
$password="";
$db="learn";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
  die("connection error");
}
if(isset($_POST['button'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  if($username=="admin" && $password=="admin123"){
    header("location:viewpage.php");
  }
  else{
 
    echo '<div class= "col-md-12">
    <div class="alert alert-danger" role="alert">Username or Password Error!</div>
    </div>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
          <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">E-LEARN</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#Details">Details</a></li>
        <li><a href="#contact">Contactus</a></li>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
</nav>
<div class="container"  style="margin:70px;">
    <div class="row">
      <div class="col-md-12">
            <h3> <i class=" fa fa-list-ul " style="font-size:2rem;"> </i>DASHBOARD</h3><hr>
      </div>
     <div class="col-md-3">
      <div class="form">
          <ul class="nav flex-column">
            <div class="nav-item">
              <li class="nav-item" >
                  <h4><a class="nav-link active" href="http://localhost/Dynamicweb/index.php"> <i class="fa fa-house-user"> </i>  Home</a><br><br></h4>
              </li><hr>
              <li class="nav-item" >
                     <h4><a class="nav-link active" href="http://localhost/Dynamicweb/Dashboard.php"> <i class="fa  fa-user-shield"> </i> Admin Users</a><br><br></h4>
              </li><hr>
              <li class="nav-item" >
                     <h4><a class="nav-link active" href="http://localhost/Dynamicweb/teacherlogin.php"> <i class="fa   fa-user"> </i> Teachers </a><br><br></h4>
              </li><hr>
              <li class="nav-item" >
                     <h4><a class="nav-link active" href="http://localhost/Dynamicweb/studentlogin.php"> <i class="fa   fa-child"> </i> Add Student </a><br><br></h4>
              </li><hr>
              <li class="nav-item" >
                     <h4><a class="nav-link active" href="http://localhost/Dynamicweb/Books.php"> <i class="fa fa-book-open"></i> Books Details </a><br><br></h4>
              </li><hr>
              <li class="nav-item" >
                     <h4><a class="nav-link active" href="http://localhost/Dynamicweb/ourpage.php"> <i class="fa   fa-feather"> </i> Our page </a><br><br></h4>
              </li><hr>
       </div>
       </ul>
       </div>
       </div>
<div class="col-md-5">
    <h1> <i class="fa  fa-user-shield"> </i> ADMIN </h1>
        <img src="img/avatar.png"  alt="" style="width:120px; height:100px;">
           <form action="" method="POST">
          <div class="form-group">
        <label for="name" name="username" class="control-label">Username:</label><br>
      <input type="text" name="username" class="form-control"> 
    </div>
 <div class="form-group">
      <label for="name" name="password" class="control-label">Password:</label><br>
    <input type="password" name="password" class="form-control"> 
</div>
<div class="col-md-4">
      <button type="submit" name="button" class="btn btn-primary">submit</button><br><br>
</div>
</div>

<div class="col-md-4">
    <img src="img/graduation1.png" alt="" style="width:300px; height:200px;">
</div>

<div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/index.php#">Left</a></button>
</div>

<div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/Dashboard.php">Middle</a></button>
</div>

<div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/teacherlogin.php">Right</a></button>
</div>

<h4 style="font-family:cursive;">
     E-learning is a structured course or learning experience delivered electronically; it can also include performance support content. ... It helps organizations manage training events, self-paced courses, and blended learning programs.</h4>
</div> <br>

</form>
</div>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>