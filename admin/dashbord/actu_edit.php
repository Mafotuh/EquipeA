<?php 
connexion();

if (isset($_GET['post']) AND isset($_GET['post'])!= '') {

	$article_id = $_GET['post'];

	$request = mysql_query("SELECT * from actualite where ID = '$article_id'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request) or die(mysql_error());

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php?form=send" method="post" enctype="application/x-www-form-urlencoded">
		<?php 
			id_edit('art_id', $resu_request['ID']);
			media_update($resu_request['media_ID']);
			text_edit('text', 'up_titreactu', 'Titre de l article', 'form-control', $resu_request['titre']);
			textarea_edit('contenu', 'Contenu de votre article', 'form-control', $resu_request['contenu']);
			box('radio', 'status', '1', 'Publier cet article maintenant' );
			box('radio', 'status', '0', 'Ne pas publier cet article' );
			bouton('submit', 'Envoyer', 'btn btn-info' );

			// id_edit() Function Native from /Controller/form.php (L.74) ::::::::::::::::::::::::::::::::::: 
			// text_edit() Function Native from /Controller/form.php (L.62) ::::::::::::::::::::::::::::::::::: 
			// textarea_edit() Function Native from /Controller/form.php (L.70) ::::::::::::::::::::::::::::::::::: 
			// box() Function Native from /Controller/form.php (L.41) :::::::::::::::::::::::::::::::::
			// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
		?>
	</form>
</body>
</html>