<?php
define('E_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('E_WEBPRO', '/neqa/');
require_once(E_WEBDIR.E_WEBPRO.'controller/connexion.php'); 

# DATABASE CONNEXION ////////////////////////////////////////////////////////////////////	
connexion();

# USER INTERFACE REQUEST ////////////////////////////////////////////////////////////////
# EVENT REQUEST /////////////////////////////////////////////////////////////////////////

function event1($ntable){
	$event = mysql_query("SELECT * FROM evenement WHERE status ='1' ORDER BY ID DESC LIMIT 0, 1") or die($resu_event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

function event2($ntable){
	$event = mysql_query("SELECT * FROM evenement WHERE status ='1' ORDER BY ID DESC LIMIT 1, 1") or die($resu_event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

function event3($ntable){
	$event = mysql_query("SELECT * FROM evenement WHERE status ='1' ORDER BY ID DESC LIMIT 2, 1") or die($resu_event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

# ADMIN/DASHBORD/HOME.PHP REQUEST /////////////////////////////////////////////////////
# EVENT REQUEST //////////////////////////////////////////////////////////////////////

function evenement($ntable){
	$event = mysql_query("SELECT COUNT(*) as event FROM evenement") or die($event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

function event_en_lign($ntable){
	$event = mysql_query("SELECT COUNT(*) as event FROM evenement WHERE status ='1'") or die($event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

function event_en_att($ntable){
	$event = mysql_query("SELECT COUNT(*) as event FROM evenement WHERE status ='0'") or die($event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event[$ntable];
}

# EDIT ACTUALITE REQUEST //////////////////////////////////////////////////////////////////////
function event_view(){
	$event_view = mysql_query("SELECT *, E.ID as EID FROM evenement E right join admin A on A.ID = E.admin_ID ORDER BY E.ID ASC ")  or die($event_view."<br/>".mysql_error());
	return $event_view;
}

# EVENT SPORTIF REQUEST //////////////////////////////////////////////////////////////////////
# USER INTERFACE REQUEST ////////////////////////////////////////////////////////////////
function evsport_view(){
	$evsport_view = mysql_query("SELECT * FROM event_sport Es right join admin A on A.ID = Es.admin_ID ORDER BY Es.ID DESC ")  or die($evsport_view."<br/>".mysql_error());
	return $evsport_view;
}

function evsport_total(){
	$event = mysql_query("SELECT COUNT(*) as eventttl FROM event_sport") or die($event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event['eventttl'];
}

function evsport_encours(){
	$date_j = date("Y-m-d");
	$event = mysql_query("SELECT COUNT(*) as event FROM event_sport where date_event >= '$date_j' ") or die($event."<br/>".mysql_error());
	$resu_event = mysql_fetch_array($event);
	return $resu_event['event'];
}

# ADMIN/DASHBORD/HOME.PHP REQUEST /////////////////////////////////////////////////////

?>