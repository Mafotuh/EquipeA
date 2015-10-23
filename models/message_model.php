<?php
define('M_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('M_WEBPRO', '/neqa/');
require_once(M_WEBDIR.M_WEBPRO.'controller/connexion.php'); 

// Connecting to Database //////////////////////////////////////////////////////////////////////
connexion();

# MESSAGE REQUEST //////////////////////////////////////////////////////////////////////

function message($ntable){
	$message = mysql_query("SELECT COUNT(*) as mssg FROM contact") or die($message."<br/>".mysql_error());
	$resu_message = mysql_fetch_array($message);
	return $resu_message[$ntable];
}

function msg_lu($ntable){
	$message = mysql_query("SELECT COUNT(*) as mssg FROM contact WHERE lu ='1'") or die($message."<br/>".mysql_error());
	$resu_message = mysql_fetch_array($message);
	return $resu_message[$ntable];
}

function msg_non_lu($ntable){
	$message = mysql_query("SELECT COUNT(*) as mssg FROM contact WHERE lu ='0'") or die($message."<br/>".mysql_error());
	$resu_message = mysql_fetch_array($message);
	return $resu_message[$ntable];
}

function message_recu(){
	$massage = mysql_query("SELECT * FROM contact ORDER BY ID DESC") or die($massage."<br/>".mysql_error());
	return $massage;
}

?>