<html>
<head>
    <title>Welcome Page</title>
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

<link rel="stylesheet" type="text/css" href="css/style1.css">


<?php session_start(); ?>
<form method="post" action=index.html>
<div class="body content">
	<div class="welcome">
		<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
		<span class="user"><img src='<?= $_SESSION['avatar'] ?>' width="200"></span><br>
		<h2>Welcome <span class="user"><?= $_SESSION['username'] ?></span> !</h2><br>
		<h3>We shall analyse your profile and revert back to you very soon !</h3><br>
		<h4>We thank you for your patience :)</h4>
		<input class="btn1" type="submit" name="submit" value="Back to Homepage !">
	</div>
</div>
</form>


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
