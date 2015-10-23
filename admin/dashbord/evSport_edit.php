<?php 
connexion();

if (isset($_GET['ev_sport']) AND isset($_GET['ev_sport'])!= '') {

	$ev_sport_id = $_GET['ev_sport'];

	$request = mysql_query("SELECT * from event_sport where ID = '$ev_sport_id'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request) or die(mysql_error());

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php?form=send" method="post">
	<?php
		id_edit('ID', $resu_request['ID']);
		text_edit('text', 'up_tr_evsport', 'Titre de l article', 'form-control', $resu_request['titre']);
		textarea_edit('description', 'Contenu de votre article', 'form-control', $resu_request['description']);
		text_edit('text', 'lieu', 'lieu de l evenement', 'form-control', $resu_request['lieu'] );
		text_edit('number', 'nbr_part', 'Effectif maximal des participent', 'form-control', $resu_request['nbr_part'] );
		text_edit('date', 'date_event', 'Date de l evenement (AAAA-MM-JJ)', 'form-control', $resu_request['date_event']);
		box('radio', 'status', '1', 'Publier cet article maintenant' );
		box('radio', 'status', '0', 'Ne pas publier cet article' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		// text_edit() Function Native from /Controller/form.php (L.62) ::::::::::::::::::::::::::::::::::: 
		// textarea_edit() Function Native from /Controller/form.php (L.70) ::::::::::::::::::::::::::::::::::: 
		// box() Function Native from /Controller/form.php (L.41) :::::::::::::::::::::::::::::::::
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
	?>

	</form>
</body>
</html>