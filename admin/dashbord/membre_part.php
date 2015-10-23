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
	<div class="panel-heading"><h4> Liste des Mmebres Inscrit aux evenement sportif : <small> Cliquer sur un nom pour visionner son profile</small> </h4></div>
	<div class="panel-body">

		<table class="table">
		<div>
			
			<form method="post" action="index.php?form=membre_part">
			<span>Filtrer :</span>
			<select name="titre_ev">
				<?php 
					$evsport_view = evsport_view();
					// membre() Function Native from /Model/user_model.php (l.59) ::::::::::::::::::::::::::
					echo "<option value='x'>Tout les évevenements</option>";
					while ($resu_evsport_view = mysql_fetch_array($evsport_view)) {
						$event_titre = htmlspecialchars($resu_evsport_view['titre'], ENT_QUOTES);
						echo "<option>".$event_titre."</option>";
					}
				?>
			</select>
			<button type="submit">Valider</button>
			</form>

		</div>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Evenement</th>
			</tr>

			<?php 
			function mbr_participent(){
				$mbr_part = mbr_part();
				// mbr_part() Function Native from /Model/user_model.php (l.97) ::::::::::::::::::::::::::
		
				while ($resu_mbr_part = mysql_fetch_array($mbr_part)) {

					$id_pers = $resu_mbr_part['pid'];
					
					echo "
						<tr>
							<td><select name='id_pers'><option>".$id_pers."</option></select></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_mbr_part['pnom']."</a></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_mbr_part['pprenom']."</a></td>
							<td>". $resu_mbr_part['etitre']."</td>
						</tr>				
					";
				}
			}

			function mbr_participent_filtr($titre){
				// lister les personnes inscrit dans les evenement selon l'evenement choisi en paramettre
				$mbr_filtre = mysql_query("SELECT DISTINCT p.ID pid, p.nom pnom, p.prenom pprenom, es.titre etitre
							FROM event_sport es, profile p
							RIGHT JOIN event_inscr ei ON p.ID = ei.profile_ID 
							WHERE es.ID = ei.event_sport_ID
							AND es.titre = '$titre'
							ORDER BY pid") or die(mysql_error());

				// calculer le nombre des personnes particiment en conction de l'evenement choisi
				$nbr_part = mysql_query("SELECT count(*) as ttl_part FROM event_sport es, profile p
							RIGHT JOIN event_inscr ei ON p.ID = ei.profile_ID 
							WHERE es.ID = ei.event_sport_ID
							AND es.titre = '$titre'")or die(mysql_error());
				$resu_nbr_part = mysql_fetch_array($nbr_part);
				$ttl_part = $resu_nbr_part['ttl_part'];
				
				
				while ($resu_mbr_filtre = mysql_fetch_array($mbr_filtre)) {
					$id_pers = $resu_mbr_filtre['pid'];
					
					echo "
						<tr>
							<td><select name='id_pers'><option>".$id_pers."</option></select></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_mbr_filtre['pnom']."</a></td>
							<td><a href='index.php?id=".$id_pers."'>". $resu_mbr_filtre['pprenom']."</a></td>
							<td>". $resu_mbr_filtre['etitre']."</td>
						</tr>				
					";
				}

				echo "Il y a <span class='label label-info lab'> ".$ttl_part." </span> personne(s) participant à l'évenement ".$titre;
			}

			if (isset($_POST['titre_ev']) AND $_POST['titre_ev'] !='') {
				$titre = $_POST['titre_ev'];

				if ($titre == 'x') {
					mbr_participent();
				}else{
					mbr_participent_filtr($titre);

				}

			}else{
				mbr_participent();
			}
			
			?>
		</table>
	</div>
</div>

</body>
</html>