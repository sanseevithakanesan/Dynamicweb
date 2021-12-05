<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <a class="navbar-brand" href="#">GENIUS</a>
    </div>

  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    </div>
  </div>
</nav>

<div class="container" style="margin-top:60px" >
<div class="row">

<div class="col-md-12">
  <h4><b style= "color:black"> <i class="glyphicon glyphicon-list" > </i>  Dashboard</b></h2><hr>
</div>

<div class="col-md-3" >
<ul class="nav flex-column" >

  
<li class="nav-item">
    <a class="nav-link" href="viewteachersdetails.php"><i class="fa fa-users"> </i>  view Teacher details</a><br>
  </li><hr>
  <li class="nav-item">
    <a class="nav-link" href="viewstudentdetails.php">  <i class="fa fa-user"> </i> View Students Details</a><br>
  </li><hr>
  <li class="nav-item">
    <a class="nav-link disabled" href="viewbookdetails.php"> <i class="fa fa-book"> </i> View  Books Details</a><br>
  </li><hr>
  <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="viewteachersdetails.php">1</a></li>
    <li><a href="viewstudentdetails.php">2</a></li>
    <li><a href="viewbookdetails.php">3</a></li>

    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</ul>
</div>
<div class="col-md-3" >
    <form action="viewstudentdetails.php" method="post">
      <button type="submit" class=" btn btn-primary" name="view">View student details</button><br><br>
    </form>
</div>
<div class="col-md-6">
  <form action="viewstudentdetails.php" method="POST">
    <div class="input-group">
      <input type="text" class="form-control" name="search" placeholder="Enter Your Name...">
      <span class="input-group-btn">
        <button class="btn btn-default"  name="BtnSearch">Go!</button>
      </span>
    </div>
    </form>
  </div>

<?php
include_once('viewcrudclass.php');
if(isset($_POST['view'])){
     
   $userobj = new Dbaction();
   $userobj->viewstudent(); 
 }

if(isset($_GET['id'])){

  $id=$_GET['id'];
  $userobj = new Dbaction();
  if( $userobj->deletestudents($id)==true){
      echo "delete success full";

  }
}
if(isset($_POST['BtnSearch'])){
  $Name=$_POST['search'];
  $userobj = new Dbaction();
  $userobj->searchstudent($Name);
  
}
?>
</div>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>