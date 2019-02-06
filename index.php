<!DOCTYPE html>
	<html lang="en">
  	<head>
   	<meta charset="utf-8">
    <title>J-Rater</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <style> .error {color: #FF0000</style>
  
  <?php

    $servername ="wry";
    $username = "rashrestha";
    $password = "YsSAm5Aa";

    $conn = mysqli_connect('wry', 'rashrestha', 'YsSAm5Aa');

    if (!$conn){
      die("Connection failed: .mysqli_connect_error()");
    }
    echo "Connected successfully";
    
  $emailerr = $passworderr = "";
  $email = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
      $emailerr = "Email is required";}
    else{
        $email = test_input($_POST["email"])
      }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format"; 
    }

    if (empty($_POST["password"])){
      $passworderr = "Password is required";}
      else{
        $password = test_input($_POST["password"]) 
        filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array "/.{6,25}/"))
      }
    }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  ?>

  <body>
    <!-- Header section starts -->
    <header id="home" class="home-area">    
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#students">Students</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#courses">Courses</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#instructors">Instructors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#Discussion">Discussion</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#help">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Imprint.html">Imprint</a>
              </li>  
            </ul>
          </div>
        </div>

      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Student Rating Service for<br>Courses and Instructors. </h2>
              <p>Rate courses, instructors and group members and provide comprehensive feedback for a better working environment!</p>
              <p> Voted #1 rating service by Cosmopolitan Magazine. </p>
              <div class="header-button">
                <a href="#" class="btn btn-border-filled">Learn More</a>
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>	
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="login-box">
              <div class="wrapper">
      			    <form method="post" action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]);?>" class="form-signin">       
      			      <h2 class="form-signin-heading">Log in</h2>
      			      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus=""  value=<?php echo $email;?>>
                  <span class="error">* <?php echo $emailerr;?></span>
      			      <input type="password" class="form-control" name="password" value="<?php echo $password;?>" placeholder="Password" required=""/> 
                  <span class="error"> <?php echo $passworderr;?> </span>     
      			      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
      			    </form>
      			   </div>
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 
  </body>
</html>
