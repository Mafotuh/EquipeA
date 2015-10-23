<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form" action="index.php?form=send" method="post">
	<?php 
		text('text', 'titreevent', 'Titre de l article', 'form-control' ); 
		number('number', 'benevole', '1', '100000', '1', 'Nombres des benevole (sans espace)', 'form-control' );
		number('number', 'artiste', '1', '100000', '1', 'Nombre d artiste (sans espace)', 'form-control' );
		number('number', 'visiteur', '1', '100000', '1', 'Nombre des  visiteurs (sans espace)', 'form-control' );
		number('number', 'youtube', '1', '1000000', '1', 'Nombre des vue sur Youtube (sans espace)', 'form-control' );
		textarea('contenu', 'Contenu de votre article', 'form-control' );
		text('date', 'date_eve', 'Date de l evenement (AAAA-MM-JJ HH:MIN:SS)', 'form-control' );
		box('radio', 'status', '1', 'Publier cet article maintenant' );
		box('radio', 'status', '0', 'Ne pas publier cet article' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
		// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
		// number() Function Native from /Controller/form.php (L.13) :::::::::::::::::::::::::::::::::
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
	?>
	</form>
</body>
</html>