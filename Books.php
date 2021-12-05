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
    <div class="row" >
<div class="col-md-12" style="margin-top:70px;">
<h3><i class="fa fa-book-open"></i> BOOKS DETAILS</h3><hr>
</div>
<div class="col-md-12">

<form action="" method="POST">
<div class="form-group">
  <label for="name" name="username" class="control-label">BookId:</label><br>
    <input type="text" name="BookId" class="form-control"> 
  </div>

  <div class="form-group">
  <label for="name" name="username" class="control-label">Bookname:</label><br>
    <input type="text" name="Bookname" class="form-control"> 
  </div>

  <div class="form-group">
  <label for="name" name="username" class="control-label">Book Author:</label><br>
    <input type="text" name="BookAuthor" class="form-control"> 
  </div>

  <div class="col-md-4">
    <button type="submit" name="button" class="btn btn-primary"> submit</button>
    <button type="submit" name="update" class="btn btn-success">update</button>
  </div> 
</form><br><br>

<?php
if(isset($_POST['update'])){
  $BookId=$_POST['BookId'];
  $Bookname =$_POST['Bookname'];
  $BookAuthor =$_POST['BookAuthor'];
  $ID = $_GET['id'];
  error_reporting(0);

  $connection= new mysqli('localhost','root','','learn');


  $sql = "UPDATE  bookss SET bookid = '$BookId',bookname ='$Bookname',bookauthor='$BookAuthor' WHERE id = '$ID'";

  if($connection->query($sql)){

    echo   '<div class="col-md-12">

              <div class="alert alert-success" role="alert">update sucess full!</div>

             </div>';
  }else{

      echo "update fail<br>";
      
  }

}
if(isset($_POST['button'])){
  $BookId=$_POST['BookId'];
  $Bookname =$_POST['Bookname'];
  $BookAuthor =$_POST['BookAuthor'];

  //=================================function
  function Emptycheck($bookid,$bookname,$bookauthor){

    if(empty($bookid)||empty($bookname)||empty($bookauthor)){

      $result =true;

    }else{

    $result =false;

    }

    return $result;

  }

  function invalidusername($bookname){

  $pattern ="/^[a-zA-Z0-9]*$/";
        
  if(!preg_match($pattern,$bookname)){
        
        $result =true;
        
  }else{
        
       $result=false;
        
   }
        
   return $result;
        
}

//=====================================checking
if(Emptycheck( $BookId,$Bookname,$BookAuthor)!==false){
echo '<div class= "col-md-12">
  
        <div class="alert alert-danger" role="alert">fill in all fields</div>
  
      </div>';
}

else if(invalidusername($Bookname)){
      echo '<div class= "col-md-12">
          
        <div class="alert alert-danger" role="alert">invalid Bookname!</div>
          
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
    $sql ="INSERT INTO bookss(bookid,bookname,bookauthor)VALUES('$BookId','$Bookname','$BookAuthor')";
          
    if($connection->query($sql))
    {
      echo '<div class="col-md-4">
          
            <div class="alert alert-success" role="alert">added successfully
          
            </div>';
          
    }
else{
    echo '<div class="col-md-4">
          
            <div class="alert alert-success" role="alert">Database connected
          
            </div>';
          
    }
}
}
}
?>
</div>
<div class="col-md-4">
    <img src="img/bookss.png" alt="" style="height:350px;width:280px;">
</div>

<div class="col-md-4">
    <h4 style="font-family:cursive;">Reading is important because it develops our thoughts, gives us endless knowledge and lessons while keeping our minds active. Books can hold and keep all kinds of information, stories, thoughts and feelings unlike anything else in this world</h4>
 <div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/addstudent.php">Left</a></button>
 </div>

 <div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/Books.php">Middle</a></button>
 </div>
 
 <div class="btn-group" role="group">
      <button type="button" class="btn btn-default"><a href="http://localhost/Dynamicweb/ourpage.php">Right</a></button>
 </div><br><br><br><br>
</div>
</div>
</div>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>