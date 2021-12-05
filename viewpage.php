
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
    <style>
    </style>
    
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
      <a class="navbar-brand" href="#">LEARN</a>
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
      <a href="http://localhost/Dynamicweb/index.php" aria-label="Previous">previous
      </a>
    </li>
    <li><a href="viewteachersdetails.php">1</a></li>
    <li><a href="viewstudentdetails.php">2</a></li>
    <li><a href="viewbookdetails.php">3</a></li>

    <li>
      <a href="#" aria-label="Next">Next
      </a>
    </li>
  </ul>
</nav>

</div>
<div class="col-md-3" >
</div>
<div class="col-md-6">
  <h1> <i class="fa fa-eye"> </i> View your details</h1><br>
  <img src="mysql2.png" alt="" width="300px" height="250px">
  <h4 style="font-family:cursive;">The best way to secure data in use is to restrict access by user role, limiting system access to only those who need it. Even better would be to get more granular and restrict access to the data itself.</h4><br>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>