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
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:70px;">
            <h2>WELCOME TEACHERS PAGE</h2></hr><br><br><br>
        </div>
<div class="col-md-4">
      <form action="" method="POST">
        <div class="form-group">
          <label for="studentid" name="studentid" class="control-label">Enter your Teacherid:</label><br>
          <input type="text" name="teacherid" class="form-control"><br>
    </div>
<div class="form-group">
              <label for="name" name="name" class="control-label">Enter your TeacherName:</label><br>
              <input type="text" name="name" class="form-control"><br>
</div>
    <button type="submit" name="button" class="btn btn-primary">submit</button>   
    <button type="submit" name="button" class="btn btn-success"><a href="Dashboard.php" style="color:white">Home</a></button><br><br><br><br>
    <div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/teacherlogin.php">Left</a></button>
    </div>
    <div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/Dashboard.php">Middle</a></button>
    </div>
    <div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/studentlogin.php">Right</a></button>
    </div>
<?php
      include_once "dbconnection.php";
      session_start();
      if(isset($_POST['button'])){
      $Teacherid = $_POST['teacherid'];
      $Teachername = $_POST['name'];
      if(empty($Teacherid)||empty($Teachername)){
                    echo '<div class="col-md- 4">
                           <div class="alert alert-danger" role="alert">fill in all fields !</div>
                         </div>';
      }
      else{
            $sql = "SELECT * FROM teacherlogin WHERE teacherid='$Teacherid' AND teachername='$Teachername'";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0){
            $row = mysqli_fetch_assoc($result);
            header("location:teachers.php");
          }
      else{
                    echo '<div class="alert alert-danger" role="alert">Name OR id Wrong!</div>';
          }
      }

    }
?>
</div>
</form>
<div class="col-md-3">
</div>
<div class="col-md-4">
<img src="img/teach1.png" alt="" style="width:500px; height:450px;">
</div>
</div>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>