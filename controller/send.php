<?php 	

# CONNEXION TO DATA BASE ////////////////////////////////////////////////
connexion();


// define('WEBDIR1', $_SERVER['DOCUMENT_ROOT']);
// define('WEBPRO1', 'neqa/');
require_once('models/user_model.php'); 

#==========================================================================================================
//GESTION DES CONNEXION A L'ESPACE MEMBRES ================================================================
#==========================================================================================================
	
	if (isset($_POST['m_login'])) {
		$m_login = htmlspecialchars($_POST['m_login'], ENT_QUOTES);
		$m_pass = htmlspecialchars($_POST['m_pass'], ENT_QUOTES);
		
		$request = u_login($m_login);
		
		// Verification du nom d'utilisateur 
		if ($m_login == $request['login']) {

			// Verification du mot de passe
			if ($m_pass == $request['pass']) {
				
				//En cas de login et de mot de passe correct : Connexion à l'espace membre 
				user_connexion($m_login);

			}else{
				// en cas de mot de passe incorect, retour à la page de connexion
				header('Location: index.php?page=connexion');
			}

		}else{
			// En cas d'utilisateur incorect, retour à la page de connexion
			header('Location: index.php?page=connexion');
		}
	}

	# LOGING TO ACCOUNT FUNCTION /////////////////////////////////////////////////////
	function user_connexion($m_login){
		$request = u_login($m_login);
		
		#SESSION INTI ///////////////////////////////////////////////////////
		$_SESSION['ID'] = $request['ID'];
		$_SESSION['nom_user'] = $request['nom'];
		$_SESSION['prenom'] = $request['prenom'];
		$_SESSION['age'] = $request['age'];
		$_SESSION['genre'] = $request['genre'];
		$_SESSION['poid'] = $request['poid'];
		$_SESSION['taille'] = $request['taille'];
		$_SESSION['adresse'] = $request['adresse'];
		$_SESSION['ville'] = $request['ville'];
		$_SESSION['cp'] = $request['cp'];
		$_SESSION['email'] = $request['email'];
		$_SESSION['tel'] = $request['tel'];		
		
		#REDIRECT TO THE SESSION PAGE ////////////////////////////////////////
		header('Location: /neqa/account/');
		#echo "<meta http-equiv='refresh' content='0;url=account/'>";
	}

//FIN GESTION DES CONNEXION A L'ESPACE MEMBRES ============================================================
//_________________________________________________________________________________________________________


