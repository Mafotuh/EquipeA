<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>

<div class="container"  id="section-evenement" data-target="#section-evenement">
	<section>
		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="page-header">
						<h3>Evenement :<small> Sa ce passe dans votre ville de Torcy</small></h3>
						<div class="row">
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item list-group-item-info"><strong><?php echo event1('titre'); ?></strong></li>
									<li class="list-group-item"><?php images('battle_logobi.jpg', 'img-thumbnail'); ?></li>
									<li class="list-group-item"><strong>Nombre de bénévoles :</strong> <?php echo event1('benevole'); ?> bénévoles</li>
									<li class="list-group-item"><strong>Nombre d’artistes :</strong> <?php echo event1('artiste'); ?> artistes venus principalement d’ile de France</li>
									<li class="list-group-item"><strong>Nombres de spectateur :</strong> <?php echo event1('visiteur'); ?> personnes étaient présentent lors de cet événement</li>
									<li class="list-group-item"><strong>Vidéo Youtube :</strong> vidéo sur Youtube atteint à ce jour un nombre des vues de : <?php echo event1('youtube')." ".event1('contenu'); 

										// images() Function Native from /Controller/link.php (L.19) ::::::::::::::::::::::::::::::::::: 
										// event1() Function Native from /model/event_model.php (L.8) ::::::::::::::::::::::::::::::::::: 
									?>  !</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item list-group-item-info"><strong><?php echo event2('titre'); ?></strong></li>
									<li class="list-group-item"><?php images('explosif_show.jpg', 'img-thumbnail'); ?></li>
									<li class="list-group-item"><strong>Nombre de bénévoles :</strong> <?php echo event2('benevole'); ?> bénévoles</li>
									<li class="list-group-item"><strong>Nombre d’artistes :</strong> <?php echo event2('artiste'); ?> artistes venus principalement d’ile de France</li>
									<li class="list-group-item"><strong>Nombres de spectateur :</strong> <?php echo event2('visiteur'); ?> personnes étaient présentent lors de cet événement</li>
									<li class="list-group-item"><strong>Vidéo Youtube :</strong> vidéo sur Youtube atteint à ce jour un nombre des vues de : <?php echo event2('youtube')." ".event2('contenu'); 

										// event2() Function Native from /model/event_model.php (L.16) ::::::::::::::::::::::::::::::::::: 
									?>  !</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item list-group-item-info"><strong><?php echo event3('titre'); ?></strong></li>
									<li class="list-group-item"><?php images('explosif_show-2.jpg', 'img-thumbnail'); ?></li>
									<li class="list-group-item"><strong>Nombre de bénévoles :</strong> <?php echo event3('benevole'); ?> bénévoles</li>
									<li class="list-group-item"><strong>Nombre d’artistes :</strong> <?php echo event3('artiste'); ?> artistes venus principalement d’ile de France</li>
									<li class="list-group-item"><strong>Nombres de spectateur :</strong> <?php echo event3('visiteur'); ?> personnes étaient présentent lors de cet événement</li>
									<li class="list-group-item"><strong>Vidéo Youtube :</strong> vidéo sur Youtube atteint à ce jour un nombre des vues de : <?php echo event3('youtube')." ".event3('contenu'); 

										// event3() Function Native from /model/event_model.php (L.24) ::::::::::::::::::::::::::::::::::: 
									?>  !</li>
								</ul>
							</div>							
						</div><!-- end row -->
					</div>
				</div>
			<div class="col-sm-1"></div>
		</div>
	</section>
</div>
	
</div>
</body>
</html>