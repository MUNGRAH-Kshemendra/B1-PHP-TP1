<?php
echo"saisir la devise:";
$deviseSaisie = rtrim(fgets(STDIN));
$devise = strtoupper($deviseSaisie);

switch ($devise)
	{
		case "USD";
		$tauxChange = 0.883;
		echo "Saisir le prix en",$devise,":";
		$prix = rtrim(fgets(STDIN));
		$prixEuros = $prix*$tauxChange;
		echo "Prix en euros :",$prixEuros,"€.\n";
		break;
	
		case "CAD";
		$tauxChange = 0.686;
		echo "Saisir le prix en",$devise,":";
		$prix = rtrim(fgets(STDIN));
		$prixEuros = $prix*$tauxChange;
		echo "Prix en euros :",$prixEuros,"€.\n";
		break;
	
		case "GBP";
		$tauxChange = 1.154;
		echo "Saisir le prix en",$devise,":";
		$prix = rtrim(fgets(STDIN));
		$prixEuros = $prix*$tauxChange;
		echo "Prix en euros :",$prixEuros,"€.\n";
		break;
	
		case "RUB";
		$tauxChange = 0.013;
		echo "Saisir le prix en",$devise,":";
		$prix = rtrim(fgets(STDIN));
		$prixEuros = $prix*$tauxChange;
		echo "Prix en euros :",$prixEuros,"€.\n";
		break;
	
		default :
		echo "Devise inconnue.\n";
	}

?>
