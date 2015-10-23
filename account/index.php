<?php 
session_start(); 
define('U_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('U_WEBPRO', '/neqa/');

require_once(U_WEBDIR.U_WEBPRO.'controller/link.php'); 
require_once(U_WEBDIR.U_WEBPRO.'controller/connexion.php'); 
require_once(U_WEBDIR.U_WEBPRO.'controller/form.php');

require_once(U_WEBDIR.U_WEBPRO.'models/actu_model.php'); 
require_once(U_WEBDIR.U_WEBPRO.'models/event_model.php'); 
require_once(U_WEBDIR.U_WEBPRO.'models/message_model.php');
require_once(U_WEBDIR.U_WEBPRO.'models/user_model.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php 
        style('stylesheet', 'text/css', 'custom.css'); 
        // style('stylesheet', 'text/css', 'bootstrap.min.css');
        
        // js('bootstrap.min.js'); 
        // js('jQuery.min.js');

    // style() Function Native from /Controller/link.php (L.47) ::::::::::::::::::::::::::::::::::: 
    // js() Function Native from /Controller/link.php (L.52) ::::::::::::::::::::::::::::::::::: 
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

</head>
<body <?php
if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user']!= '') {echo "class='body'";}
else{echo "class='body2'";}
 ?>>
<?php 

	inclusion('header.php');

	#GOTTA CODE HERE /////////////////////////////

	if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user']!= '') {
		
        if (isset($_GET['fichier']) AND $_GET['fichier']!= '') {
	   
            switch ($_GET['fichier']) {
                case 'event':
                    inclusion('account/evenement.php');
                    break;
                    
                    case 'chat':
                    $chat_stat = chat_stat('status');
                        if ($chat_stat==1) {
                            inclusion('account/chat.php');
                        }else{
                            inclusion('account/chat_banied.php');
                        }
                    break; 
       
                    case 'top10':
                    inclusion('account/top10.php');
                    break;
                
                    default:
                    break;
            }/*end Switch*/

        }elseif (isset($_GET['id']) AND $_GET['id']!= '') {
            
            $ide = $_GET['id'];

            switch ($_GET['id']) {
                case $ide:
                inclusion('account/evenement.php');
                break;

                default:
                break;
            }

        }elseif (isset($_GET['event']) AND $_GET['event']!= '') {

            $id_event = $_GET['event'];

                switch ($_GET['event']) {
                    
                    case  $id_event:
                    inclusion('account/enreg.php');
                    break;

                    default:
                    break;
                }

            }elseif (isset($_GET['inscr']) AND $_GET['inscr']!= '') {

            $id_inscr = $_GET['inscr'];

                switch ($_GET['inscr']) {
                    
                    case  $id_inscr:
                    inclusion('account/send.php');
                    break;

                    default:
                    break;
                }

            }elseif (isset($_GET['supr']) AND $_GET['supr']!= '') {

            $id_supr = $_GET['supr'];

                switch ($_GET['supr']) {
                    
                    case  $id_supr:
                    inclusion('account/send.php');
                    break;

                    default:
                    break;
                }

            }else{

            inclusion('account/home.php');
        }
    }

    else {header('location: ../index.php?page=connexion');}


// inclusion() Function Native from /Controller/link.php (L.41) ::::::::::::::::::::::::::::::::::: 
?>

</body>
</html>