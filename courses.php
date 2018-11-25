<!DOCTYPE html>
	<html lang="en">
  	<head>
   	<meta charset="utf-8">
    <title>Courses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">    
  </head>
  
  <body>
    <?php
    $servername ="localhost";
    $username = "rashresta";
    $password = "7uAhWd";

    $conn = mysqli_connect('clamv', 'rashresta', '7uAhWd');

    if (!$conn){
      die("Connection failed: .mysqli_connect_error()");
    }
    echo "Connected successfully";
    ?>
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
                <a class="nav-link page-scroll" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="students.html">Students</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="courses.html">Courses</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="instructors.html">Instructors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#Discussion">Discussion</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#help">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="imprint.html">Imprint</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Courses Input Form </h2>
              <form action="/action_page.php">
              Course Name:<br>
              <input type="text" name="coursename"><br>
              Course Location:<br>
              <input type="text" name="courselocation"><br>
              Department:<br>
              <input type="text" name="department"><br>
              <br> 
              <input type="submit" value="Submit">
            </form>
            <?php
            if ($_POST && isset($_POST['course_id']))
            {
              $db = new \PDO('clamv', 'rashrestha', '7uAhWd');
              $stmt = $db->prepare("INSERT INTO table (course_id) VALUES (?)");
              $result = $stmt->execute(array($_POST['course_id']));

              echo $result->rowCount() ? 'Student saved in db' : 'Unknown error occured';
            }
            ?>
            </div>
          </div>  
          <div class="col-lg-5 col-md-12 col-xs-12">
      


            </div>            
          </div>
  
       
      </div>             
    </header>
    <!-- Header Section End --> 
  </body>
</html>
