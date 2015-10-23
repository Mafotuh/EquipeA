<?php 
session_start();
define('A_WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('A_WEBPRO', '/neqa/');

require_once(A_WEBDIR.A_WEBPRO.'controller/link.php'); 
require_once(A_WEBDIR.A_WEBPRO.'controller/connexion.php'); 
require_once(A_WEBDIR.A_WEBPRO.'controller/form.php');

require_once(A_WEBDIR.A_WEBPRO.'models/actu_model.php'); 
require_once(A_WEBDIR.A_WEBPRO.'models/event_model.php'); 
require_once(A_WEBDIR.A_WEBPRO.'models/message_model.php'); 
require_once(A_WEBDIR.A_WEBPRO.'models/user_model.php'); 

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
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head>
<body class='body2'>


<?php 
    if (isset($_GET['admin'])) {
        
        switch ($_GET['admin']) {
            
            case 'envoi':
            include 'envoi.php';
            break;
                   
            case 'signin':
            include 'login.php';
            break;
                           
        default :
            include 'login.php';
            break;
        }

    }else{
       include 'login.php';
    }
?>

</body>
</html>