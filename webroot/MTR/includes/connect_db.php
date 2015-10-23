<?php
// connexion à ma base de données
try{
	$db = new PDO('mysql:host=localhost;bdname=first','root','');
}catch(PDOExpetion $e){

	die('Erreur :' .$e->getMessage());
	
}

?>