<?php
// + Connexion
//   - Connexion base des donners
//   - insertion des données
//   - recuperation des données
// =========================================================
function connect(){
	try{
		$connexions = new PDO("mysql:host=localhost;dbname=equipa", "root", "");
	}
	catch(Exeption $e){
		die('Error: ' .$e->getMessage());
	}
}

function connexion(){
	try{
		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("equip2") or die(mysql_error());
	}

	catch(Exeprion $e){
		$e -> getMessage($e);
	}
	
}

function post($name){
	htmlspecialchars($_POST['$name']);
}

?>