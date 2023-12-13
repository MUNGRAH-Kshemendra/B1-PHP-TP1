<?php
$nbPassagers = array( 35, 10 , 22 , 52 , 15 , 58 , 8 , 73 );

	$total = 0 ;

	for($i = 0 ; $i < count($nbPassagers ); $i++ ){
		
		
		$total = $total + $nbPassagers[$i] ;
			
	}
	
	echo $total , " passagers transportés le 22/09/2022 \n";
	
	
?>
