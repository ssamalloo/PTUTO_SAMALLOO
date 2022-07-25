<header>
        <link rel="stylesheet" type="text/css" href="header.css">
        <img src="images/logofinal.png" class="logo1" alt="logo" width="400">
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="grocer.php">Orders</a></li>
                <li><a href="." target="_self">Stocks</a></li>
                <li><a href="table.html">References</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <a href="#" class="logo2"><img src="images/mainLogo.png" width="185"></a>
</header>

<?php
	include("commun/connexion.php");
	include("commun/entete.php");
?>
<script language='javascript' type="text/javascript">
function recolter()
{
	document.getElementById("formulaire").request({
		onComplete:function(transport){
		switch(document.getElementById('param').value)
		{
		case 'recup_client':
		var tab_info = transport.responseText.split('|');
		document.getElementById('civilite').value = tab_info[0];
		document.getElementById('nom_client').value = tab_info[1];
		document.getElementById('prenom_client').value = tab_info[2];
		break;

		case 'recup_article':
		var tab_info = transport.responseText.split('|');
		document.getElementById('designation').value = tab_info[0];
		document.getElementById('puht').value = tab_info[1];
		document.getElementById('qte').value = tab_info[2];
		break;

		case 'creer_client':
		var rep = transport.responseText;
		if(rep=="nok")
		alert("The client already exists");
		else
		{
		var liste = document.getElementById("ref_client");
		var option = document.createElement("option");
		option.value = rep;
		option.text = rep;
		liste.add(option);
		liste.selectedIndex = liste.length-1;
		}
		break;

		case 'facturer':
		var reponse = transport.responseText;
		if(transport.responseText == "nok")
			alert("An error has occurred");
		else
		{
			alert("The invoice has been successfully validated !");
			document.getElementById("editer").innerHTML = "<input type='button' value='Edit the Invoice' onclick='window.open(\"edition.php?info=" + reponse + "\")'/>";
		}
		break;

		}
		}
	});
}
</script>
			<div style="width:100%;display:block;text-align:center;">
			</div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>						
			
			<div style="float:left;width:10%;height:40px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
			<div class="titre_h1">
			<h1>Customer Invoicing with Inventory Management</h1>
			</div>
			</div>
			<div style="float:left;width:10%;height:40px;"></div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
			
			<div style="float:left;width:10%;height:350px;"></div>
			<div style="float:left;width:80%;height:350px;text-align:center;">
			<form id="formulaire" name="formulaire" method="post" action="rep_facture.php">
				<div class="titre_h1" style="height:350px;">
					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:35%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#9A7B4F;">
						<p>Customer Information :</><br />
					</div>
					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:35%;height:50px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						<input type="button" id="creer_client" name="creer_client" value="Create client" onclick="document.getElementById('param').value = 'creer_client';recolter();"/>
					</div>
					<div style="width:10%;height:50px;float:left;"></div>

					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Ref. Client :<br />
						<select id="ref_client" name="ref_client" onchange="document.getElementById('param').value = 'recup_client';recolter();">
							<option value="0">Choose client</option>
							<?php 
							$requete = "SELECT Client_num FROM clients ORDER BY Client_num;";
							$retours = mysqli_query($liaison, $requete);
							while($retour = mysqli_fetch_array($retours))
							{
							echo "<option value = '".$retour["Client_num"]."'>".$retour["Client_num"]."</option>";
							}
							?>
						</select>
					</div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Civility :<br />
						<input type="text" id="civilite" name="civilite" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Customer Last name :<br />
						<input type="text" id="nom_client" name="nom_client" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Customer First name :<br />
						<input type="text" id="prenom_client" name="prenom_client" />
					</div>					
					<div style="width:10%;height:75px;float:left;"></div>

			<div class="div_saut_ligne" style="height:0px;">
			</div>

					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:80%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#9A7B4F;">
						<p>Addition of Ordered Products :</p><br />
					</div>
					<div style="width:10%;height:50px;float:left;"></div>	
					
					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Ref. Product :<br />
						<select id="ref_produit" name="ref_produit" onchange="document.getElementById('param').value = 'recup_article';recolter();">
							<option value="0">Ref. product</option>
							<?php 
							$requete = "SELECT Article_code FROM articles ORDER BY Article_code;";
							$retours = mysqli_query($liaison, $requete);
							while($retour = mysqli_fetch_array($retours))
							{
							echo "<option value = '".$retour["Article_code"]."'>".$retour["Article_code"]."</option>";
							}
							?>
						</select>
					</div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Qty in Stock :<br />
						<input type="text" id="qte" name="qte" disabled />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Product Designation :<br />
						<input type="text" id="designation" name="designation" disabled />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Unit price excluding VAT :<br />
						<input type="text" id="puht" name="puht" disabled />
					</div>					
					<div style="width:10%;height:75px;float:left;"></div>				

			<div class="div_saut_ligne" style="height:0px;">
			</div>

					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Qty Ordered :<br />
						<input type="text" id="qte_commande" name="qte_commande" />
					</div>
					<div style="width:15%;height:75px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Total Ordered :<br />
						<input type="text" id="total_commande" name="total_commande" disabled />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;margin-top: 10px;">
						<input type="button" id="ajouter" name="ajouter" value="Add" style="margin-top:10px;" onclick="plus_com();" /><br />
						<input type="text" id="param" name="param" style="visibility:hidden;" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;margin-top: 10px;">
						<input type="button" id="valider" name="valider" value="Validate" style="margin-top:10px;" onclick="document.getElementById('param').value = 'facturer';recolter();" /><br />
						<input type="text" id="chaine_com" name="chaine_com" style="visibility:hidden;" />
						<input type="text" id="total_com" name="total_com" style="visibility:hidden;" />
					</div>					
					<div style="width:10%;height:75px;float:left;"></div>			
									
					
				</div>
			</form>
			</div>
			<div style="float:left;width:10%;height:350px;"></div>	

			<div class="div_saut_ligne" style="height:30px;">
			</div>						
			
			<div style="float:left;width:10%;height:25px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
				<div class="titre_h1" style="float:left;height:auto;width:100%;">
					<div style="float:left;width:5%;height:25px;"></div>
					<div style="width:15%;height:25px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Ref.
					</div>
					<div style="width:15%;height:25px;float:left;font-size:18px;font-weight:bold;text-align:left;">
						Qty
					</div>
					<div style="width:30%;height:25px;float:left;font-size:18px;font-weight:bold;text-align:left;overflow:hidden;">
						Product Designation
					</div>
					<div style="width:15%;height:25px;float:left;font-size:18px;font-weight:bold;text-align:right;">
						UPEV
					</div>
					<div style="width:15%;height:25px;float:left;font-size:18px;font-weight:bold;text-align:right;">
						TPEV
					</div>
					<div style="float:left;width:5%;height:25px;"></div>
					
					<div style="float:left;width:100%;height:auto;" id="det_com">
						<div class="bord"></div>
						
						<div class="bord"></div>						
						
					</div>

					<div style="float: left;width: 5%;height: 25px;"></div>

					<div style="float: left;width: 100%;height: auto;" id="editer"></div>
				</div>
			</div>
			<div style="float:left;width:10%;height:auto;"></div>	
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
<script language='javascript' type="text/javascript">
var tot_com = 0;

