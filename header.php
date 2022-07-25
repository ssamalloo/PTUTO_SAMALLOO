<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add to Cart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: 500">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="studenthome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#popular-product">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#popular-bundle-pack">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#opening-hours">Opening Hours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
      <div>
        <?php
        $count=0;
        if (isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
      	<a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="225"></a>
      </div>
    </div>
  </div>
</nav>

</body>
</html>