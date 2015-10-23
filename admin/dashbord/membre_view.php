<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>

<div class="panel panel-default" id="actualite">
	<div class="panel-heading"><h4> Liste des Mmebres enregistré : <small> Cliquer sur un nom pour visionner son profile</small> </h4></div>
	<div class="panel-body">

		<table class="table">
		<div>
			
			<form method="post" action="index.php?form=membre_view">
			<span>Filtrer :</span>
			<select name="status">
				<option value="x">tout</option>
				<option value="1">Activé</option>
				<option value="0">Désactivé</option>
			</select>
			<button type="submit">Valider</button>	
			</form>
			
		</div>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Status</th>
				<th>Confirmer</th>
			</tr>
			<?php 
			function affichemembre(){
				$membre = membre();
				// membre() Function Native from /Model/user_model.php (l.59) ::::::::::::::::::::::::::

				while ($resu_membre = mysql_fetch_array($membre)) {

					$id_pers = $resu_membre['ID'];
					$statu_pers = $resu_membre['status'];
					
					echo "
					<form action ='index.php?form=send' method ='POST'>
						<tr>
							<td><select name='id_pers'><option>".$id_pers."</option></select></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_membre['nom']."</a></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_membre['prenom']."</a></td>
							<td><select name='stat_pers'>";
							
							if ($statu_pers==1) {
								echo "<option> activé </option><option> Désactivé </option></select></td>";
							}else{
								echo "<option> Désactivé </option><option> activé </option></select></td>";
							}

							echo "<td><button type='submit' class='btn btn-danger'>Valider</button></td>
						</tr>
					</form>
					";
				}
			}

			function affich_mbr_tri($param){
				$membre = mysql_query("SELECT * from profile where status ='$param'") or die(mysql_error());

				while ($resu_membre = mysql_fetch_array($membre)) {

					$id_pers = $resu_membre['ID'];
					$statu_pers = $resu_membre['status'];
					
					echo "
					<form action ='index.php?form=send' method ='POST'>
						<tr>
							<td><select name='id_pers'><option>".$id_pers."</option></select></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_membre['nom']."</a></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_membre['prenom']."</a></td>
							<td><select name='stat_pers'>";
							
							if ($statu_pers==1) {
								echo "<option actived> activé </option><option> Désactivé </option></select></td>";
							}else{
								echo "<option actived> Désactivé </option><option> activé </option></select></td>";
							}

							echo "<td><button type='submit' class='btn btn-danger'>Valider</button></td>
						</tr>
					</form>
					";
				}
			}

			if (isset($_POST['status']) AND $_POST['status'] !='') {
				$param1 = htmlspecialchars($_POST['status'], ENT_QUOTES);

				if ($param1 == 'x') {
					affichemembre();
				}else{
					affich_mbr_tri($param1);
				}

			}else{
				affichemembre();
			}

			?>
		</table>
	</div>
</div>

</body>
</html>