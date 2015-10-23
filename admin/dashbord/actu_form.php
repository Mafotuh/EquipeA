<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form" action="index.php?form=send" method="post">
	<?php 
		mediafile();
		text('text', 'titreactu', 'Titre de l article', 'form-control' );
		textarea('contenu', 'Contenu de votre article', 'form-control' );
		box('radio', 'status', '1', 'Publier cet article maintenant' );
		box('radio', 'status', '0', 'Ne pas publier cet article' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
		// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
		// box() Function Native from /Controller/form.php (L.41) :::::::::::::::::::::::::::::::::
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
		// mediafile() Function Native from /models/actu_models.php (L.60) ::::::::::::::::::::::::::::::::::: 
	?>
	</form>
</body>
</html>