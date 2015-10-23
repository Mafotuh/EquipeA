<?php 
$mon_age = $_SESSION['age'];
$mon_poid = $_SESSION['poid'];
$membres = membres($mon_poid);

// membres() Function Native from /model/user_model.php (L.8) ::::::::::::::::::::::::::::::::::: 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-heading"><h4 class="page-header police">Voire aussi ! <small>D'autre personne qui fond le poid !</small></h4></div>
		<div class="panel-body">
			<table class="table">
				<tr>
					<th>Nom</th>
					<th>Poid</th>
					<th>IMC</th>
					<th>Force</th>
				</tr>
				<?php 
				
					while ($resu_membre = mysql_fetch_array($membres)) {
						
						$mbpoid = $resu_membre['poid'];						
						$mbage = $resu_membre['age'];
						$mbtaille = $resu_membre['taille'];
						
						#IMC CALCUL /////////////////////////////////////////////////////
						$imc = ($mbpoid/($mbtaille*$mbtaille))*10000;


						$nimpoid = 20;
						$maxpoid = 150;
						$mbforce = ($mbpoid * 100)/150;


						if ($mbforce <=25) {
							echo "					
							<tr>
								<td>".$resu_membre['nom']."</td>
								<td>".$resu_membre['poid']."</td>";

								if ($imc < 18) {
									echo "<td><span  class='label label-default'>".(int) $imc."</span></td>";
								}elseif ($imc < 25) {
									echo "<td><span  class='label label-success'>".(int) $imc."</span></td>";
								}elseif ($imc < 30) {
									echo "<td><span  class='label label-info'>".(int) $imc."</span></td>";
								}elseif ($imc < 40) {
									echo "<td><span  class='label label-warning'>".(int) $imc."</span></td>";
								}elseif ($imc > 40) {
									echo "<td><span  class='label label-danger'>".(int) $imc."</span></td>";
								}

								echo "<td>
									<div class='progress'>
										<div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$mbforce%'>
									</div>
								</td>
							</tr>";

						}elseif ($mbforce <=50) {
							echo "					
							<tr>
								<td>".$resu_membre['nom']."</td>
								<td>".$resu_membre['poid']."</td>";
								
									if ($imc < 18) {
									echo "<td><span  class='label label-default'>".(int) $imc."</span></td>";
								}elseif ($imc < 25) {
									echo "<td><span  class='label label-success'>".(int) $imc."</span></td>";
								}elseif ($imc < 30) {
									echo "<td><span  class='label label-info'>".(int) $imc."</span></td>";
								}elseif ($imc < 40) {
									echo "<td><span  class='label label-warning'>".(int) $imc."</span></td>";
								}elseif ($imc > 40) {
									echo "<td><span  class='label label-danger'>".(int) $imc."</span></td>";
								}

								echo "<td>
									<div class='progress'>
										<div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$mbforce%'>
									</div>
								</td>
							</tr>";

						}elseif ($mbforce <=75) {
							echo "					
							<tr>
								<td>".$resu_membre['nom']."</td>
								<td>".$resu_membre['poid']."</td>";
								
									if ($imc < 18) {
									echo "<td><span  class='label label-default'>".(int) $imc."</span></td>";
								}elseif ($imc < 25) {
									echo "<td><span  class='label label-success'>".(int) $imc."</span></td>";
								}elseif ($imc < 30) {
									echo "<td><span  class='label label-info'>".(int) $imc."</span></td>";
								}elseif ($imc < 40) {
									echo "<td><span  class='label label-warning'>".(int) $imc."</span></td>";
								}elseif ($imc > 40) {
									echo "<td><span  class='label label-danger'>".(int) $imc."</span></td>";
								}

								echo "<td>
									<div class='progress'>
										<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$mbforce%'>
									</div>
								</td>
							</tr>";

						}else{
							echo "					
							<tr>
								<td>".$resu_membre['nom']."</td>
								<td>".$resu_membre['poid']."</td>";
								
									if ($imc < 18) {
									echo "<td><span  class='label label-default'>".(int) $imc."</span></td>";
								}elseif ($imc < 25) {
									echo "<td><span  class='label label-success'>".(int) $imc."</span></td>";
								}elseif ($imc < 30) {
									echo "<td><span  class='label label-info'>".(int) $imc."</span></td>";
								}elseif ($imc < 40) {
									echo "<td><span  class='label label-warning'>".(int) $imc."</span></td>";
								}elseif ($imc > 40) {
									echo "<td><span  class='label label-danger'>".(int) $imc."</span></td>";
								}

								echo "<td>
									<div class='progress'>
										<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$mbforce%'>
									</div>
								</td>
							</tr>";
						}
					}
				?>

			</table>
		</div>
	</div>

</body>
</html>