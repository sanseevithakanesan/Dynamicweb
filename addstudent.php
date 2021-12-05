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

<div class="container" style="margin:70px;">
  <div class="row">
      <div class="col-md-6">
         <h3> <i class="fa fa-child" style="font-size:2.5rem;"> </i>ADD STUDENT</h3><hr>
            <form action="" method="POST">
         <img src="img/avatar.png"  alt="" style="width:120px; height:100px;">
     <div class="form-group">
     <label for="name" name="username" class="control-label">Firstname:</label><br>
             <input type="text" name="firstname" class="form-control"> 
     </div>

<div class="form-group">
       <label for="name" name="eamil" class="control-label">Lastname:</label><br>
       <input type="text" name="lastname" class="form-control"> 
</div>

<div class="form-group">
        <label for="name" name="password" class="control-label">Subjectname:</label><br>
        <input type="text" name="subjectname" class="form-control"> 
</div>

<div class="col-md-4">
      <button type="submit" name="button" class="btn btn-primary">submit</button>
      <button type="submit" name="update" class="btn btn-success"> update</button>
</div>
</div>

<div class="col-md-6">
          <img src="img/graduation2.png" alt="" style="width:600px; height:300px;"><br><br>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
<div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/teachers.php">Left</a></button>
</div>

<div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/addstudent.php">Middle</a></button>
</div>

<div class="btn-group" role="group">
       <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/Books.php">Right</a></button>
</div>
 </div>
 
    <h1 style="font-family:cursive;"> LEARN NOW</h1><br>
    <h4 style="font-family:cursive;">Online learning is a method of education whereby students learn in a fully virtual environment. ... Online learning refers to an internet-based learning environment that can connect students of diverse backgrounds who boast different perspectives.</h4>
 </div>
</form>

<?php
if(isset($_POST['update'])){
  $Firstname =$_POST['firstname'];
  $Lastname =$_POST['lastname'];
  $Subjectname =$_POST['subjectname'];
  $ID = $_GET['id'];
  error_reporting(0);

  $connection= new mysqli('localhost','root','','learn');
  $sql = "UPDATE student SET firstname = '  $Firstname ',lastname =' $Lastname',subjectname = '$Subjectname' WHERE id = '$ID'";
  if($connection->query($sql)){

    echo   '<div class="col-md-6">

              <div class="alert alert-success" role="alert">update sucess full!</div>

             </div>';
  }else{

      echo "update fail<br>";
      
  }

}
  if(isset($_POST['button'])){
  $Firstname =$_POST['firstname'];
  $Lastname =$_POST['lastname'];
  $Subjectname =$_POST['subjectname'];
//=================================function
  function Emptycheck($firstname,$lastname,$subjectname){
    if(empty($firstname)||empty($lastname)||empty($subjectname)){
     $result =true;
    }else{
    $result =false;
    }
   return $result;
  }

  function invalidusername($firstname){

  $pattern ="/^[a-zA-Z0-9]*$/";
        
  if(!preg_match($pattern,$firstname)){
        
        $result =true;
        
  }else{
        
        $result=false;
        
  }
        
  return $result;
        
}

  //=====================================checking
  if(Emptycheck($Firstname,$Lastname,$Subjectname)!==false){
  echo '<div class= "col-md-6">
  
  <div class="alert alert-danger" role="alert">fill in all fields</div>
  
</div>';
  }

  else if(invalidusername($Firstname)){
  echo '<div class= "col-md-6">
          
          <div class="alert alert-danger" role="alert">invalid Firstname!</div>
          
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
    $sql ="INSERT INTO student(firstname,lastname,subjectname)VALUES('$Firstname','$Lastname','$Subjectname')";
          
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
 </div>
</div>

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>