<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
<div class="container">

<?php 

/* !!!!!!!!!!!!!!!!! ALGORITHME !!!!!!!!!!!!!!!!!!!!
	Affichage des resultat 
	_______________________________________________

	si (verifié recherche){

		echo <format de l'afichage HTML>;

			#Verifier si le resultat n'est pas vide 
			_______________________________________
			si (resiltat != vide){
				AfficheEffectifResultat();
				AfficheResultat();
			}
		echo </format de l'afichage HTML>;
	}
*/


// !!!!!!!!!!!!!!!!! PROGRAMME !!!!!!!!!!!!!!!!!!!!

$recherche = htmlspecialchars($_POST['query'], ENT_QUOTES);

if (isset($recherche)) {

	//Affichage des resultat
	echo "<div class='row'> 
			<div class='col-sm-1'></div> 
			<div class='col-sm-4'>";
	
	//Verifier si le resultat n'est pas vide 
	if (resultat_Recherche($recherche) != '') {
		
		nombre_Resultat($recherche);
		affich_Resultat(resultat_Recherche($recherche));
	}

	echo "</div>
		<div class='col-sm-7'></div>
		</div>";
}

	// resultat_Recherche() function defined on actu_model.php L 90 :::::::::::::::::::::::::::::::::::::::::::::::::
	// nombre_Resultat() function defined on actu_model.php L 97 :::::::::::::::::::::::::::::::::::::::::::::::::
	// affich_Resultat() function defined on actu_model.php L 111 :::::::::::::::::::::::::::::::::::::::::::::::::

?>

</div>
</body>
</html>