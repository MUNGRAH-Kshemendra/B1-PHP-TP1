<?php
echo "Saisir la somme du par le passager:";
$sommeDue = rtrim(fgets(STDIN));
if ($sommeDue == 0 ){
	echo "Le passager s'est acquitté de la somme due.\n";
}
else{
	echo "Le passager doit ",$sommeDue ," euro\n";
}

if ($sommeDue < 0 ){
	echo "Valeur incorrecte.\n";
}
?>
