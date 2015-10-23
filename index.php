<?php 
session_start();
require_once('controller/link.php'); 
require_once('controller/connexion.php'); 
require_once('controller/form.php'); 

require_once('models/actu_model.php'); 
require_once('models/event_model.php'); 
require_once('models/message_model.php'); 
require_once('models/user_model.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php 
         style('stylesheet', 'text/css', 'custom.css');
        // style('stylesheet', 'text/css', 'bootstrap.min.css');

        // js('bootstrap.min.js');
        // js('jQuery.min.js');

        // style() Function Native from /Controller/link.php (L.47) ::::::::::::::::::::::::::::::::::: 
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function EquipAMap() {
            var myLocation = new google.maps.LatLng(48.833777, 2.661146);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Siège Equip A "
            });
            var map = new google.maps.Map(document.getElementById("map1"), mapOptions);
            marker.setMap(map);
        }
        EquipAMap();
    });
</script>

</head>
<body
<?php
if (isset($_SESSION['nom_user'])) {echo "class='body'>";}
else{echo "class='body2'>";}
   
      # HEADER ////////////////////////////////////////
      inclusion('header.php');

      # SWITCH THE SEARCH ENGINE //////////////////////
          
          if (isset($_GET['page']) AND isset($_GET['page'])!='') {
            $id = $_GET['page'];
            
            switch ($_GET['page']) {
              
              #INFORMATION ////////////////////////////
              case 'apropos':
              inclusion('view/apropos.php');
              break;

              case 'activite':
              inclusion('view/activite.php');
              break;

              case 'contact':
              inclusion('view/contact.php');
              break;

              case 'evenement':
              inclusion('view/evenement.php');
              break;

              case 'mission':
              inclusion('view/mission.php');
              break;

              #CONNEXION ////////////////////////////
              case 'inscription':
              inclusion('inscription.php');
              break;

              case 'connexion':
              inclusion('connexion.php');
              break;

              case 'recherche':
              inclusion('recherche.php');
              break;

              case 'envoi':
              inclusion('controller/send.php');
              break;

              #AUTRE ////////////////////////////
              case 'recherche':
              inclusion('recherche.php');
              break;

              case $id:
              inclusion('view/resultat.php');
              break;

              default:
                break;
            }

          }else{

      # DEFAULT DISPLAY ///////////////////////////////
          include 'view/galerie.php';
          include 'view/actualite.php';
          }

      # FOOTER /////////////////////////////////////////
       include 'footer.php';

       // inclusion() Function Native from /Controller/link.php (L.41) ::::::::::::::::::::::::::::::::::: 
      ?>
</body>
</html>