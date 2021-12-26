<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Subhankar Raja | web Devoloper</title>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>


<body>
    <!-- Header -->
    <header id="header-inner">
        <div class="container">
            <nav id="main-nav">
                <img src="img/logo.png" alt="My Portfolio" id="logo" />
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="work.php">Work</a></li>
                    <li><a href="contact.php" class="current">Contact</a></li>
    
                    <li><a href=""><h6 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h6></a></li>
                    <li><a href="sl.php">signup/login</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <footer id="main-footer">
        <div class="footer-content container">
            <p>Copyright &copy; 2021. All Rights Reserved</p>
            <div class="social">
                <li><a href="https://twitter.com/raja_subhankar?s=09"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/rupok.raja.927"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/subhankar_raja_1/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/subhankar-raja-39b72a192/"><i class="fab fa-linkedin"></i></a></li>
            </div>
        </div>
    </footer>
</body>
</html>