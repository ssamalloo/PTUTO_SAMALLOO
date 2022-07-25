<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'accounts');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //the two passwords are equal to each other
  if ($_POST['password'] == $_POST['confirmpassword']) {

      $username = $mysqli->real_escape_string($_POST['username']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $department = $mysqli->real_escape_string($_POST['department']);
      $year = $mysqli->real_escape_string($_POST['year']);
      $password = md5($_POST['password']); //md5 hash password for security purposes
      $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

      //make sure file type is image
      if (preg_match("!image!", $_FILES['avatar']['type'])) {

        //copy image to images/ folder
        if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) {

            $_SESSION['username'] = $username;
            $_SESSION['avatar'] = $avatar_path;

            $sql = "INSERT INTO users (username, email, department, year, password, avatar)" . "VALUES ('$username', '$email', '$department', '$year', '$password', '$avatar_path')";

            //if the query is successful, redirect to welcome.php page, done!
            if ($mysqli->query($sql) === true) {
              $_SESSION['message'] = "Registration successful ! Added $username to the database !";
              header("location: welcome.php");
            }
            else {
                $_SESSION['message'] = "User could not be added to the database !";
            }
        }
        else {
            $_SESSION['message'] = "File upload failed !";
        }

      }
      else {
          $_SESSION['message'] = "Please upload only GIF, JPG or PNG images !";
      }
  }
  else {
      $_SESSION['message'] = "Passwords do not match !";
  }
}

?>

<html>
<head>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/style1.css" type="text/css">
<title>Grocery Store Registration Form</title>
</head>

<body background="bg1.png">
<header>
        <link rel="stylesheet" type="text/css" href="header.css">
        <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#opening-hours">Opening Hours</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="185"></a>
</header>

<div class="body-content">
  
  <center class="title_deg">
  <img src="images/d0.png" width="80">
  <h1>Create An Account</h1>
  </center>

  <div class="module">
    <form class="form" action="registration.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Username" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Department" name="department" required />
      <input type="text" placeholder="Year" name="year" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Please Choose a Profile Picture :</label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block" />
    </form>
  </div>
</div>

<footer class="footer">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <div class="footer-left">
            <div class="logo_footer">
                <center><span>Students'</span> Grocery Store</center>
            </div>
            <p>It's been always a pleasure to serve our UdMers !</p>
        </div>
        <ul class="footer-right">
            <section id="categories">
            <li>
                <h3>Categories</h3>
                <ul class="box">
                    <li><a href="#">Fish & Meat</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Spices</a></li>
                    <li><a href="#">Dairy Products</a></li>
                    <li><a href="#">Dry Grains</a></li>
                    <li><a href="#">Nuts</a></li>   
                </ul>
            </li>
            </section>
            <section id="opening-hours">
            <li class="features">
                <h3>Opening Hours</h3>
                <ul class="box">
                    <li><a href="#">Mon - Fri: 8am - 6pm</a></li>
                    <li><a href="#">Saturday: 8am - 4pm</a></li>
                    <li><a href="#">Sunday: 8am - 1pm</a></li>
                </ul>
            </li>
            </section>
            <section id="contact">
            <li>
                <h3>Contact</h3>
                <ul class="box">
                    <li><a href="#">Phone: +230 294 0000</a></li>
                    <li><a href="#">Email: sgstore@udm.ac.mu</a></li>
                </ul>
            </li>
            </section>
        </ul>
        <div class="footer-bottom">
            <p>All rights reserved by &copy;UdM 2022</p>
        </div>
</footer>
</body>
</html>
