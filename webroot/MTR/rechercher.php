 <?php
// initialisation de la variable cotenant les résultats
 	$resultats ="";
 	$nbParametres = 2; 

// traitement de la requête
if(isset($_POST['query']) && !empty($_POST['query'])){
	// Si l'utilisateur à enter quelque chose, on traite la requête


	// on rend clean la requete de l'utilisateur
	$query = preg_replace("#[^a-aA-Z ?0-9]#i", "", $_POST['query']);

	if ($_POST['filtre'] == "Site entier") {
		$nbParametres = 4; 

		$sql = "(SELECT id, blog_title AS title FROM Blog WHERE blog_title LIKE ? OR blog_content like ?)
		UNION (SELECT id, pages_title AS title FROM pages WHERE pages_title LIKE ? OR pages_content like ?)";
		
	}elseif ($_POST['filtre'] == "Blog") {

		$sql = "SELECT id, blog_title AS title FROM Blog WHERE blog_title LIKE ? OR blog_content like ?";

	}elseif ($_POST['filtre'] == "pages") {
		
		$sql = "SELECT id, pages_title AS title FROM pages WHERE pages_title LIKE ? OR pages_content like ?";
	}

 	// connexion à la base de données
 	include("include/connect_bd.php");
 	if ($nbParametres == 2) {
 		$req = execute(array('%'.$query.'%','%'.$query.'%'));
 	}else {
 		$req = execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));

 	}

 	$req = $db ->prepare($sql);
 	

 	$count = $req->rowcount();

 	if ("#^$count#" >= 1) {
 		echo "$count résultat(s) trouvé(s) pour<strong>$query</strong><hr/>";
 		while ($data = $req ->fetch(PDO :: FETCH_OBJ)) {
 			echo '#'.$data->id.' -Titre: '.$data->title.'<br/>';
 		}
 	}else {
 		echo "<hr/> 0 Résultat trouvé pour <strong>$query</strong><hr/>";
 	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title> MINI MOTEUR DE RECHERCHE</title>
	<meta charset="UTF-8" />
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"></form>
<label for="query">Entrer votre recheche:</label>
	<input type="search" name="query" maxlength="80" size="80" id="query"/><br/>
	Rechercher au niveau de:
	<select name="filtre">
		<option value="Site entier">Site entier</option>
		<option value="Blog">Blog</option>
		<option value="pages">pages</option>
	</select><br/>
	<input type="submit" value="Rechercher"/>

		<!-- pour afficher la recherche saisie en bas de la barre de recherche  -->
	<!-- 2 méthode: echo $search_output;  -->
	<?php echo  $resultats;?>
</body>
</html>