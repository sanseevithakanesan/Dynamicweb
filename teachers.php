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
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:70px;">
        <h3><i class="fa fa-user"></i> TEACHERS DETAILS</h3><hr>
        <form action="" method="POST">
        <img src="img/avatar.png"  alt="" style="width:120px; height:100px;">
        </div>
        <div class="col-md-6">
        <div class="form-group">

          <label for="name" name="username" class="control-label">Teachername:</label><br>
            <input type="text" name="teachername" class="form-control"> 
          </div>

          <div class="form-group">
          <label for="name" name="username" class="control-label">Subjectname:</label><br>
            <input type="text" name="subname" class="form-control"> 
          </div>

          <div class="form-group">
          <label for="name" name="username" class="control-label">Hours:</label><br>
            <input type="text" name="hours" class="form-control"> 
          </div>

          <div class="col-md-4">
             <button type="submit" name="button" class="btn btn-primary"> submit</button>
             <button type="submit" name="update" class="btn btn-success">Update</button>
          </div><br><br>
<?php

//=========================================function

if(isset($_POST['update'])){
  $Teachername = $_POST['teachername'];
  $Subjectname =$_POST['subname'];
  $Hours = $_POST['hours'];
  $ID = $_GET['id'];
  error_reporting(0);

  $connection= new mysqli('localhost','root','','learn');


  $sql = "UPDATE teachers SET teachername  = '$Teachername',subjectname ='$Subjectname',hourss = '$Hours' WHERE id = '$ID'";

  if($connection->query($sql)){

    echo   '<div class="col-md-6">

              <div class="alert alert-success" role="alert">update sucess full!</div>

             </div>';


  }else{

      echo "update fail<br>";
      
  }

}
if(isset($_POST['button'])){

  $Teachername =$_POST['teachername'];

  $Subjectname =$_POST['subname'];

  $Hours =$_POST['hours'];


  function Emptycheck($teachername,$subname,$hours){

    if(empty($teachername)||empty($subname)||empty($hours)){

      $result =true;

    }

    else{

      $result=false;

    }

    return $result;

  }


  function invalidusername($teachername){

    $pattern ="/^[a-zA-Z0-9]*$/";

    if(!preg_match($pattern,$teachername)){

         $result =true;

    }else{

         $result=false;

    }

    return $result;

  }
  //===========================================checking
  if(Emptycheck($Teachername,$Subjectname,$Hours)!==false){

    echo '<div class= "col-md-6">
  
            <div class="alert alert-danger" role="alert">fill in all fields</div>
  
          </div>';
  
  }
  else if(invalidusername($Teachername)){
    echo '<div class= "col-md-6">
  
            <div class="alert alert-danger" role="alert">invalid Teachername!</div>
  
          </div>';
  
  }
  else{
    error_reporting(0);
  
    $connection =new mysqli('localhost','root','','learn');
  
    if($connection->connect_errno){
  
    echo $connection->connect_error;
  
    die();
  
    }
  
    else{
       $sql ="INSERT INTO teachers(teachername,subjectname,hourss)VALUES('$Teachername','$Subjectname','$Hours')";
  
       if($connection->query($sql))
       {
         echo '<div class="col-md-6">
  
                <div class="alert alert-success" role="alert">added successfully
  
               </div>';
  
       }
       else{
        echo '<div class="col-md-6">
  
                <div class="alert alert-success" role="alert">Database connected
  
               </div>';
  
       }
    }
  }
  
  }

?>
</div>
</form>
<div class="col-md-6">
<div class="btn-group" role="group">

<button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/Dashboard.php">Left</a></button>
 </div>

<div class="btn-group" role="group">
             <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/teachers.php">Middle</a></button>
 </div>

<div class="btn-group" role="group">
            <button type="update" class="btn btn-default"><a href="http://localhost/Dynamicweb/addstudent.php">Right</a></button>
</div>

<h4 style="font-family:cursive;">What is learning and its importance?
              Learning encourages the ability to do something efficiently with the help of available resources so that you can reach your goals. ... The importance of learning is that it helps the individual to acquire the necessary skills through learning and knowledge so that he can achieve his set goals.</h4>

<div class="col-md-4">
  <img src="img/teachers.png" class="img-responsive" alt="Responsive image">
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>