<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>

<div class="container">
	<section>

	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="page-header">
					<h3><span class='glyphicon glyphicon-star'></span>Tout l'actualité :<small> Suivre les dernières information de l'Association !</small></h3>
				</div>
			</div>
		<div class="col-sm-1"></div>
	</div>

		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-4">
						<?php 
							$img_ID = actu1('a_media_ID');
							$request = mysql_query("SELECT * from media where ID = '$img_ID'") or die(mysql_error());
							$resu_request = mysql_fetch_array($request);
							echo "<img height='100' class='thumbnail' src='".$resu_request['url']."'>";
						?>

						<h5 class="page-header"><?php echo actu1('a_titre'); ?></h5>
						<p class="divider">
							<?php echo mb_strimwidth(actu1('a_contenu'), 0, 300, "..."); ?>
						</p>
						<?php $art_id = actu1('a_ID'); echo "<a href='index.php?page=".$art_id."'><em>lire la suite</em></a><br /><br />"; ?>

					</div><!-- end Column -->
					<div class="col-sm-4">
						<?php 
							$img_ID = actu2('a_media_ID');
							$request = mysql_query("SELECT * from media where ID = '$img_ID'") or die(mysql_error());
							$resu_request = mysql_fetch_array($request);
							echo "<img height='100' class='thumbnail' src='".$resu_request['url']."'>";
						?>

						<h5 class="page-header"><?php echo actu2('a_titre'); ?></h5>
						<p class="divider">
							<?php echo mb_strimwidth(actu2('a_contenu'), 0, 300, "..."); ?>
						</p>
						<?php $art_id = actu2('a_ID'); echo "<a href='index.php?page=".$art_id."'><em>lire la suite</em></a><br /><br />"; ?>

					</div><!-- end column -->
					<div class="col-sm-4">
						<?php 
							$img_ID = actu3('a_media_ID');
							$request = mysql_query("SELECT * from media where ID = '$img_ID'") or die(mysql_error());
							$resu_request = mysql_fetch_array($request);
							echo "<img height='100' class='thumbnail' src='".$resu_request['url']."'>";
						?>

						<h5 class="page-header"><?php echo actu3('a_titre'); ?></h5>
						<p class="divider">
							<?php echo mb_strimwidth(actu3('a_contenu'), 0, 300, "..."); ?>
						</p>
						<?php $art_id = actu3('a_ID'); echo "<a href='index.php?page=".$art_id."'><em>lire la suite</em></a><br /><br />"; ?>

					</div><!-- end column -->
				</div><!-- end row -->
			</div>
			<div class="col-sm-3">
				<div>
					<ul class="list-group">
						<li class="list-group-item list-group-item-info"><strong>Archives:</strong> Voire aussi </li>
						<?php
						$archive = actuarchive();

						while ($resu_archive = mysql_fetch_array($archive)){

							$art_id = $resu_archive['ID'];

							echo " <li class='list-group-item'><a href='index.php?page=".$art_id."'>".$resu_archive['titre']."</a></li>";
						}
						
						// images() Function Native from /Controller/link.php (L.19) ::::::::::::::::::::::::::::::::::: 
						// actu1() Function Native from /model/actu_model.php (L.7) :::::::::::::::::::::::::::::::::::
						// actu2() Function Native from /model/actu_model.php (L.14) :::::::::::::::::::::::::::::::::::
						// actu3() Function Native from /model/actu_model.php (L.21) :::::::::::::::::::::::::::::::::::
						// actuarchive() Function Native from /model/actu_model.php (L.29) :::::::::::::::::::::::::::::::::::
						?>
					</ul>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div><!-- end row -->

	</section><!-- end section -->
</div><!-- end session container-->

</div>
</body>
</html>