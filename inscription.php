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
	<div class="row">
		<div class="col-sm-1"></div>		
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-12">
				<h3 class="page-header">Inscrivez-vous:<small> Beneficier de tout les aventages des membres du club Equip A</small></h3>
					<div class="form-group">
						
						<form action="index.php?page=envoi" method="post">
							<select name="genre" class="form-control">
								<option>Mr</option>
								<option>Mme</option>
								<option>Mlle</option>
							</select><br />
							<?php 
								text('text', 'nom', 'Votre nom', 'form-control' ); 
								text('text', 'prenom', 'Votre prénom', 'form-control' ); 
								number('number', 'age', '1', '100', '1', 'Votre âge', 'form-control' ); 
								number('number', 'poid', '1', '300', '1', 'Votre poid en Kg', 'form-control' ); 
								number('number', 'taille', '1', '300', '1', 'Vote taille en cm', 'form-control' ); 
								text('text', 'adresse', 'Votre adresse', 'form-control' ); 
								text('text', 'ville', 'Votre ville', 'form-control' ); 
								number('number', 'cp', '1', '99999', '1', 'Votre code postale', 'form-control' ); 
								text('tel', 'tel', 'Votre téléphone', 'form-control' ); 
								text('email', 'email', 'Votre adresse email', 'form-control' ); 
								text('text', 'login', 'Votre identifiant', 'form-control' ); 
								text('password', 'passwd', 'Votre mot de passe', 'form-control' ); 
								bouton('submit', 'Inscription', 'btn btn-info' );
								
								
								// text() Function Native from /Controller/form.php (L.24) :::::::::::::::::::::::::::::::::::
								// number() Function Native from /Controller/form.php (L.13) :::::::::::::::::::::::::::::::::
								// bouton() Function Native from /Controller/form.php (L.50) :::::::::::::::::::::::::::::::::

							// if ($passwd == $pwd_chk) {
							// 	echo "<button class='btn btn-warning' data-toggle='modal' data-target='#myModal' >Envoyer+</button>";
							// }else{
							// 	echo "<button type='submit' class='btn btn-info' >Envoyer</button>"; 

							// }
							?>
						</form>
					</div>

					<!-- Modal Window -->
					<?php 
					function modal(){
						echo "
							<div class='modal fade' id='myModal' role='dialog'>
							    <div class='modal-dialog'>
							    
							      <!-- Modal content-->
							      <div class='modal-content'>
							        <div class='modal-header'>
							          <button type='button' class='close' data-dismiss='modal'>&times;</button>
							          <h4 class='modal-title'>Modal Header</h4>
							        </div>
							        <div class='modal-body'>
							          <p>Some text in the modal.</p>
							        </div>
							        <div class='modal-footer'>
							          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>
						";
					}
					?>


				</div>
			</div><!--end secontary row-->
		</div>		
		<div class="col-sm-4"></div>		
	</div><!-- End primary Row-->
</div><!--End Container -->
</body>
</html>

