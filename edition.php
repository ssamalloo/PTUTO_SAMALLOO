<?php

if(isset($_GET['info']) && $_GET['info']!="")
{

$liaison2 = mysqli_connect('127.0.0.1', 'gStock', 'swathiSAMALLOO12');
mysqli_select_db($liaison2, 'stocks');

$tab_param = explode("-",$_GET['info']);
$num_cli = $tab_param[0];
$num_com = $tab_param[1];

$c_civ=""; $c_nom=""; $c_pre=""; $c_date=""; $c_tot="";
$c_ref =""; $c_des=""; $c_qte=""; $c_pht=0; $c_mht=0; $compteur=0;

$requete = "SELECT * FROM clients a, commandes b, detail c WHERE a.Client_num=".$num_cli." AND b.Com_num=".$num_com." AND c.Detail_com=".$num_com.";";
$retours = mysqli_query($liaison2, $requete);

require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','',9);

while($retour = mysqli_fetch_array($retours))
{
    if($c_civ=="")
    {
		$c_civ = $retour["Client_civilite"];
		$c_nom=$retour["Client_nom"]; $c_pre=$retour["Client_prenom"];
		$c_date=$retour["Com_date"]; $c_tot=$retour["Com_montant"];

		$pdf->Cell(35,10,"",0,1,'R');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(120,5,"Customer Invoice",0,0,'L');
		$pdf->Cell(60,5,$c_civ." ".$c_pre." ".$c_nom,0,1,'L');
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(120,5,"20,Saint-Denis Street",0,0,'L');
		$pdf->Cell(60,5,"Your Address",0,1,'L');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(120,5,"Port-Louis",0,0,'L');
		$pdf->Cell(60,5,"Your Town",0,1,'L');
		$pdf->Cell(35,10,"",0,1,'R');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(120,5,utf8_decode("Your order number : ").$num_com,0,0,'L');
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(60,5,"Order date : ".$c_date,0,1,'L');
		$pdf->Cell(35,10,"",0,1,'R');
	}

		$requete = "SELECT * FROM articles WHERE Article_code='".$retour["Detail_ref"]."';";
		$reponses = mysqli_query($liaison2, $requete);
		$reponse = mysqli_fetch_array($reponses);

		$c_ref = $reponse["Article_code"]; $c_des=$reponse["Article_designation"];
		$c_qte = $retour["Detail_qte"]; $c_pht=number_format($reponse["Article_PUHT"],2, ',', ' ');
		$c_mht = number_format($retour["Detail_qte"]*$reponse["Article_PUHT"],2, ',', ' ');

		$pdf->Cell(20,10,"",0,0,'L');
		$pdf->Cell(20,10,$c_ref,1,0,'L');
		$pdf->Cell(70,10,$c_des,1,0,'L');
		$pdf->Cell(10,10,$c_qte,1,0,'R');
		$pdf->Cell(30,10,$c_pht,1,0,'R');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(30,10,$c_mht,1,1,'R');
		$pdf->SetFont('Arial','',9);
		$compteur ++;

}

$pdf->SetFont('Arial','B',11);
$pdf->Cell(35,10,"",0,1,'R');
$pdf->Cell(120,10,"Total amount excluding VAT : ",0,0,'R');
$pdf->Cell(30,10,"",0,0,'R');
$pdf->Cell(30,10,number_format($c_tot, 2, ',', ' '),1,1,'R');
$pdf->Cell(120,10,"VAT : 20%",0,0,'R');
$pdf->Cell(30,10,"",0,0,'R');
$pdf->Cell(30,10,number_format($c_tot/5, 2, ',', ' '),1,1,'R');
$pdf->Cell(120,10,"Total amount including VAT : ",0,0,'R');
$pdf->Cell(30,10,"",0,0,'R');
$pdf->Cell(30,10,number_format($c_tot + $c_tot/5, 2, ',', ' '),1,1,'R');
$pdf->Cell(30,30,"",0,1,'R');
$pdf->SetFont('Arial','U',11);

$restant = 120 - $compteur*10;
$pdf->Cell(30,$restant,"",0,1,'R');
$pdf->Cell(60,10,"Legal notices and Conditions :",0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(180,10,"The date on which the invoice is issued, the name and address of the customer must be mentioned.",0,1,'L');


$nom_fichier ="factures/".$num_cli."-".$num_com.".pdf";
$pdf->Output($nom_fichier,'F');
$pdf->Output();

mysqli_close($liaison2);
}
?>