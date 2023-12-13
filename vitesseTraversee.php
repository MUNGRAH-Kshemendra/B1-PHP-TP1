<?php
echo "Saisir la vitesse :";
$noeud = rtrim(fgets(STDIN));

if ( $noeuds <= 0 ){
echo "Vitesse : 0 noeud";
}
else{
echo "Vitesse ",$noeud","noeud\n";
}

?>
