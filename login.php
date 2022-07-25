<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grocery Store Login Form</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<link rel="shortcut icon" href=""/>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="bg1.png" class="body_deg">

    <header>
        <link rel="stylesheet" type="text/css" href="header.css">
        <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#opening-hours">Opening Hours</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="registration.php">Register</a></li>
            </ul>
        </nav>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="185"></a>
    </header>

    <center>

    	<div class="form_deg">

    		<center class="title_deg">
    			Login Form

    			<h4>
    				<?php

    				error_reporting(0);
    				session_start();
    				session_destroy();

    				echo $_SESSION['loginMessage'];

    				?>
    			</h4>
    		</center>
    		
    		<form action="login_check.php" method="POST" class="login_form">
    			
    			<div>
    				<label class="label_deg">Username</label>
    				<input type="text" name="username" placeholder="Enter Username">
    			</div>

    			<div>
    				<label class="label_deg">Password</label>
    				<input type="password" name="password" placeholder="Enter Password">
    			</div>

    			<br/>

    			<div>	
    				<input class="btn" type="submit" name="submit" value="Login">
    			</div>

                <br>

                <div class="registration">
                    You wish to be a member of our Grocery Store ?<br>
                    <a href="registration.php">Click here to Register !</a>
                </div>
    		
    		</form>
    	
    	</div>
    
    </center>

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