function plus_com()
{
	if(ref_client.value != 0 && ref_produit.value != 0 && qte_commande.value != "0" && qte_commande.value !="")
	{
		if(parseInt(qte_commande.value) > parseInt(qte.value))
			alert("The quantity in stock is not sufficient to fulfill the order :(");
		else
		{
			var ref_p = ref_produit.value;
			var qte_p = qte_commande.value;
			var des_p = designation.value;
			var pht_p = puht.value;

			tot_com = tot_com + qte_p*pht_p;
			total_commande.value = tot_com.toFixed(2);
			total_com.value = total_commande.value;
			chaine_com.value += "|" + ref_p +";" + qte_p + ";" + des_p + ";" + pht_p;
			facture();
		}
	}
	else
	{

	}
}

function facture()
{
	var tab_com = chaine_com.value.split('|');
	var nb_lignes = tab_com.length;
	document.getElementById("det_com").innerHTML = "";
	for (ligne=0; ligne<nb_lignes; ligne++)
	{
		if(tab_com[ligne]!="")
		{
			var ligne_com = tab_com[ligne].split(';');
			document.getElementById("det_com").innerHTML += "<div class='bord'></div>";
			document.getElementById("det_com").innerHTML += "<div class='suite'>" + ligne_com[0] + "</div>";
			document.getElementById("det_com").innerHTML += "<div class='suite'>" + ligne_com[1] + "</div>";
			document.getElementById("det_com").innerHTML += "<div class='des'>" + ligne_com[2] + "</div>";
			document.getElementById("det_com").innerHTML += "<div class='prix'>" + ligne_com[3] + "</div>";
			document.getElementById("det_com").innerHTML += "<div class='prix'>" + (ligne_com[1]*ligne_com[3]).toFixed(2) +"</div>";
			document.getElementById("det_com").innerHTML += "<div class='bord'><input type='button' value='X' title='Remove Product' style='height:17.5px; font-size:12px;' onclick='suppr(\"" + tab_com[ligne] + "\");' /></div>";
		}
	}
}

function suppr( ligne_s)
{
	chaine_com.value = chaine_com.value.replace('|' + ligne_s, '');
	var tab_detail = ligne_s.split(";");

	total_commande.value = (total_commande.value - tab_detail[1]*tab_detail[3]).toFixed(2);
	total_com.value = total_commande.value;
	tot_com = total_com.value*1;

facture();
}

</script>			
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