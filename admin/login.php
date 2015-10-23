<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php images('logo-02.png', ''); ?>
				</div>
				<div class="panel-body col-sm-offset-1">
					<form class="form-inline" action="index.php?admin=envoi" method="post">
					<?php 
					if (isset($_SESSION['nom_ad']) AND $_SESSION['nom_ad'] != '') {
						header('location: dashbord/');
					}else{
						admlog('text', 'login', 'Admin login', 'form-control' ); 
						admlog('password', 'pass', 'Admin PWD', 'form-control' );
						bouton('submit', 'Accès', 'btn btn-info' );
					}
						

						// admlog() Function Native from /Controller/form.php (L.29) ::::::::::::::::::::::::::::::::::: 
						// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
					?>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
</body>
</html>

