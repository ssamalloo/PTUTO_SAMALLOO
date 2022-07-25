<header>
        <link rel="stylesheet" type="text/css" href="header.css">
        <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="grocer.php">Orders</a></li>
                <li><a href="invoicing.php" target="_self">Invoicing</a></li>
                <li><a href="table.html">References</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="185"></a>
</header>

<?php

session_start();

include("commun/connexion.php");
include("commun/entete.php");

	if (!isset($_SESSION['username'])) 
	{
		header("location:login.php");
	}

	elseif($_SESSION['usertype']=='admin')
	{

		header("location:login.php");
		
	}

	elseif($_SESSION['usertype']=='student')
	{

		header("location:login.php");
		
	}

?>

<script language='javascript' type="text/javascript">
function recolter()
{
	document.getElementById("formulaire").request({
		onComplete:function(transport){
			if(document.getElementById('tampon').value == 'recup')
			{
			var tab_info = transport.responseText.split('|');
			document.getElementById('des_produit').value = tab_info[0];
			document.getElementById('qte_produit_avt').value = tab_info[1];
			document.getElementById('qte_produit_aps').value = "";
			document.getElementById('qte_produit').value = "";
			}
			else
			{
			if(transport.responseText == "ok")
			{
			document.getElementById('qte_produit_aps').value = parseInt(document.getElementById('qte_produit_avt').value) + parseInt(document.getElementById('qte_produit').value);
			document.getElementById('msg_reponse').innerText = "The stock has been successfully updated !";
			}
			else
			document.getElementById('msg_reponse').innerText = "An error has occurred, the stock is unchanged";
			}
		}
	});
}
</script>

			<link rel="stylesheet" type="text/css" href="styles/mef.css">
			<div style = "width:100%; display:block; text-align:center;"></div>
			
			<div class ="div_saut_ligne" style = "height:30px;"></div>						
			
			<div style = "float:left; width:10%; height:40px;"></div>

			<div style = "float:left; width:80%; height:auto; text-align:center;">
			    <div class = "titre_h1">
					<h1>Grocery Inventory Supply</h1>
			    </div>
			</div>

			<div style = "float:left; width:10%; height:40px;"></div>
			
			<div class = "div_saut_ligne" style = "height:30px;"></div>
			
			<div style = "float:left; width:10%; height:250px;"></div>

			<div style = "float:left; width:80%; height:250px; text-align:center;">
			<form id = "formulaire" name = "formulaire" method = "post" action = "rep_stock.php">
				<div class = "titre_h1" style = "height:250px;">
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:35%; height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						Reference to be updated :<br />
						<select id="ref_produit" name="ref_produit" onchange="document.getElementById('tampon').value='recup';recolter();">
							<option value="0">Choose a reference</option>
							<?php 
							$requete = "SELECT Article_code FROM articles ORDER BY Article_code;";
							$retours = mysqli_query($liaison, $requete);
							while($retour = mysqli_fetch_array($retours))
							{
								echo "<option value='".$retour["Article_code"]."'>".$retour["Article_code"]."</option>";
							}
							?>
						</select>
						<input type = "text" id = "tampon" name = "tampon" style="visibility: hidden;" />
					</div>

					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:35%; height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						Product Designation :<br />
						<input type = "text" id = "des_produit" name = "des_produit" disabled />
					</div>
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:20%; height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						Quantity + or - :<br />
						<input type = "text" id = "qte_produit" name = "qte_produit" />
					</div>
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:20%; height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						Quantity before update :<br />
						<input type = "text" id = "qte_produit_avt" name = "qte_produit_avt" disabled />
					</div>
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:20%; height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						Quantity after update :<br />
						<input type = "text" id = "qte_produit_aps" name = "qte_produit_aps" disabled />
					</div>					
					<div style = "width:10%; height:75px; float:left;"></div>					

			<div class = "div_saut_ligne" style = "height:30px;"></div>					
					
					<div style = "width:10%; height:75px; float:left;"></div>
					<div style = "width:35%; height:75px; float:left; font-size:16px; font-weight:bold; text-align:left;">
						<input type = "button" id = "valider" name = "valider" value = "Validate the update" onclick="document.getElementById('tampon').value = 'maj';recolter();"/>
					</div>

					<div style = "width:10%; height:75px; float:left;"></div>
					<div id = "msg_reponse" style = "width:35%;height:75px; float:left; font-size:18px; font-weight:bold; text-align:left;">
						<?php 
							echo "Server Response";
						?>
					</div>
					<div style = "width:10%; height:75px; float:left;"></div>					
					
				</div>
			</form>
			</div>
			<div style = "float:left; width:10%; height:250px;"></div>			
			
			<div class = "div_saut_ligne" style = "height:50px;">
			</div>				
<?php 
	include("commun/pied-page.php");
?>

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
            <li>
                <h3>Contact</h3>
                <ul class="box">
                    <li><a href="#">Phone: +230 294 0000</a></li>
                    <li><a href="#">Email: sgstore@udm.ac.mu</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer-bottom">
            <p>All rights reserved by &copy;UdM 2022</p>
        </div>
</footer>