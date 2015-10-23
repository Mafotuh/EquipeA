<?php
//Registring to event /////////////////////////////////////////////////////////
	if (isset($_GET['inscr']) AND $_GET['inscr']!= '') {
		
		$id_inscr = $_GET['inscr'];
		$user_ID = $_SESSION['ID'];

		mysql_query("INSERT INTO event_inscr (event_sport_ID, profile_ID) VALUES ('$id_inscr', '$user_ID') ") or die(mysql_error());
#echo "We are Adding ";
		header('Location: index.php?fichier=event');
	}


//Deletting registration /////////////////////////////////////////////////////
	if (isset($_GET['supr']) AND $_GET['supr']!= '') {
		
		$id_supr = $_GET['supr'];
		$user_ID = $_SESSION['ID'];

		mysql_query("DELETE FROM event_inscr WHERE event_sport_ID = '$id_supr ' AND profile_ID = '$user_ID'") or die(mysql_error());
#echo "We are Deletting raw with ID ".$id_supr ." And USR ID ". $user_ID;

		header('Location: index.php?fichier=event');
	}

?>