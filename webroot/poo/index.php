<?php

class Salutation
{
	var $nom;
	var $prenom;

	function __construct()
	{
		echo "Hi my friend";
	}
}


$greeting = new Salutation();
$greeting -> $nom = "Maftouh";

echo $greeting;