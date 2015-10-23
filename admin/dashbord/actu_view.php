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


?>

<div class="panel panel-default" id="actualite">
	<div class="panel-heading"><h4> Liste des Articles : Cliquer sur une titre pour modifier</h4></div>
	<div class="panel-body wrap_art">
		<table class="table">
			<tr>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Date de PUB</th>
				<th>Opperation</th>
			</tr>

			<?php 
			$actu_view = actu_view();
			// actu_view() Function Native from /Model/actu_model.php (l.61) ::::::::::::::::::::::::::

			while ($resu_actu_view = mysql_fetch_array($actu_view)) {

				$titre_act = $resu_actu_view['titre'];
				$rq = mysql_query("SELECT * from actualite where titre ='$titre_act' ")or die(mysql_error());
				$resu_rq = mysql_fetch_array($rq) or die(mysql_error());
				$stat = $resu_rq['status'];
				$article_id = $resu_rq['ID'];
				$art_status = $resu_rq['status'];
				$article_title = $resu_actu_view['titre'];

				echo "
				<tr>
					<td><a href='index.php?post=".$article_id."'>". mb_strimwidth($resu_actu_view['titre'], 0, 30, '...')."</a> "; 
					if ($art_status == 1) {
						echo "<div class='label label-success lab'><span class='glyphicon glyphicon-ok'></span></div>";
					}else{
						echo "<div class='label label-warning lab'><span class='glyphicon glyphicon-remove'></span></div>";
					} 
					echo "</td>
					<td><a href='index.php?post=".$article_id."'>". $resu_actu_view['nom_ad']."</a></td>
					<td><a href='index.php?post=".$article_id."'>". $resu_actu_view['dates']."</a></td>
					<td><a href='index.php?post=".$article_id."' class='label label-info lab'><span class='glyphicon glyphicon-pencil'></span></a>
						<a href='index.php?del_art=".$article_id."&del_art_title=".$article_title."'class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
				</tr>";
				}
			?>
		</table>
	</div>
</div>

<!-- 
<div id='suppr' class='modal fade' role='dialog'>
	<div class='modal-dialog'>

		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='modal-title page-header'> Suppression d'un article</h4>
				<div class='modal-body'>
				<p>Vous êtes sur le point de supprimer l'article <small>".$resu_actu_view['titre']."</small></p>	
				</div>
				<div class='modal-footer'>
					<div class='btn-group'>
						<button type='button' class='btn btn-default' data-dismiss='modal'>Annuler</button>
						<a href='#' class='btn btn-danger'>Supprimer</a>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>	 -->
</body>
</html>