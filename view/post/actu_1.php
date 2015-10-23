<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

</head>
<body>
<div class="row">
	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<?php images(); ?>
					</div>
					<div class="col-sm-8">
						<h4 class="page-header"><?php $actu1['titre']; ?></h4>
					</div>
				</div><!-- End Second row -->
			</div><!-- End Panel Heading -->
			<div class="panel-body">
				<table class="table">
					<td><?php $actu1['contenu']; ?></td>
				</table>
			</div>
		</div><!-- End panel default -->
	</div>
	<div class="col-sm-12"></div>
</div>
</div>
</body>
</html>