<?php
define('ACT_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('ACT_WEBPRO', '/neqa/');
require_once(ACT_WEBDIR.ACT_WEBPRO.'controller/connexion.php'); 

# ACTUALITE REQUEST ///////////////////////////////////////////////////////////////////////

connexion();

function actu1($ntable){
	$actu_rq = mysql_query("SELECT a.titre a_titre, m.titre m_titre, a.media_ID a_media_ID, a.contenu a_contenu, a.ID a_ID 
							FROM actualite a right join media m on a.media_ID = m.ID 
							WHERE a.status ='1' ORDER BY a.ID DESC LIMIT 0, 1") or die(mysql_error());
	$actu_resu = mysql_fetch_array($actu_rq);
	return $actu_resu[$ntable];
}

function actu2($ntable){
	$actu_rq = mysql_query("SELECT a.titre a_titre, m.titre m_titre, a.media_ID a_media_ID, a.contenu a_contenu, a.ID a_ID 
							FROM actualite a right join media m on a.media_ID = m.ID 
							WHERE a.status ='1' ORDER BY a.ID DESC LIMIT 1, 1") or die(mysql_error());
	$actu_resu = mysql_fetch_array($actu_rq);
	return $actu_resu[$ntable];
}

function actu3($ntable){
	$actu_rq = mysql_query("SELECT a.titre a_titre, m.titre m_titre, a.media_ID a_media_ID, a.contenu a_contenu, a.ID a_ID 
							FROM actualite a right join media m on a.media_ID = m.ID 
							WHERE a.status ='1' ORDER BY a.ID DESC LIMIT 2, 1") or die(mysql_error());
	$actu_resu = mysql_fetch_array($actu_rq);
	return $actu_resu[$ntable];
}

function actuarchive(){
	$data_archive = mysql_query("SELECT * FROM actualite WHERE status ='1' ORDER BY ID DESC LIMIT 3, 5")  or die(mysql_error());
	return $data_archive;
}

# ADMIN/DASHBORD/HOME.PHP REQUEST ////////////////////////////////////////////////////////
# ACTUALITE REQUEST //////////////////////////////////////////////////////////////////////

function actualite($ntable){
	$actu = mysql_query("SELECT COUNT(*) as actu FROM actualite") or die($actu."<br/>".mysql_error());
	$resu_actu = mysql_fetch_array($actu);
	return $resu_actu[$ntable];
}

function actu_en_lign($ntable){
	$actu = mysql_query("SELECT COUNT(*) as actu FROM actualite WHERE status ='1'") or die($actu."<br/>".mysql_error());
	$resu_actu = mysql_fetch_array($actu);
	return $resu_actu[$ntable];
}

function actu_en_att($ntable){
	$actu = mysql_query("SELECT COUNT(*) as actu FROM actualite WHERE status ='0'") or die($actu."<br/>".mysql_error());
	$resu_actu = mysql_fetch_array($actu);
	return $resu_actu[$ntable];
}

# EDIT ACTUALITE REQUEST //////////////////////////////////////////////////////////////////
function actu_view(){
	$actu_view = mysql_query("SELECT * FROM actualite Ac right join admin A on A.ID = Ac.admin_ID ORDER BY Ac.ID DESC ")  or die($actu_view."<br/>".mysql_error());
	return $actu_view;
}

function mediafile(){
	$request = mysql_query("SELECT * from media") or die(mysql_error());
	
	echo "Selectionner une image: <br /> <select name='titre_img'>";
	while ($resu_request = mysql_fetch_array($request)) {
		echo " <option> ".$resu_request['titre']."</option>";	
	}
	echo "</select> <br /><br />";
} 

function media_update($media_id){
	$request = mysql_query("SELECT * from media where ID = '$media_id' ") or die(mysql_error());
	$resu_request = mysql_fetch_array($request);

	$request_all = mysql_query("SELECT * from media ") or die(mysql_error());
	
	echo "Image <br /><select name='titre_img'>";
		echo "<option>".$resu_request['titre']."</option>";
	while ($resu_request_all = mysql_fetch_array($request_all)) {
		echo "<option>".$resu_request_all['titre']."</option>";
	}
	echo "</select> <br /><br />";
} 

function resultat_Recherche($valeur){
	//Resultat de la recherche
	$resultat = "%".$valeur."%";
	$request = mysql_query("SELECT * FROM actualite WHERE status = 1 AND titre LIKE '$resultat' or contenu LIKE '$resultat' ");
	return $request;
}

function nombre_Resultat($valeur){
	//TOTAL DES RESULTAT TROUVE
	$resultat = "%".$valeur."%";
	$total = mysql_query("SELECT count(*) as total FROM actualite WHERE titre LIKE '$resultat' or contenu LIKE '$resultat'");
	$nbr_total = mysql_fetch_array($total);
	
	if ($nbr_total['total'] != 0){
		echo "<p class='page-header'> votre Recharche pour \"<strong>" . htmlspecialchars($_POST['query'], ENT_QUOTES) ."\"</strong>
		retourne <span class='badge'>".$nbr_total['total']."</span> resultat(s) !</p>";	
	}else{
		echo "<p> Nous n'avons trouvé aucune resultat correspondant à <code>". htmlspecialchars($_POST['query'], ENT_QUOTES)."</code> !</p>";
	}
}

function affich_Resultat($valeur){
	while ($donnees = mysql_fetch_array($valeur)) {
	$art_id = $donnees['ID'];
	echo "
		<ul class='list-group'>
			<li class='list-group-item'>
				<a href='index.php?page=".$art_id."'>". mb_strimwidth($donnees['titre'], 0, 20, "...") 
				."<br/> ". mb_strimwidth($donnees['contenu'], 0, 50, "...")."</a>
			</li>
		</ul>
		";
	}
}
?>