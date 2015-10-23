<?php
if (isset($_GET['']) AND $_GET['']!='') {
	$id = $_GET[''];

	$rq = mysql_query("SELECT * from tanle where ID = '$id'") or die(mysql_error());
	$resu_rq = mysql_fetch_array($rq) or die(mysql_error());

	echo $resu_rq['titre']." <br />";
	echo $resu_rq['contenu'];
}