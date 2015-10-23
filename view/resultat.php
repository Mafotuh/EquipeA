<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="raw">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			

<?php
connexion();
if (isset($_GET['page']) AND isset($_GET['page'])!= '') {

	$ids = $_GET['page'];
	
	$request = mysql_query("SELECT a.titre a_titre, a.contenu a_contenu, m.url m_url from actualite a 
							right join media m
							on a.media_ID = m.ID  
							where a.ID = '$ids'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);

	echo "<h3 class='titre_a'> " .$resu_request['a_titre']." </h3>";
	echo "<img height='200' class='thumbnail' src='".$resu_request['m_url']."'>";
	echo "<p class='contenu_a'>" .$resu_request['a_contenu']."</p>";

}
?>		

			</div>
		<div class="col-lg-1"></div>
	</div><!-- Ent Raw -->
</div><!-- End container -->
</body>
</html>