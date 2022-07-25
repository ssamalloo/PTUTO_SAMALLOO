<?php

@include 'conn.php';

session_start();

	if (!isset($_SESSION['username'])) 
	{
		header("location:login.php");
	}

	elseif($_SESSION['usertype']=='student')
	{

		header("location:login.php");
		
	}

	elseif($_SESSION['usertype']=='grocer')
	{

		header("location:login.php");
		
	}

	if (isset($_POST['add_product'])) {
		
		$product_code = $_POST['product_code'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_quantity = $_POST['product_quantity'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
		$product_image_folder = 'uploaded_img/'.$product_image;

		if (empty($product_name) || empty($product_price) || empty($product_image)) {
			$message[] = 'Please fill out all !';
			}else{
				$insert = "INSERT INTO articles(Article_code, Article_designation, Article_PUHT, Article_Qte, image) VALUES('$product_code', '$product_name', '$product_price', '$product_quantity', '$product_image')";
				$upload = mysqli_query($conn,$insert);
				if($upload){
					move_uploaded_file($product_image_tmp_name, $product_image_folder);
					$message[] = 'New product added successfully !';
				}else{
					$message[] = 'Could not add the product :(';
				}
			}
	};

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE FROM articles WHERE Article_code LIKE '%$id%'");
		header('location:admin_page.php');
	};

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style0.css">

</head>
<body>

<?php

if (isset($message)) {
	foreach ($message as $message) {
		echo '<span class="message">'.$message.'</span>';
	}
}

?>

<header>
        <link rel="stylesheet" type="text/css" href="header.css">
        <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#opening-hours">Opening Hours</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="185"></a>
</header>

<div class="container">

	<div class="admin-product-form-container">

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			<h3>add a new product</h3>
			<input type="text" placeholder="Enter product code" name="product_code" class="box">
			<input type="text" placeholder="Enter product name" name="product_name" class="box">
			<input type="number" placeholder="Enter product price" name="product_price" class="box">
			<input type="number" placeholder="Enter product quantity" name="product_quantity" class="box">
			<input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
			<input type="submit" name="add_product" class="btn" value="add product">
		</form>
		
	</div>

	<?php

	$select = mysqli_query($conn, "SELECT * FROM articles");

	?>

	<div class="product-display">

		<table class="product-display-table">

			<thead>
			<tr>
				<th>product image</th>
				<th>product name</th>
				<th>product price</th>
				<th>action</th>
			</tr>
			</thead>

			<?php

				while ($row = mysqli_fetch_assoc($select)) {

			?>

			<tr>
				<td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
				<td><?php echo $row['Article_designation']; ?></td>
				<td><?php echo $row['Article_PUHT']; ?></td>
				<td>
					<a href="admin_update.php?edit=<?php echo $row['Article_code']; ?>" class="btn"><i class="fas fa-edit"></i> edit </a>
					<a href="admin_page.php?delete=<?php echo $row['Article_code']; ?>" class="btn"><i class="fas fa-trash"></i> delete </a>
				</td>
			</tr>

		<?php }; ?>

		</table>
		
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
                <h3 style="font-weight: normal;">Categories</h3>
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
                <h3 style="font-weight: normal;">Opening Hours</h3>
                <ul class="box">
                    <li><a href="#">Mon - Fri: 8am - 6pm</a></li>
                    <li><a href="#">Saturday: 8am - 4pm</a></li>
                    <li><a href="#">Sunday: 8am - 1pm</a></li>
                </ul>
            </li>
            </section>
            <section id="contact">
            <li>
                <h3 style="font-weight: normal;">Contact</h3>
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