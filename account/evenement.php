<!-- Connection to Data base ////////////////////////////////////////////////// -->
<?php connexion(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<h4 class="page-header">Liste des evenement sportif à venir <small>Voir parmi les evenement disponible et cliquer sur le bouton pour s'inscrire</small></h4>
		<table class="table">
			<tr>
				<th>Titre</th>
				<th>Lieu</th>
				<th>Effectif maximal</th>
				<th>place restant</th>
				<th>Date</th>
				<th>Valider</th>
			</tr>
			<?php 	

				$user_ID = $_SESSION['ID'];

				// Faire une pagination des pages //////////////////////////////////////////////////////////////////
				$req2 = mysql_query("SELECT count(*) as eff_ttl from event_sport ") or die(mysql_error());
				$resu_req2 = mysql_fetch_array($req2);
				$total_ev = $resu_req2['eff_ttl'];
				$ev_affich = ($total_ev/5);

				$date = date("Y-m-d");
				function pourcent($Nombre, $place_ttl) {
					return $Nombre * 100 / $place_ttl;
				}
				// Appel du contenu de la Table evenement sportif //////////////////////////////////////////////////
				$req = mysql_query("SELECT * from event_sport where status = 1") or die(mysql_error());
				
				while ($resu_req = mysql_fetch_array($req)) {
	
					$rs_id = $resu_req['ID'];	
					$effectif = $resu_req['nbr_part'];

					// Count total registred member on each event ////////////////////////////////////////////////////
					$rq_ttl = mysql_query("SELECT count(profile_ID) as total_reg from event_inscr where event_sport_ID = '$rs_id' ") or die(mysql_error());
					$res_rq_ttl = mysql_fetch_array($rq_ttl);
					$total = $res_rq_ttl['total_reg'];

					// Locate Event ID on the registration Table /////////////////////////////////////////////////////
					$request = mysql_query("SELECT * FROM event_inscr WHERE event_sport_ID LIKE '$rs_id' AND profile_ID = '$user_ID' ") or die(mysql_error());	
					$resu_request = mysql_fetch_array($request);

					$event_sport_ID = $resu_request['event_sport_ID'];

					// Count remaining places ////////////////////////////////////////////////////////////////////////
					$restant = $effectif - $total;
					
					echo "
						<tr>
							<td>
								<span class='police'>"; 
								
								if ($resu_req['date_event'] < $date) {
									echo $resu_req['titre']."<code>passé</code>"; 
								}else{
									echo $resu_req['titre'];
								}

								if($rs_id == $event_sport_ID){
									echo "<div class='label label-success lab'><span class='glyphicon glyphicon-ok'></span></div>";
								} 
								echo "</span>
							</td>

							<td><span>".$resu_req['lieu']."</span></td>
							<td><span class='badge' >".$effectif. "</span></td>";

							// Affichage des place restant ////////////////////////////////////////////////////////////
							if ($restant == 0) {
								echo "<td><span class='label label-danger lab' >".$restant."</span></td>";
							}else{
								if (pourcent($restant, $effectif) <= 25){
									//ON PASSE EN ROUGE
									echo "<td><span class='label label-danger lab' >".$restant."</span></td>";		

								}elseif (pourcent($restant, $effectif) <= 50){
									// ON PASSE EN ORENGE
									echo "<td><span class='label label-warning lab' >".$restant."</span></td>";		

								}elseif (pourcent($restant, $effectif) <= 75){
									// ON PASSE EN BLEU
									echo "<td><span class='label label-primary lab' >".$restant."</span></td>";		

								}elseif (pourcent($restant, $effectif) <= 100){
									//ON PASSE EN VERT
									echo "<td><span class='label label-success lab' >".$restant."</span></td>";		
								
								}
							}
							
							if ($resu_req['date_event'] < $date) {
								echo "<td><code>".$resu_req['date_event']."</code></td>";
							}else{
								echo "<td><span>".$resu_req['date_event']."</span></td>";
							}
							
							// Verifie si l'evenement est deja passé ou toujours en cours ////////////////////////////
							if ($resu_req['date_event'] < $date) {
								//DEJA pASSE
								echo "<td><span class='btn btn-warning'>Déjà passé</a></td>";
								
							}else{
								// Verifier si la parsone s'est inscrit dans une evenement ou pas ////////////////////
								if ($rs_id == $event_sport_ID) {
									// BOUTON DE DESINSCRIPTION
									echo "<td><a href='index.php?supr=".$resu_req['ID']."' class='btn btn-default'>Se desinscrire</a></td>";

								}else{
									// Verifier s'il reste des places disponibles ////////////////////////////////////
									if ($restant == 0) {
										// BOUTON INSCRIPTION
										echo "<td><span class='btn btn-danger'>inscription Clos</a></td>";

									}else{
										//BOUTON INSCRIPTION CLOS
										echo "<td><a href='index.php?inscr=".$resu_req['ID']."' class='btn btn-info'>S'inscrire</a></td>";
									}
								}
							}
							echo "
						</tr>
					";
				} 
				//END While ///////////////////////////////////////////////////////////////////////////////////////
			?>

		</table>			
		<?php 
			$pagin =  ceil($ev_affich);
			
			for ($i=0; $i < $pagin; $i++) { 

				if ($i == 0) {
					#CODE...
				}else{
					echo "<span class='badge'>". $i." </span>" ;
				}
			}
		?>
	</div>
	<div class="col-sm-1"></div>
</body>
</html>