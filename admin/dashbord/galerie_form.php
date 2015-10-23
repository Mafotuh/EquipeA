<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if (isset($_POST['titre_img'])) {
		enreg_img_galerie();
		affiche_img_galerie();
	}else{
		affiche_img_galerie();
	}


// Affichage des images de la galerie 
function affiche_img_galerie(){
	echo "
	<div class='panel panel-default'>
	<div class='panel-heading'>Liste des images de la Galerie </div>
		<div class='panel-body wrap'>
			<table class='table'>
				<tr>
					<th>Titre</th>
					<th>image</th>
					<th>Action</th>
				</tr>";

				$request = mysql_query("SELECT m.ID m_id, a.nom_ad nom_a, g.titre ttl, g.contenu cont, m.url url_m
										FROM galerie g
										INNER JOIN admin a ON a.ID = g.admin_ID
										INNER JOIN media m ON g.media_ID = m.ID") or die(mysql_error());
				while ($resu_request = mysql_fetch_array($request)) {

					$img_id = $resu_request['m_id'];
					$admin = $resu_request['nom_a'];
					$img_ttl = $resu_request['ttl'];
					$img_cont = $resu_request['cont'];
					$img_url = $resu_request['url_m'];

					echo "<tr>
							<td>".$resu_request['ttl']."</td>
							<td><span type='button' class='' data-toggle='modal' data-target='#myModal'>
								<img height='100' class='thumbnail all_img inline-block' src='".$resu_request['url_m']."'>
								</span><br /></td>
							<td><a href='index.php?del_img=".$img_id."&del_img_ttl=".$img_ttl."&del_img_url=".$img_url."' class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
						</tr>";
					}
					echo "</table>
					</div>
				</div> "; 
		// END Panel 
}

// Enregistreemnet des images de la galerie 
function enreg_img_galerie(){
	$img_gal_ttl = htmlspecialchars($_POST['titre_img'], ENT_QUOTES);
	$gal_title = htmlspecialchars($_POST['gal_title'], ENT_QUOTES);
	$gal_cont = htmlspecialchars($_POST['contenu'], ENT_QUOTES);

	$rq = mysql_query("SELECT * from media where titre = '$img_gal_ttl' ") or die(mysql_error());
	$resu_rq = mysql_fetch_array($rq);

	$img_id = $resu_rq['ID'];
	$admin_ID = $_SESSION['ID'];

	mysql_query("INSERT INTO galerie (admin_ID, media_ID, titre, contenu) 
				VALUES ('$admin_ID', '$img_id', '$gal_title', '$gal_cont')") or die(mysql_error());

	header('Location: index.php?form=galerie_form');
}

?>

<br >
	<form class="form" action="index.php?form=galerie_form" method="post">
	<?php 
		mediafile();
		text('text', 'gal_title', 'Titre de l image', 'form-control' );
		textarea('contenu', 'Description de l image', 'form-control' );
		bouton('submit', 'Envoyer', 'btn btn-info' );

		// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
		// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
		// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
		// mediafile() Function Native from /models/actu_models.php (L.60) ::::::::::::::::::::::::::::::::::: 
	?>
	</form>
	<img src="" alt="">
	
</body>
</html>