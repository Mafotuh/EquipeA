<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body data-spy="scroll" data-target="#main-navbar" id="section-accueil" data-target="#section-accueil">

<nav class="navbar navbar-default navbar-fixed-top" id="main-navbar" role="navigation">

    <div class="container" >
        <div class="row">
            <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php 
                        linkimage('index.php', 'logo-02.png', 'img-responsive'); 

                        // linkimage() Function Native from /Controller/link.php (L.36) ::::::::::::::::::::::::::::::::::: 
                        ?>
                    </div> <!-- end navbar header -->
                    
                    <div class="collapse navbar-collapse" id="responsive">
                        <ul class="nav navbar-nav">
                            <li><?php linking('index.php?page=apropos', 'A propos'); ?></li>
                            <li><?php linking('index.php?page=activite', 'Activité'); ?></li>
                            <li><?php linking('index.php?page=evenement', 'Evenement'); ?></li>
                            <li><?php linking('index.php?page=mission', 'Mission'); ?></li>
                            <li><?php linking('index.php?page=contact', 'Contact'); 

                                // linking() Function Native from /Controller/link.php (L.32) ::::::::::::::::::::::::::::::::::: 
                            ?></li>
                        </ul>
                    
                        <div class="col-sm-offset-7">
                            <div class="col-sm-6 navbar-btn">
                                <form action="index.php?page=recherche" method="post">
                                    <?php 
                                    admlog('text', 'query', 'Recharche (Entrer)', 'form-control' ); 

                                    // admlog() Function Native from /Controller/form.php (L.29) ::::::::::::::::::::::::::::::::::: 
                                    // admlog() input utilisé sur le formulaire de l'Admin
                                    ?>
                                </form>
                            </div><!-- end search -->
                           
                        <?php 
                           function activlog($class, $datas){
                                echo "<div class='$class'> $datas</div>";
                            }
                            # CHECK WHETHER A USER IS LOGGED IN ////////////////////////////////////////
                           if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user']!= '') {
                               
                                echo "<div class='btn navbar-btn'><a href='/neqa/account/'>".$_SESSION['nom_user']."</a></div>";
                                activlog('btn navbar-btn', linking("logout.php", "SignOUT<span class='glyphicon glyphicon-log-in'></span>"));
                               
                           }else{
                             
                                activlog('btn navbar-btn', linking("index.php?page=inscription", "SignUP<span class='glyphicon glyphicon-user'></span>"));
                                activlog('btn navbar-btn', linking("index.php?page=connexion", "SignIN<span class='glyphicon glyphicon-log-in'></span>"));
                           }

                           // activlog() Function Native from HERE (L.54) ::::::::::::::::::::::::::::::::::: 
                        ?>
                            
                           
                            </div><!-- end user button -->

                    </div><!-- end collapse -->
                </div><!-- end column -->
            <div class="col-sm-1"></div>
        </div><!-- end row -->
        <?php 
        if (isset($_SESSION['nom_user']) AND $_SESSION['nom_user']!= '') {
            echo "
	        <div class='row'>
	            <div class='col-sm-4'></div>
	            <div class='col-sm-4'>
	                ";
	                linkatag('account/', 'Compte', 'label label-info')." ";

                    $chat_stat = chat_stat('status');

                    // Verification du status de la personne pour acceder au Chat et au evenement //////////
                    if ($chat_stat==1) {
                        linkatag('account/index.php?fichier=event', 'Evenement', 'label label-info');
                        linkatag('account/index.php?fichier=chat', 'Chat', 'label label-info');
                    }else{
                        linkatag('account/index.php?fichier=chat', 'Evenement', 'label label-default');
                        linkatag('account/index.php?fichier=chat', 'Chat', 'label label-default');
                    }
	                
	                linkatag('account/index.php?fichier=top10', 'TOP 10', 'label label-info');
	                echo "</div><br /><br />
	            <div class='col-sm-4'></div>
	        </div>";
        }
        ?>
    </div> <!-- end container -->
</nav>

</body>
</html>