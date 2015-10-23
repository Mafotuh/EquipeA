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
                            <span class="caret"></span>
                        </button>

                        <?php linkimage('admin/dashbord/', 'logo-02.png', 'img-responsive'); ?>
                    </div> <!-- end navbar header -->
                    
                    <div class="collapse navbar-collapse" id="responsive">
                        <ul class="nav navbar-nav" >
                            <li><?php linking('admin/dashbord/', 'Apropos'); 

                                // linking() Function Native from /controller/link.php (L.32) ::::::::::::::::::::::::::::::::::: 
                            ?></li>

                        </ul>
                    
                        <div class="col-sm-offset-7">
                            <div class="col-sm-6 navbar-btn">
                                <form action="index.php" method="post">
                                    <input type="text" class="form-control" placeholder="Recharche (Entrer)">
                                </form>
                            </div><!-- end search -->
                            <div class="btn navbar-btn"><?php echo $_SESSION['nom_ad']; ?></div>
                            <div class="btn navbar-btn"><a href="../logout.php"> SignOUT<span class="glyphicon glyphicon-log-out"></span></a></div>
                        </div><!-- end user button -->

                    </div><!-- end collapse -->
                </div><!-- end column -->   
            <div class="col-sm-1"></div>
        </div><!-- end row -->
    </div> <!-- end container -->
</nav>
</body>
</html>