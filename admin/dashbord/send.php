<?php


# CONNEXION TO DATA BASE //////////////////////////////////////////////////////////////////////////////////
connexion();
// connexion() Function Native from /Controller/connexion.php (L.16) :::::::::::::::::::::::::::::::::::::: 
	

#==========================================================================================================
//GESTION DES ARTICLES D'ACTUALITE ========================================================================
#==========================================================================================================
	
	# ENREGISTREMENT D'UNE ACTUALITE //////////////////////////////////////////////////////////////////////
	if (isset($_POST['titreactu']) AND $_POST['titreactu'] != '') {

		// APPEL DE LA FONCTION D'ENREGISTREMENT
		actualite_enreg();
		}

	// FONCTION D'ENREGISTREMENT DES ACTUALITE
	function actualite_enreg(){
		$auteur = $_SESSION['nom_ad'];
		$requete = mysql_fetch_array(mysql_query("SELECT * FROM admin WHERE nom_ad = '$auteur'"));
		$admin_ID = $requete['ID'];

		$img = htmlspecialchars($_POST['titre_img'], ENT_QUOTES);
		$titre = htmlspecialchars($_POST['titreactu'], ENT_QUOTES);
		$contenu = htmlspecialchars($_POST['contenu'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);

		$rq = mysql_query("SELECT * from media where titre = '$img' ") or die(mysql_error());
		$resu_rq = mysql_fetch_array($rq);

		$img_id = $resu_rq['ID'];

		mysql_query("INSERT INTO actualite (titre, contenu, status, admin_ID, media_ID) 
					VALUES ('$titre', '$contenu', '$status', '$admin_ID', '$img_id')") or die(mysql_error());
		header('location: index.php?form=actu_view');		
	}

	# MISE A JOUR D'UNE ACTUALITE //////////////////////////////////////////////////////////////////////////
	if (isset($_POST['up_titreactu']) AND $_POST['up_titreactu'] != '') {

		$img = htmlspecialchars($_POST['titre_img'], ENT_QUOTES);
		$up_titreactu = htmlspecialchars($_POST['up_titreactu'], ENT_QUOTES);
		$contenu = htmlspecialchars($_POST['contenu'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);
		$art_id = htmlspecialchars($_POST['art_id'], ENT_QUOTES);

		$rq = mysql_query("SELECT * from media where titre = '$img' ") or die(mysql_error());
		$resu_rq = mysql_fetch_array($rq);

		$img_id = $resu_rq['ID'];
		// echo $img_id;
		// exit();
		// APPEL DE LA FONCTION DE MISE A JOUR
		maj_actu($up_titreactu, $contenu, $status, $art_id, $img_id);
	}	

	// FONCTION DE MISE A JOUR
	function maj_actu($up_titreactu, $contenu, $status, $art_id, $img_id){
		mysql_query("UPDATE actualite SET titre = '$up_titreactu', contenu = '$contenu', status = '$status', media_ID = '$img_id'
					WHERE ID ='$art_id'")or die(mysql_error());
		header("location: index.php?form=actu_view");
	}	

	# SUPPRESSION D'UNE ACTUALITE //////////////////////////////////////////////////////////////////////////
	if (isset($_GET['supr_ar']) AND $_GET['supr_ar']!='') {
		$art_id = $_GET['supr_ar'];

		// APPEL DE LA FONCTION DE SUPPRESSION
		art_suppre($art_id);
	}

	// FONCTION DE SUPPRESSION DES ACTUALITE
	function art_suppre($art_id){
		mysql_query("DELETE FROM actualite WHERE ID ='$art_id' ") or die(mysql_error());

		header('location: index.php?form=actu_view');
	}
//FIN GESTION DES ARTICLE D'ACTUALITE =====================================================================
//_________________________________________________________________________________________________________


#==========================================================================================================
//GESTION DES EVENEMENT SPORTIF ===========================================================================
#==========================================================================================================

	#  ENREGISTREMENT D'UN EVENEMENT SPORTIF //////////////////////////////////////////////////////////////
	if (isset($_POST['evsport_titre']) AND $_POST['evsport_titre']!='') {

			// APPEL DE LA FONCTION D'ENREGISTREMENT
			evsport_enreg();
		}

	// FONCTION D'ENREGISTREMENT DES EVENEMENT SPORTIF
	function evsport_enreg(){
		echo "on est ici";
		$nom_ad = $_SESSION['nom_ad'];
		$rq = mysql_fetch_array(mysql_query("SELECT * from admin WHERE nom_ad = '$nom_ad' ")) or die(mysql_error());
		$admin_ID = $rq['ID'];		

		$evsport_titre = htmlspecialchars($_POST['evsport_titre'], ENT_QUOTES);
		$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
		$lieu = htmlspecialchars($_POST['lieu'], ENT_QUOTES);
		$nbr_part = htmlspecialchars($_POST['nbr_part'], ENT_QUOTES);
		$date_event = htmlspecialchars($_POST['date_event'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);

		mysql_query("INSERT into event_sport(titre, description, lieu, nbr_part, date_event, status, admin_ID) 
					VALUES('$evsport_titre', '$description', '$lieu', '$nbr_part', '$date_event', '$status', '$admin_ID') ")
					or die(mysql_error());
		header('location: index.php?form=evsport_view');
	}

	# MISE A JOUR D'UNE EVENEMENT SORTIF //////////////////////////////////////////////////////////////////
	if (isset($_POST['up_tr_evsport']) AND $_POST['up_tr_evsport'] != '') {

		$up_tr_evsport = htmlspecialchars($_POST['up_tr_evsport'], ENT_QUOTES);
		$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
		$lieu = htmlspecialchars($_POST['lieu'], ENT_QUOTES);
		$nbr_part = htmlspecialchars($_POST['nbr_part'], ENT_QUOTES);
		$date_event = htmlspecialchars($_POST['date_event'], ENT_QUOTES);
		$ev_id = htmlspecialchars($_POST['ID'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);

		// APPEL DE LA FONCTION DE MISE A JOUR
		maj_evSport($up_tr_evsport, $description, $lieu, $nbr_part, $date_event, $ev_id, $status);
	}

	// FONCTION DE MISE A JOUR
	function maj_evSport($up_tr_evsport, $description, $lieu, $nbr_part, $date_event, $ev_id, $status){
		mysql_query("UPDATE event_sport 
					SET titre = '$up_tr_evsport', description = '$description', lieu = '$lieu', nbr_part = '$nbr_part', date_event = '$date_event',	status = $status
					WHERE ID ='$ev_id'")or die(mysql_error());
		header("location: index.php?form=evsport_view");
	}

	# SUPPRESSION D'UNE EVENEMENT SPORTIF /////////////////////////////////////////////////////////////////
	if (isset($_GET['supr_evspr']) AND $_GET['supr_evspr']!='') {
		$ev_spr_id = $_GET['supr_evspr'];

		// APPEL DE LA FONCTION DE SUPPRESSION
		ev_sport_sup($ev_spr_id);
	}

	// FONCTION DE SUPPRESSION DES EVENEMENT SPORTIF
	function ev_sport_sup($ev_spr_id){

		mysql_query("DELETE FROM event_sport WHERE ID ='$ev_spr_id' ") or die(mysql_error());
		header('location: index.php?form=evsport_view');
	}

//FIN GESTION DES EVENEMENT SPORTIF =======================================================================
//_________________________________________________________________________________________________________


#==========================================================================================================
//GESTION DES EVENEMENT DE L'ASSOCIATION ==================================================================
#==========================================================================================================

	#  ENREGISTREMENT D'UN EVENEMENT DE L'ASSO ////////////////////////////////////////////////////////////
	if (isset($_POST['titreevent']) AND $_POST['titreevent'] != '' ) {

			// APPEL DE LA FONCTION D'ENREGISTREMENT
			evenement_enreg();
		}
	
	// FONCTION D'ENREGISTREMENT DES EVENEMENT SPORTIF
	function evenement_enreg(){
		$auteur = $_SESSION['nom_ad'];
		$requete = mysql_fetch_array(mysql_query("SELECT * FROM admin WHERE nom_ad = '$auteur'"));
		$admin_ID = $requete['ID'];

		$titreevent = htmlspecialchars($_POST['titreevent'], ENT_QUOTES);
		$benevole = htmlspecialchars($_POST['benevole'], ENT_QUOTES);
		$artiste = htmlspecialchars($_POST['artiste'], ENT_QUOTES);
		$visiteur = htmlspecialchars($_POST['visiteur'], ENT_QUOTES);
		$youtube = htmlspecialchars($_POST['youtube'], ENT_QUOTES);
		$contenu = htmlspecialchars($_POST['contenu'], ENT_QUOTES);
		$date_eve = htmlspecialchars($_POST['date_eve'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);

		mysql_query("INSERT INTO evenement (titre, benevole, artiste, visiteur, youtube, contenu, status, date_eve, admin_ID)
					VALUES ('$titreevent', '$benevole', '$artiste', '$visiteur', '$youtube', '$contenu', '$status', '$date_eve', '$admin_ID')")
					or die(mysql_error());
		header('location: index.php?form=event_view');
	}

	# MISE A JOUR D'UNE EVENEMENT DE L'ASSO ///////////////////////////////////////////////////////////////
	if (isset($_POST['up_ttre_event']) AND $_POST['up_ttre_event'] != '') {

		$ev_id = htmlspecialchars($_POST['ID'], ENT_QUOTES);
		$up_ttre_event = htmlspecialchars($_POST['up_ttre_event'], ENT_QUOTES);
		$benevol = htmlspecialchars($_POST['benevol'], ENT_QUOTES);
		$artiste = htmlspecialchars($_POST['artiste'], ENT_QUOTES);
		$visiteur = htmlspecialchars($_POST['visiteur'], ENT_QUOTES);
		$youtube = htmlspecialchars($_POST['youtube'], ENT_QUOTES);
		$contenu = htmlspecialchars($_POST['contenu'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['status'], ENT_QUOTES);

		// APPEL DE LA FONCTION DE MISE A JOUR
		maj_event($up_ttre_event, $benevol, $artiste, $visiteur, $youtube, $ev_id, $contenu, $status);
	}

	// FONCTION DE MISE A JOUR
	function maj_event($up_ttre_event, $benevol, $artiste, $visiteur, $youtube, $ev_id, $contenu, $status){
		mysql_query("UPDATE evenement 
					SET titre = '$up_ttre_event', benevole = '$benevol', artiste = '$artiste', visiteur = '$visiteur', youtube = '$youtube', contenu = '$contenu', status = $status
					WHERE ID ='$ev_id'")or die(mysql_error());
		header("location: index.php?form=event_view");
	}

	# SUPPRESSION D'UNE EVENEMENT DE L'ASSOCIATION  ////////////////////////////////////////////////////////
	if (isset($_GET['supr_event']) AND $_GET['supr_event']!='') {
		$event_id = $_GET['supr_event'];

		// APPEL DE LA FONCTION DE SUPPRESSION
		event_asso($event_id);
	}

	// FONCTION DE SUPPRESSION DES EVENEMENT DE L'ASSO
	function event_asso($event_id){

		mysql_query("DELETE FROM evenement WHERE ID ='$event_id' ") or die(mysql_error());
		header('location: index.php?form=event_view');
	}

//FIN GESTION DES EVENEMENT DE L'ASSOCIATION ==============================================================
//_________________________________________________________________________________________________________



#==========================================================================================================
//GESTION DES MESSAGES ENVOYE PAR LES VISITEUR DU SITE ====================================================
#==========================================================================================================

	# SUPPRESSION DES MESSAGES ENVOYE PAR LES VISITEUR DU SITE  ///////////////////////////////////////////
	if (isset($_GET['supr_msg']) AND $_GET['supr_msg']!='') {
		$msg_id = $_GET['supr_msg'];

		// APPEL DE LA FONCTION DE SUPPRESSION
		message_visiteur($msg_id);
	}

	// FONCTION DE SUPPRESSION DES EVENEMENT DE L'ASSO
	function message_visiteur($msg_id){

		mysql_query("DELETE FROM contact WHERE ID ='$msg_id' ") or die(mysql_error());
		header('location: index.php?form=message');
	}

//FIN GESTION DES EVENEMENT DE L'ASSOCIATION ==============================================================
//_________________________________________________________________________________________________________


#==========================================================================================================
//GESTION DE LA MODERATION D'UNE PERSONNE =================================================================
#==========================================================================================================

	# teste le staus de la personne //////////////////////////////////
	if (isset($_POST['stat_pers']) AND $_POST['stat_pers']!='') {

		$id_pers = htmlspecialchars($_POST['id_pers'], ENT_QUOTES);
		$status = htmlspecialchars($_POST['stat_pers'], ENT_QUOTES);

		if ($status == "activé") {
			$stat_pers = 1;
		}elseif ($status == "Désactivé") {
			$stat_pers = 0;
		}
		// APPEL DE LA FONCTION DE MODERATION
		moderation($stat_pers, $id_pers);
	}

	// FONCTION DE LA MODERATION 
	function moderation($stat_pers, $id_pers){
		mysql_query("UPDATE profile SET status = '$stat_pers' WHERE ID ='$id_pers'")or die(mysql_error());
		
		header("location: index.php?form=membre_view");
	}	

//FIN GESTION DE LA MODERATION D'UNE PERSONNE =============================================================
//_________________________________________________________________________________________________________



	if (isset($_POST['nvll_raison']) AND $_POST['nvll_raison'] != '') {
		raisonner();
	}

	if (isset($_POST['raison']) AND $_POST['raison'] != '') {
		#banie();
	}
	
	function raisonner(){
		$admin_nom = $_SESSION['nom_ad'];
		$rq = mysql_fetch_array(mysql_query("SELECT * from admin where nom_ad = '$admin_nom'")) or die(mysql_error());
		$admin_id = $rq['ID'];
		
		$nvll_raison = htmlspecialchars($_POST['nvll_raison'], ENT_QUOTES);
		mysql_query("INSERT into moderation(raison, admin_ID) VALUES('$nvll_raison', '$admin_id')") or die(mysql_error());
		header('location: index.php?form=membre_view');
	}


#==========================================================================================================
//ENVOIE DES IMAGES =======================================================================================
#==========================================================================================================

		// definition des constant des chemain d'accès
		define('FILEROOT', $_SERVER['DOCUMENT_ROOT']);
		define('FILEDIR', '/neqa/webroot/img/upload/');

		//definir un nom du fichier
		$file_dir = FILEROOT.FILEDIR;
		$filename = basename($_FILES['media_img']['name']);
		$filesize = $_FILES['media_img']['size'];
		$filetype = pathinfo($filename, PATHINFO_EXTENSION);
		$fil_link = $file_dir.$filename;
		$fileurl = FILEDIR.$filename;

		// Recapitulatif des information de l'Image
		// echo "Rep : ".$file_dir."<br />";
		// echo "Nom : ".$filename."<br />";
		// echo "taille : ".$filesize."<br />";
		// echo "type : ".$filetype."<br />";
		// echo "lien : ".$fileurl."<br />";
		// exit();

	# EREGISTREMENT DES IMAFES ////////////////////////////////////////////////////////////////////////
	if  (!empty($filename)) {

		//Initialisation d'une variable de verification "$filecheck"
		$filecheck = 1;

		// Verification si le fichier existe dand le repertoir cible
		if (file_exists($fil_link)) {
			echo "Il existe deja un fichier portant le meme nom <br /> Merci de choisir un autre fichier ou renomer celui-ci<br />";
			$filecheck = 0;
		}

		// Verification de la taille de l'Image par rapport à la taille imposé par le formulaire
		if ($filesize > 1000000) {
			$filecheck = 0;
			echo "La taille du fichier est superieur à la taille demander <br />";
		}

		// Verification du type de fichier par rapport au type imposé par le formulaure
		if ($filetype != 'jpg' && $filetype != 'png' && $filetype != 'bmp' && $filetype != 'gif' && $filetype != 'jpeg') {
			echo "Merci de choisir un fichier de même type que celle lister sur le formulaire<br />";
			$filecheck = 0;
		}

		// Verificaiton si les etapes ont été reussi et la variable "$filecheck" n'a pas la valeur de 0
		if ($filecheck == 0) {
			echo "Il y a eu une erreur lors de la mise en ligne de votre images<br />
			<a href='index.php?form=media_form'>Cliquer ici</a> pour recommancer";

		}else{
			// Preparation de la mise en ligne de l'image
			if (move_uploaded_file($_FILES['media_img']['tmp_name'], $fil_link)) {

				mysql_query("INSERT INTO media(titre, url) values('$filename', '$fileurl') ") or die(mysql_error());
				echo "Votre fichier est mise en ligne avec succès";

				header("location: index.php?form=media_form");
			}else{
				echo "quelque chose à du se male passé et votre image n'a pas été mise en ligne. <br /> 
				Verifier si vous n'avait pas menqué une des prerequis ci-dessus et réessayer<br />
				<a href='index.php?form=media_form'>Cliquer ici</a> pour recommancer";

			}
		}
		
		
	}	

	# SUPPRESSION D'UNE IMAGE //////////////////////////////////////////////////////////////////////////
	if (isset($_GET['supr_img']) AND $_GET['supr_img']!='') {
		define('IMG_PATH', $_SERVER['DOCUMENT_ROOT']);

		$img_id = $_GET['supr_img'];
		$img_url = IMG_PATH.$_GET['supr_img_url'];
		
		// APPEL DE LA FONCTION DE SUPPRESSION
		img_suppre($img_id, $img_url);
		
		header('location: index.php?form=media_form');
	}

	// FONCTION DE SUPPRESSION DES ACTUALITE
	function img_suppre($id, $path){
		mysql_query("DELETE FROM media WHERE ID ='$id' ") or die(mysql_error());
		unlink($path);
		
	}
//FIN ENVOIE DES IMAGES ===================================================================================
//_________________________________________________________________________________________________________


		
	// Moderation sur la liste total des membres inscrit ////////////////////////


	// // Moderation sur les membres Banie du site /////////////////////////////////
	// function moderation_mb($stat_pers, $id_pers){
	// 	mysql_query("UPDATE profile SET status = '$stat_pers' WHERE ID ='$id_pers'")or die(mysql_error());
		
	// 	header("location: index.php?form=membre_view");
	// }	

	// // Moderation sur les membres Actifs  ///////////////////////////////////////
	// function moderation_ma($stat_pers, $id_pers){
	// 	mysql_query("UPDATE profile SET status = '$stat_pers' WHERE ID ='$id_pers'")or die(mysql_error());
		
	// 	header("location: index.php?form=membre_view");
	// }
?>