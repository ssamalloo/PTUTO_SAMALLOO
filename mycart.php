<?php include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>

	<link rel="stylesheet" type="text/css" href="css/accounts.css"/>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded my-5" style="background-color: #cfd8dc; padding-top: 5px;">
				<h1>MY CART</h1>
			</div>

			<div class="col-lg-9">
				
				<table class="table">
				  <thead class="text-center">
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Product Name</th>
				      <th scope="col">Product Price</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Total</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  	<?php
				  		if (isset($_SESSION['cart']))
				  		{
					  	    foreach ($_SESSION['cart'] as $key => $value)
					  	    {
					  	    	$sr=$key+1;
					  	    	echo "
					  	    	  <tr>
					  	    	    <td>$sr</td>
					  	    	    <td>$value[Item_Name]</td>
					  	    	    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
					  	    	    <td>
					  	    	      <form action='manage_cart.php' method='POST'>
					  	    	    	<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='5'>
					  	    	    	<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
					  	    	      </form>
					  	    	    </td>
					  	    	    <td class='itotal'></td>
					  	    	    <td>
					  	    	    	<form action='manage_cart.php' method='POST'>
					  	    	    		<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
					  	    	    		<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
					  	    	    	</form>
					  	    	    </td>
					  	    	  </tr>
					  	    	";
					  	    }
				  		}
				  	?>
				  </tbody>
				</table>

			</div>

			<div class="col-lg-3">
				<div class="border rounded p-4" style="background-color: #cfd8dc">
					<h4>Grand Total :</h4>
					<h4 class="text-right" id="gtotal"></h4>
					<br>
					<?php
					  if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
					  {
					?>
					<form action="purchase.php" method="POST">
					    <div class="form-group">
    						<label>Full Name</label>
    						<input type="text" name="full_name" class="form-control" required>
  					    </div>
  					    <div class="form-group">
    						<label>Phone Number</label>
    						<input type="number" name="phone_no" class="form-control" required>
  					    </div>
  					    <div class="form-group">
    						<label>Address</label>
    						<input type="text" name="address" class="form-control" required>
  					    </div>
  					    <br>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Cash on Delivery
						  </label>
						</div>
						<br>
						<button class="btn btn-success" name="purchase">Place Order</button>
					</form>
					<?php
					  }
					?>
				</div>
			</div>

		</div>
	</div>

<script>
	
	var gt=0;
	var iprice=document.getElementsByClassName('iprice');
	var iquantity=document.getElementsByClassName('iquantity');
	var itotal=document.getElementsByClassName('itotal');
	var gtotal=document.getElementById('gtotal');

	function subTotal()
	{
		gt=0;
		for(i=0;i<iprice.length;i++)
		{
			itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
			gt=gt+(iprice[i].value)*(iquantity[i].value);
		}
		gtotal.innerText=gt;
	}

	subTotal();

</script>

  	<!--==footer=========================-->
    <footer class="mt-5">
        <div class="footer-container">
            
            <!--logo-container------>
            <div class="footer-logo">
                <a href="#"><span>Students'</span> Grocery Store</a>
            </div>



            <!--links------------->
            <div class="footer-links">
                <strong>Categories</strong>
                <ul>
                    <li><a href="#">Fish & Meat</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Spices</a></li>
                    <li><a href="#">Dairy Products</a></li>
                    <li><a href="#">Dry Grains</a></li>
                    <li><a href="#">Nuts</a></li>
                </ul>
            </div>

            <!--links------------->
            <section id="opening-hours">
            <div class="footer-links">
                <strong>Opening Hours</strong>
                <ul>
                    <li><a href="#">Mon - Fri: 8am - 6pm</a></li>
                    <li><a href="#">Saturday: 8am - 4pm</a></li>
                    <li><a href="#">Sunday: 8am - 1pm</a></li>
                </ul>
            </div>
            </section>

            <!--links------------->
            <section id="contact">
            <div class="footer-links">
                <strong>Contact</strong>
                <ul>
                    <li><a href="#">Phone: +230 294 0000</a></li>
                    <li><a href="#">Email: sgstore@udm.ac.mu</a></li>
                </ul>
            </div>
            </section>

        </div>
    </footer>

</body>
</html>