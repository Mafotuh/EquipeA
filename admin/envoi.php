<?php 

	$logreff = htmlspecialchars($_POST['login']);
	$passwd = htmlspecialchars($_POST['pass']);
	$request = adm_connect($logreff);
	// adm_connect() Function Native from /model/user_model.php (L.14) ::::::::::::::::::::::::::::::::::: 

	#STOCAGE DES DONNEE EN MEMOIRE DES VALEUR A TESTER POUR LA CONNEXION ////////
	$login = $request['login'];
	$pass = $request['pass'];
	
	if ($logreff == $login) {

		if ($passwd == $pass) {

			adm_account_log();
		}else{
			header('Location: index.php?admin=signin');
		}

	}else{	
		header('Location: index.php?admin=signin');
	}


	function adm_account_log(){
		$logreff = $_POST['login'];
		$request = adm_connect($logreff);
		#SESSION INIT ///////////////////////////////////////////////////////////
		$_SESSION['ID'] = $request['ID'];
		$_SESSION['civilite'] = $request['civilite'];
		$_SESSION['nom_ad'] = $request['nom_ad'];
		$_SESSION['prenom_ad'] = $request['prenom_ad'];
		
		#REDIRECTING TO THE PAGE SESSION ////////////////////////////////////////
		echo "
		
			 <div class='container'>
			 	<div class='row'>
			 		<div class='col-sm-4'></div>
			 		<div class='col-sm-4'>
			 			<p>Bonjour ".$_SESSION['civilite']." ".$_SESSION['nom_ad']."<br />Merci de patienter pendent que nous traitons votre requette...</p>
			 			<div class='row'>
			 				<div class='col-sm-3'></div>
			 				<div class='col-sm-6'>
			 					<div class='progress'>
									<div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar'
										aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'>Loading...
									</div>
								</div>
			 				</div>
			 				<div class='col-sm-3'></div>
			 			</div>
			 		</div>
			 		<div class='col-sm-4'></div>
			 	</div>
			 </div>

			 <meta http-equiv='refresh' content='3;url=dashbord/'>
		";
	}


 ?>