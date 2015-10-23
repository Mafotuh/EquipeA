<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>

<div class="panel panel-default" id="evenement">
	<div class="panel-heading"><h4> Liste des Evements : Cliquer sur une titre pour modifier</h4></div>
	<div class="panel-body">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Date de PUB</th>
				<th>Opperation</th>
			</tr>
			<?php 
			$event_view = event_view();
			// event_view() Function Native from /Model/event_model.php (L.52) ::::::::::::::::::::::::::

			while ($resu_event_view = mysql_fetch_array($event_view)) {
				$evt_status = $resu_event_view['status'];
				$event_id = $resu_event_view['EID'];
				$event_title = $resu_event_view['titre'];
				echo "
				<tr>
					<td><span>".$event_id."</span></td>
					<td><a href='index.php?event=".$event_id."'>". mb_strimwidth($resu_event_view['titre'], 0, 20, '...')."</a> "; 
					if ($evt_status == 1) {
						echo "<div class='label label-success lab'><span class='glyphicon glyphicon-ok'></span></div>";
					}else{
						echo "<div class='label label-warning lab'><span class='glyphicon glyphicon-remove'></span></div>";
					}
					echo "</td>
					<td><a href='#'>". $resu_event_view['nom_ad']."</a></td>
					<td><a href='#'>". $resu_event_view['date_crea']."</a></td>
					<td><a href='index.php?event=".$event_id."' class='label label-info lab'><span class='glyphicon glyphicon-pencil'></span></a>
						<a href='index.php?del_event=".$event_id."&del_ev_title=".$event_title."'class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
				</tr>";
				}
			?>
		</table>
	</div>
</div>

</body>
</html>

	