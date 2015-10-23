<?php
define('MBR_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('MBR_WEBPRO', '/neqa/');
require_once(MBR_WEBDIR.MBR_WEBPRO.'controller/connexion.php'); 

// Connecting to Database //////////////////////////////////////////////////////////////////////
connexion();


# USER INTERFACE REQUEST ///////////////////////////////////////////////////////////////////////

function membres($usr_poid){
	$membres = mysql_query("SELECT * FROM profile WHERE poid >= '$usr_poid' ORDER BY poid DESC") or die($membres."<br />".mysql_error());
	return $membres;
}

function adm_connect($sp){
	$request = mysql_query("SELECT * FROM admin WHERE login = '$sp'") or die($request."<br />".mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request;
}

function u_login($login){
	$request = mysql_query("SELECT * FROM profile WHERE login = '$login'") or die($request."<br />".mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request;
}

// CHAT FUNCTIONS ////////////////////////////////////////////////////////////////////////////////
function send_chat($pseudo, $message){
	$request = mysql_query("SELECT * FROM profile WHERE nom = '$pseudo'") or die($request ."<br />".mysql_error());
	$resu_request = mysql_fetch_array($request);

	$u_id = $resu_request['ID'];
	mysql_query("INSERT INTO chat (profile_ID, message) VALUES ('$u_id', '$message') ") or die(mysql_error());
}

function receive_chat(){
	$chat_data = mysql_query("SELECT c.message, p.nom, c.dates, c.ID as cid from chat c right join profile p on c.profile_ID = p.ID ORDER BY cid DESC LIMIT 0, 6") or die(mysql_error());

	while ($user = mysql_fetch_array($chat_data)) {
		echo "<table class='table'>
				<tr>
					<td>".$user['nom'] ."<br /><code class='dtc'>".$user['dates']."</code></td>
					<td>".$user['message']."</td>
				</tr>
			</table>";
	}
}

function chat_stat($ntable){
	$user_ID = $_SESSION['ID'];
	$request = mysql_query("SELECT * from moderation m right join profile p on p.ID = m.profile_ID where p.ID = '$user_ID'") or die(mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request[$ntable];
}

function membre(){
	$request = mysql_query("SELECT * from profile ") or die(mysql_error());
	return $request;
}

function membre_total(){
	$request = mysql_query("SELECT count(*) as total from profile")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request['total'];
}

function membre_actif(){
	$request = mysql_query("SELECT count(*) as total from profile where status = 1")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request['total'];
}

function membre_nn_act(){
	$request = mysql_query("SELECT count(*) as total from profile where status = 0")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);
	return $resu_request['total'];
}


function raison(){
	$request = mysql_query("SELECT * from raison") or die(mysql_error());
	return $request;
}

function mbr_actif(){
	$request = mysql_query("SELECT * from profile where status = 1 ") or die(mysql_error());
	return $request;
}

function mbr_nn_actif(){
	$request = mysql_query("SELECT * from profile where status = 0 ") or die(mysql_error());
	return $request;
}

function mbr_part(){
	$request = mysql_query("SELECT DISTINCT p.ID pid, p.nom pnom, p.prenom pprenom, es.titre etitre
							FROM event_sport es, profile p
							RIGHT JOIN event_inscr ei ON p.ID = ei.profile_ID 
							WHERE es.ID = ei.event_sport_ID
							ORDER BY pid ") or die(mysql_error());
	return $request;
}


?>