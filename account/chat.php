<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<body>
<div class='container'>
<div class='row'>
	<div class='col-sm-1'></div>	


	<div class='col-sm-5'>	
	<?php receive_chat(); 
	// receive_chat() Function Native from /model/user_model.php (L.38) ::::::::::::::::::::::::::::::::::: 
	?>	
	<form action='index.php?fichier=chat' method='post'>
		<?php 
			textarea('message', 'Votre message ici', 'form-control');
			bouton('submit', 'Envoyer', 'btn btn-info');
		?>
	</form>
	</div>
	<div class='col-sm-5'>
	<?php
	if (isset($_POST['message']) AND $_POST['message']!='') {
		
		$pseudo = $_SESSION['nom_user'];
		$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
		
		send_chat($pseudo, $message);
		// send_chat() Function Native from /model/user_model.php (L.29) ::::::::::::::::::::::::::::::::::: 
	}
	?>
	</div>
	<div class='col-sm-1'></div>

</body>
</html>