#==========================================================================================================
//GESTION DES ENREGISTREMENT DES UTILISATEURS =============================================================
#==========================================================================================================

	#USER REGISTRATION CASE ////////////////////////////////////////////////
	if (isset($_POST['nom']) AND $_POST['nom'] != '' && isset($_POST['prenom']) AND $_POST['prenom'] != '') {

		$logreff = htmlspecialchars($_POST['login'], ENT_QUOTES);
		$curent_log = mysql_fetch_array(mysql_query("SELECT * FROM profile WHERE login = '$logreff'"));

		// Verifier s'il n'existe pas un compte pourtant le meme identifiant //////////
		if ($logreff != $curent_log['login']) {

			// Executer la fonction d'enregistrement /////////////////////////////////
			user_registration();

		}else{

			// Rediriger vers une autre page si un utilisateur portant le meme identifiant existe déjà ////////////////
			echo "
			<div class='container'>
				<div class='row'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
						<h3 class='page-header'>Attention ! <small>Un compte portant le même idantifiant existe déjà !</small></h3><br />
						<div class='btn-group'>
							<a href='index.php?page=inscription' class='btn btn-default'>Inscription</a>
							<a href='index.php?page=connexion' class='btn btn-info'>Connexion</a>
						</div>
					</div>
					<div class='col-sm-3'></div>
				</div>
			</div>
			";
		}/*END Login Check*/
		
	}

	function user_registration(){

		$genre = htmlspecialchars($_POST['genre'], ENT_QUOTES);
		$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
		$prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
		$age = htmlspecialchars($_POST['age'], ENT_QUOTES);
		$poid = htmlspecialchars($_POST['poid'], ENT_QUOTES);
		$taille = htmlspecialchars($_POST['taille'], ENT_QUOTES);
		$adresse = htmlspecialchars($_POST['adresse'], ENT_QUOTES);
		$ville = htmlspecialchars($_POST['ville'], ENT_QUOTES);
		$cp = htmlspecialchars($_POST['cp'], ENT_QUOTES);
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
		$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
		$login = htmlspecialchars($_POST['login'], ENT_QUOTES);
		$passwd = htmlspecialchars($_POST['passwd'], ENT_QUOTES);

		mysql_query("INSERT INTO profile (genre, nom, prenom, age, poid, taille, adresse, ville, cp, email, tel, login, pass, status)
		VALUES ('$genre', '$nom', '$prenom', '$age', '$poid', '$taille', '$adresse', '$ville', '$cp', '$email', '$tel', '$login', '$passwd', '1')") or die(mysql_error());

		echo " <div class='container'>
				 	<div class='row'>
				 		<div class='col-sm-4'></div>
				 		<div class='col-sm-4'>
				 			<p>Bonjour <strong>" . $genre ." ". $nom . "</strong> Votre inscription a ete bien enregistré ! 
							<br /> vous allez etre rediriver vers la page de connexion dans 5 sec </p>
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
				 ";
		echo "<meta http-equiv='refresh' content='2;url=index.php?page=connexion'>";
	}

//FIN GESTION DES ENREGISTREMENT DES UTILISATEURS =========================================================
//_________________________________________________________________________________________________________



#==========================================================================================================
//GESTION DES ENVOI DES MESSAGES ==========================================================================
#==========================================================================================================
	if (isset($_POST['sujet_contact']) AND $_POST['sujet_contact'] != '' &&  
	 isset($_POST['message']) AND $_POST['message'] != ''){

	 	// Executer la fonction d'envoie des messages /////////////////////////////////
		if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user'] !='') {
			send_short_msg();
		}else{
			send_long_msg();
		}
	}

	#SEND MESSAGE ///////////////////////////////////////////////////////////
	function send_long_msg(){

		$nom = htmlspecialchars($_POST['v_nom'], ENT_QUOTES);
		$adresse = htmlspecialchars($_POST['v_adresse'], ENT_QUOTES);
		$email= htmlspecialchars($_POST['email'], ENT_QUOTES);
		$tel= htmlspecialchars($_POST['tel'], ENT_QUOTES);
		$sujet = htmlspecialchars($_POST['sujet_contact'], ENT_QUOTES); 
		$message= htmlspecialchars($_POST['message'], ENT_QUOTES);

		mysql_query("INSERT INTO contact (nom, adresse, email, tel, sujet, message)
					VALUES ('$nom', '$adresse', '$email', '$tel', '$sujet', '$message' )")or die(mysql_error());
		
		header('Location: index.php?page=contact');
	}/*END Function send_long_msg*/

	function send_short_msg(){

		$nom = $_SESSION['nom_user'];
		$adresse = $_SESSION['adresse']." ".$_SESSION['cp']." ".$_SESSION['ville'];
		$email= $_SESSION['email'];
		$tel= $_SESSION['tel'];
		$sujet = htmlspecialchars($_POST['sujet_contact'], ENT_QUOTES); 
		$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

		mysql_query("INSERT INTO contact (nom, adresse, email, tel, sujet, message)
					VALUES ('$nom', '$adresse', '$email', '$tel', '$sujet', '$message' )")or die(mysql_error());
		
		header('Location: index.php?page=contact');
	}/*END Function send_short_msg*/

//FIN GESTION DES ARTICLE D'ACTUALITE =====================================================================
//_________________________________________________________________________________________________________

 ?>