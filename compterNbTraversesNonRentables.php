<?php


$nbPassagers = array( 35, 10 , 22 , 52 , 15 , 58 , 8 , 73 );
$traverse = 0;

	for($i = 0 ; $i < count($nbPassagers ); $i++ ){ 
		if ($nbPassagers[$i] < 20){
			$traverse = $traverse + 1;
			}
}
echo $traverse," traversées non rentables le 22/09/2022\n";

?>
