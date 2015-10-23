<?php
if (isset($_GET['event']) AND $_GET['event']!= '') {
	$id_event = $_GET['event'];
	$profile_ID = $_SESSION['ID'];
	enreg_event($id_event, $profile_ID);
}

function enreg_event($event_sport_ID, $profile_ID){
	mysql_query("INSERT INTO event_inscr (event_sport_ID, profile_ID) 
				VALUES ('$event_sport_ID', '$profile_ID')")or die(mysql_error());

	header('Location: index.php?fichier=event');
}

?>