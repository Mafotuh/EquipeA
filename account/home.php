<!DOCTYPE html>
<html>
<head>
	<title>User Account </title>
</head>
<body>
<div class='container'>
	<div class='row'>
		<div class='col-sm-1'></div>
		<div class='col-sm-6'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<table class='table police'>
    					<thead>
    						<tr>
    							<th><h4 class='page-header'>Resumé de votre profile</h4></th>
    						</tr>
    					</thead>
						<tbody>
						<tr>
							<td>Civilité</td>
							<td><?php echo $_SESSION['genre']; ?></td>
							<td><a href='#'>Modifier</a></td>
						</tr>
						<tr>
							<td>Nom</td>
							<td><?php echo $_SESSION['nom_user']; ?></td>
						</tr>
						<tr>
							<td>Prénom </td>
							<td><?php echo $_SESSION['prenom']; ?></td>
						</tr>
						<tr>
							<td>Âge</td>
							<td><?php echo $_SESSION['age']; ?></td>
						</tr>
						<tr>
							<td>Poid</td>
							<td><?php echo $_SESSION['poid']; ?></td>
						</tr>
						<tr>
							<td>Taille</td>
							<td><?php echo $_SESSION['taille']; ?></td>
						</tr>
						<tr>
							<td>Adresse</td>
							<td><?php echo $_SESSION['adresse']; ?></td>
						</tr>
						<tr>
							<td>Ville</td>
							<td><?php echo $_SESSION['ville']; ?></td>
						</tr>
						<tr>
							<td>Code postale</td>
							<td><?php echo $_SESSION['cp']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['email']; ?></td>
						</tr>
						<tr>
							<td>Téléphone</td>
							<td><?php echo $_SESSION['tel']; ?></td>
						</tr>
						</tbody>
					</table><!-- end table  -->
				</div><!-- end panel heading -->
			</div><!-- end panel default -->
		</div>
		<div class='col-sm-4'>
			<?php include 'membres.php'; ?>
		</div>
		<div class="col-sm-1"></div>
	</div><!-- End Row -->
</div><!-- End container  -->

<?php 

inclusion('footer.php'); 

// inclusion() Function Native from /Controller/link.php (L.41) ::::::::::::::::::::::::::::::::::: 
?>

</body>
</html>