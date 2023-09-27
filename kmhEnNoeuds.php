<?php
echo "Saisir la vitesse en km/h :"; 

$vitessekm = fgets( STDIN );
$vitesseNoeuds = $vitessekm/1.852 ;
echo "Résultat de la convertion :" , $vitesseNoeuds , " noeuds\n" ;

?>
