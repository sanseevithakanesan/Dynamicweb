<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
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
<header  style="background-image:url('img/girl.jpg');
                     background-position:center; 
                     height:100vh;
                     background-size:cover;"
                    >

<div  class = "container">
  <div class="row">
    <div class="col-md-6"></div>
<div class="col-md-6">
<br><br><br><br><br>  <h1 style="font-size:5rem;color:maroon;font-family:cursive;">Learning as it Should be</h1>
<h3 style="color:maroon;font-size:2.5rem;font-family:cursive;">Begin your learning journey-find your course</h3>
<h4 style="color:maroon;font-size:2.5rem;font-family:cursive;"> Free access to e-learning platforms from your home internet connection</h4><br>
    
<div class="col-md-2">
<a href="http://localhost/Dynamicweb/Dashboard.php" style="width:220px;border-radius:30px;font-family:cursive;"class="btn btn-danger btn-lg"><b> START LEARN NOW</b></a>
</div>
</div>   
</div>
</div>
</header>
<!-- -------------------------------------Details------------------------------------------------------------------ -->

<div id="Details" style ="background:url('img/girl2.jpg');
                        background-size:cover;
                        background-position:center; 
                        height:100vh;
                        background-repeat: no-repeat;">

<div style="text-align: center;" class="container">
     <h1 style="font-size:4rem;color:maroon; font-family:cursive;">OUR DETAILS</h1>
<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6" style="color:maroon;font-size:1.5rem;font-family:cursive;">
    <!-- <i class=" fa fa-group" style="font-size:4rem;"> </i><br> -->
     <b>our goal is to strengthen a student's sense of belonging during their journey to graduation Want to improve your study skills or habits?our tutors are all certified by the college Reading learning Association and tutor  in a variety of subject matters</b>
   
    <br> <br><br>
    <!-- <i class="fa fa-graduation-cap" style="font-size:4rem;"> </i -->
    <b>Online courses and degree programs are more convenient and cheaper than their counterparts in traditional education. Those are the two main advantages of online learning that lead many students to opt for online platforms when they want to earn a degree or certificate</b>
    </div>
    
  </div>
</div>
</div>
</div>

<!-- --------------------------------------contact------------------------------------------------->
<div id="contact" style="background: 
                            url('img/123.jpg');
                            height:100vh;
                            background-size:cover;
                            background-position:center center; 
                            background-repeat:no-repeat;">

<div class="container ">

    <div class="row  ">

        <div class="col-lg-12 text-center">

            <h2 style="color :maroon; font-size : 4rem;  font-family:cursive;">contact</h2>

            <hr>
<div class="form">

<form action="section/signup.php" method="post">
  <div class="row">
    <div class="form-group col-md-12">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="form-group col-md-12 ">
      <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
    </div>
    <div class="form-group col-md-12">
          <input type="text" name="phone_num" class="form-control" id="username" placeholder="Your Phone Number">
      </div>
    <div class="form-group col-md-12 ">
          <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
      </div>
  </div>
  <div class="cd-md-6"style="text-align: center;">
      <input type="submit" name="submit" class="btn btn-default "style="width: 200px;border-radius: 30px;" value="CONTACT US !">
  </div>
</form><br><br><br><br>
</div>

          
        </div>
    </div>
</div>
</div>

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
