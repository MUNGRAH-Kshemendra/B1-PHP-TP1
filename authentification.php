<?php
define ("NB_MAX_TENTATIVES",3);
define ("LOGIN" ,"bbergman");
define ("MDP","Kalmar");
$nbTentatives = (1||2||3);
$authentification == (TRUE);


echo "Saisir le login :";
$login = rtrim(fgets(STDIN));
echo "Saisir le mot de passe :";
$mdp = rtrim(fgets(STDIN));

if ( $authentification == TRUE){
	echo "authentification réussi en",$nbTentatives;
	
	if($nbTentatives == 1)
	{
	echo"tentative.";
	}
	
	else {
		echo "Échec à l'authentification";
		}
}
else{
	echo "Échec à l'authentification. Au-revoir.";
}

?>
