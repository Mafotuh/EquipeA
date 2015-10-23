<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
<?php

if (isset($_GET['msg_id']) AND isset($_GET['msg_id'])!= ''){

	$msg_id = $_GET['msg_id'];
	
	$request = mysql_query("SELECT * from contact where ID = '$msg_id'")or die(mysql_error());
	$resu_request = mysql_fetch_array($request);

	mysql_query("UPDATE contact set lu = '1' where ID = '$msg_id' ") or die(mysql_error());
}

?>
	<div class='row'>
		<div class='col-sm-12'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<table class='table'>
    					<thead>
    						<h4 class='page-header'>Message envoyé par : <?php echo $resu_request['nom'].", de (".$resu_request['adresse'].")"; ?>
							</h4>
    					</thead>
						<tbody>
						<tr>
							<td>email</td>
							<td><?php echo $resu_request['email']; ?></td>
						</tr>
						<tr>
							<td>Téléphone</td>
							<td><?php echo $resu_request['tel']; ?></td>
						</tr>
						<tr>
							<td>Sujet </td>
							<td><?php echo $resu_request['sujet']; ?></td>
						</tr>
						<tr>
							<td>Message</td>
							<td><?php echo $resu_request['message']; ?></td>
						</tr>
						</tbody>
					</table><!-- end table  -->
				</div><!-- end panel heading -->
			</div><!-- end panel default -->
		</div>
	</div><!-- End Row -->
</body>
</html>