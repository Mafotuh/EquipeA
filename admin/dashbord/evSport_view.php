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
	<div class="panel-heading"><h4> Liste des evenement Sportif : Cliquer sur une titre pour modifier</h4></div>
	<div class="panel-body">
		<table class="table">
			<tr>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Date evenement</th>
				<th>Opperation</th>
			</tr>
			<?php 
			$evsport_view = evsport_view();
			// evsport_view() Function Native from /Model/event_model.php (l.59) ::::::::::::::::::::::::::
			
			while ($resu_evsport_view = mysql_fetch_array($evsport_view)) {
				$evSport_titre = $resu_evsport_view['titre'];
				
				$rq = mysql_query("SELECT * from event_sport where titre ='$evSport_titre' ")or die(mysql_error());
				$resu_rq = mysql_fetch_array($rq);
				
				$evSport_id = $resu_rq['ID'];
				$evSport_title = $resu_rq['titre'];
				$evSport_stat = $resu_rq['status'];

				echo "
				<tr>
					<td><a href='index.php?ev_sport=".$evSport_id."'>". mb_strimwidth($resu_evsport_view['titre'], 0, 30, '...')."</a> "; 
					if ($evSport_stat == 1) {
						echo "<div class='label label-success lab'><span class='glyphicon glyphicon-ok'></span></div>";
					}else{
						echo "<div class='label label-warning lab'><span class='glyphicon glyphicon-remove'></span></div>";
					} 
					echo "</td>
					<td>". $resu_evsport_view['nom_ad']."</td>
					<td>";

					if ( $resu_evsport_view['date_event'] < date("Y-m-d")) {
						echo "<span class='label label-warning'>".$resu_evsport_view['date_event']."</span>";
					}else{
						echo "<span class='label label-primary'>".$resu_evsport_view['date_event']."</span>";
					}

					echo "</td>
					<td><a href='index.php?ev_sport=".$evSport_id."' class='label label-info lab'><span class='glyphicon glyphicon-pencil'></span></a>
						<a href='index.php?del_ev_sport=".$evSport_id."&del_evspr_title=".$evSport_title."'class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
				</tr>";
				}
			?>
		</table>
	</div>
</div>

</body>
</html>