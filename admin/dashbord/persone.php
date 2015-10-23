<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
<?php

if (isset($_GET['id']) AND isset($_GET['id'])!= '') {

	$id_perso = $_GET['id'];
	
	$request = mysql_query("SELECT * from profile where ID = '$id_perso'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request) or die(mysql_error());
}

?>
	<div class='row'>
		<div class='col-sm-12'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<table class='table'>
    					<thead>
    						<h4 class='page-header'>Resumé du profile
    							<?php
	    							if($resu_request['status'] == 0){
	    								echo " <small>(Cette personne est Banie du Chat)</small>";
	    							}else{
										echo " <small>(Cette personne est autorisé à Chater)</small>";
									}
    							?>
							</h4>
    					</thead>
						<tbody>
						<tr>
							<td>Civilité</td>
							<td><?php echo $resu_request['genre']; ?></td>
						</tr>
						<tr>
							<td>Nom</td>
							<td><?php echo $resu_request['nom']; ?></td>
						</tr>
						<tr>
							<td>Prénom </td>
							<td><?php echo $resu_request['prenom']; ?></td>
						</tr>
						<tr>
							<td>Âge</td>
							<td><?php echo $resu_request['age']; ?></td>
						</tr>
						<tr>
							<td>Poid</td>
							<td><?php echo $resu_request['poid']; ?></td>
						</tr>
						<tr>
							<td>Taille</td>
							<td><?php echo $resu_request['taille']; ?></td>
						</tr>
						<tr>
							<td>Adresse</td>
							<td><?php echo $resu_request['adresse']; ?></td>
						</tr>
						<tr>
							<td>Ville</td>
							<td><?php echo $resu_request['ville']; ?></td>
						</tr>
						<tr>
							<td>Code postale</td>
							<td><?php echo $resu_request['cp']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $resu_request['email']; ?></td>
						</tr>
						<tr>
							<td>Téléphone</td>
							<td><?php echo $resu_request['tel']; ?></td>
						</tr>
						</tbody>
					</table><!-- end table  -->
				</div><!-- end panel heading -->
			</div><!-- end panel default -->
		</div>
	</div><!-- End Row -->
</body>
</html>