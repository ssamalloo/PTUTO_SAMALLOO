<?php
    require("purchase.php");
    include("header2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<body>
 
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-12">
			<table class="table text-center">
			  <thead class="thead">
			    <tr>
			      <th scope="col">Order ID</th>
			      <th scope="col">Customer Name</th>
			      <th scope="col">Phone Number</th>
			      <th scope="col">Address</th>
			      <th scope="col">Orders</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	  $query="SELECT * FROM `order_manager`";
			  	  $user_result=mysqli_query($con,$query);
			  	  while ($user_fetch=mysqli_fetch_assoc($user_result))
			  	  {
			  	  	echo "
			  	  	<tr>
				      <td>$user_fetch[Order_Id]</td>
				      <td>$user_fetch[Full_Name]</td>
				      <td>$user_fetch[Phone_No]</td>
				      <td>$user_fetch[Address]</td>
				      <td>

				      <table class='table text-center'>
					  <thead>
					    <tr>
					      <th scope='col'>Item Name</th>
					      <th scope='col'>Price</th>
					      <th scope='col'>Quantity</th>
					    </tr>
					  </thead>
					  <tbody>
					  ";

					$order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
					$order_result=mysqli_query($con,$order_query);
					while ($order_fetch=mysqli_fetch_assoc($order_result))
					  {
					  	echo "
					  	  <tr>
					  	    <td>$order_fetch[Item_Name]</td>
					  	    <td>$order_fetch[Price]</td>
					  	    <td>$order_fetch[Quantity]</td>
					  	  </tr>
					  	";
					  }  

					echo"
					  </tbody>
					  </table>
				      </td>
				    </tr>
				    ";
			  	  }
			  	?>
		
			  </tbody>
			</table>
			</div>
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