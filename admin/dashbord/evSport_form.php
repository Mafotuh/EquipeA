<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form" action="index.php?form=send" method="post">
	<?php 
		text('text', 'evsport_titre', 'nom de l Evenement ', 'form-control' );
		textarea('description', 'Description de l evenement', 'form-control' );
		text('text', 'lieu', 'lieu de l evenement', 'form-control' );
		text('number', 'nbr_part', 'Effectif maximal des participent', 'form-control' );
		text('date', 'date_event', 'Date de l evenement (AAAA-MM-JJ)', 'form-control' );
		box('radio', 'status', '1', 'Publier cet article maintenant' );
		box('radio', 'status', '0', 'Ne pas publier cet article' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
		// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
		// box() Function Native from /Controller/form.php (L.41) :::::::::::::::::::::::::::::::::
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
	?>
	</form>
</body>
</html>