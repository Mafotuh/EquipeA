<?php 
connexion();

if (isset($_GET['event']) AND isset($_GET['event'])!= '') {

	$event_id = $_GET['event'];

	$request = mysql_query("SELECT * from evenement where ID = '$event_id'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form" action="index.php?form=send" method="post">
	<?php 
		id_edit('ID', $resu_request['ID']);
		text_edit('text', 'up_ttre_event', 'Titre de l article', 'form-control', $resu_request['titre']);
		text_edit('number', 'benevol', 'Effectif maximal des participent', 'form-control', $resu_request['benevole'] );
		text_edit('number', 'artiste', 'Effectif maximal des participent', 'form-control', $resu_request['artiste'] );
		text_edit('number', 'visiteur', 'Effectif maximal des participent', 'form-control', $resu_request['visiteur'] );
		text_edit('number', 'youtube', 'Effectif maximal des participent', 'form-control', $resu_request['youtube'] );
		textarea_edit('contenu', 'Contenu de votre article', 'form-control', $resu_request['contenu']);
		box('radio', 'status', '1', 'Publier cet article maintenant' );
		box('radio', 'status', '0', 'Ne pas publier cet article' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		//____________________________________________________________________________________________

		// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
		// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
		// number() Function Native from /Controller/form.php (L.13) :::::::::::::::::::::::::::::::::
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
	?>
	</form>
</body>
</html>