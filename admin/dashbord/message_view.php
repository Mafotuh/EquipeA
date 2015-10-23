<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Doite des message <?php echo msg_non_lu('nom') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>

<div class="panel panel-default" id="actualite">
	<div class="panel-heading"><h4> Liste des messages reçu : <small>Cliquer sur une titre pour visionner le message</small></h4></div>
	<div class="panel-body">
		<table class="table">
			<tr>
				<th>Status</th>
				<th>Titre</th>
				<th>Expediteur</th>
				<th>Date d'envoie</th>
				<th>Opperation</th>
			</tr>
			<?php 
			$message_recu = message_recu();
			// message_recu() Function Native from /Model/message_model.php (l.28) ::::::::::::::::::::::::::

			
			while ($resu_message_recu = mysql_fetch_array($message_recu)) {
				$mess_id = $resu_message_recu['ID'];
				$GLOBALS['msg_is'] = $resu_message_recu['ID'];
				
				$nom_comp = $resu_message_recu['nom']; 
				$path = "/(\w+)\s(\w+)/";
				$rep = "$1";
				$nom = preg_replace($path, $rep, $nom_comp);	

				$rq = mysql_query("SELECT * from contact where ID = '$mess_id' ")or die(mysql_error());
				$resu_rq = mysql_fetch_array($rq);

				$lu = $resu_rq['lu'];

				echo "<tr>";
					if ($lu == 0) {
						echo "<td><span class='badge_nonlu'>.</span></td>";
					}else{
						echo "<td><span type='button' class='badge_lu'>.</span></td>";
					}
					echo "
					<td><a href='index.php?msg_id=".$resu_message_recu['ID']."'>". mb_strimwidth($resu_message_recu['sujet'], 0, 30, '...')."</a></td>
					<td><a href='#'>".$nom."</a></td>
					<td><a href='#'>". $resu_message_recu['date']."</a></td>
					<td><a href='index.php?del_msg=".$resu_message_recu['ID']."&del_msg_ttl=".$resu_message_recu['sujet']."'class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
				</tr>";
				}
			?>
		</table>
	</div>
</div>

</body>
</html>