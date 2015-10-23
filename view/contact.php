<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>

<div class="container" id="section-contact" data-target="#section-contact">
	<section>
		<div class="row">
			<div class="col-sm-1"></div>
				
				<div class="col-sm-10">
					<div class="page-header">
					<h3>Contact:<small> Vous avez une question, une suggestion, envoyer votre message <br />
					et un administrateur vous repondra dès que possible</small></h3></div>
					<div class="row">
						<div class="col-sm-6">
							<form action="index.php?page=envoi" method="post">
								<?php 
								function full_form(){
									text('text', 'v_nom', 'Votre nom et prénom', 'form-control' ); 
									text('text', 'v_adresse', 'Votre adresse complet', 'form-control' ); 
									text('email', 'email', 'Votre email', 'form-control' ); 
									text('tel', 'tel', 'Votre téléphone', 'form-control' ); 
									text('text', 'sujet_contact', 'Sujet de votre message', 'form-control' ); 
									textarea('message', 'Votre message', 'form-control' );
									bouton('submit', 'Envoyer', 'btn btn-info' );
								}

								function short_form(){
									text('text', 'sujet_contact', 'Sujet de votre message', 'form-control' ); 
									textarea('message', 'Votre message', 'form-control' );
									bouton('submit', 'Envoyer', 'btn btn-info' );
								}

								if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user'] !='') {
									echo "Bonjour <strong>".$_SESSION['nom_user']."</strong>. Editer ici votre message <br />
									et il sera envoyé avec vos coordoner à l'Administrateur.<br /><br />";
									short_form();
								}else{
									full_form();
								}

								// text() Function Native from /Controller/form.php (L.24) ::::::::::::::::::::::::::::::::::: 
								// textarea() Function Native from /Controller/form.php (L.33) ::::::::::::::::::::::::::::::::::: 
								// bouton() Function Native from /Controller/form.php (L.50) ::::::::::::::::::::::::::::::::::: 
								?>
							</form>
						</div><!-- end column part 1 -->

						<div class="col-sm-6">
							<ul class="list-group">
								<li class="list-group-item list-group-item-info"><p class="add"><strong>Pour nous retrouver</strong></p></li>
								<li class="list-group-item">
									<p><strong>Adresse</strong>
									<small> <br />1 Allée Jean Image<br /> 77200 Torcy, France </small></p>
								</li>
								<li class="list-group-item"><div id="map1" class="map"></div></li>
							</ul><!-- end list Group (MAP) -->
						</div><!-- end column part 2 -->
						
					</div><!-- end row -->
				
				</div>
			<div class="col-sm-1"></div>
		</div><!-- end default row -->
	</section>
</div><!-- end container for the contact form -->
	
</div>
</body>
</html>