<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>		
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-12">
					<form action="index.php?page=envoi" method="post" class="form-group">
						<?php 
						text('text', 'm_login', 'Votre nom identifiant', 'form-control' ); 
						text('password', 'm_pass', 'Votre mot de passe', 'form-control' );
						bouton('submit', 'Connexion', 'btn btn-info' );

						// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
						// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
						
						?> 
					</form><!-- End Form  -->
				</div>
			</div><!-- End Secondary row -->
		</div>		
		<div class="col-sm-4"></div>		
	</div><!-- End Primary Row  -->
</div><!-- End Container  -->
</body>
</html>