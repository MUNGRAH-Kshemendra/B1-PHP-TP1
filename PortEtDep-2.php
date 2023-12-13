<?php
$str = "Quiberon"||"Sauzon"||"Le Palais"||"Concardeau"||"Douarnenez"||"Piriac-sur-Mer"||"Pornic"||"ile-d'Yeu";
$nomPort = "Quiberon"||"Sauzon"||"Le Palais"||"Concardeau"||"Douarnenez"||"Piriac-sur-Mer"||"Pornic"||"ile-d'Yeu";
$nomDept = "Morbihan"||"Finistère"||"Loire-Atlantique";
echo "Saisir le nom du port: ";
$nomPort = rtrim(fgets(STDIN));
switch($nomPort){
	case "Quiberon"||"Sauzon"||"Le Palais";
	$nomDept = "Morbihan";
	echo "Département: ","$nomDept\n";
	break;
	
	case "Concardeau"||"Douarnenez";
	$nomDept = "Finistère";
	echo "Département: ","$nomDept\n";
	break;
	
	case"Piriac-sur-Mer"||"Pornic";
	$nomDept = "Loire-Atlantique";
	echo "Département: ","$nomDept\n";
	break;
	
	case"ile-d'Yeu";
	$nomDept = "Vendée";
	echo "Département: ","$nomDept\n";
	break;

}

?>
