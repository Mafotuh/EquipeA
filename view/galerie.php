<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>
<!-- Begin Carousel -->
<div class="container">	
	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-10">
				
				<div id="galery" class="carousel slide" data-ride="carousel">
					<!-- INDICATOR -->
					<ol class="carousel-indicators">
						<li data-target="#galery" data-slide-to="0" class="active"></li>
						<li data-target="#galery" data-slide-to="1"></li>
						<li data-target="#galery" data-slide-to="2"></li>
						<li data-target="#galery" data-slide-to="3"></li>
					</ol>
					
					<!-- WRAPPER OF THE SLIDE -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<?php imgnc('galerie-01.jpg'); ?> 
							<div class="carousel-caption">
								<h3>Titre </h3>
								<p>image text come here</p>
							</div>
						</div>
						<div class="item">
							<?php imgnc('galerie-02.jpg'); ?> 
							<div class="carousel-caption">
								<h3>Titre </h3>
								<p>image text come here</p>
							</div>
						</div>
						<div class="item">
							<?php imgnc('galerie-03.jpg'); ?> 
							<div class="carousel-caption">
								<h3>Titre </h3>
								<p>image text come here</p>
							</div>
						</div>
						<div class="item">
							<?php imgnc('galerie-04.jpg'); 

							// imgnc() Function Native from /Controller/link.php (L.23) ::::::::::::::::::::::::::::::::::: 
							?> 
							<div class="carousel-caption">
								<h3>Titre </h3>
								<p>image text come here</p>
							</div>
						</div>
					</div>

					<!-- SLIDE CONTROLLEUR  -->
					<a href="#galery" class="left carousel-control" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hiden="true"></span>
						<span class="sr-only">Preview</span>
					</a>
					<a href="#galery" class="right carousel-control" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hiden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- end carousel galery -->

			</div>
		<div class="col-sm-1"></div>
	</div>
</div><!-- end container for the caroussel -->
</body>
</html>