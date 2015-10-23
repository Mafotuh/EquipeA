<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="panel panel-default">
<div class="panel-header">Liste des images telechargé</div>
	<div class="panel-body wrap">
		<table class="table">
			<tr>
				<th>Titre</th>
				<th>image</th>
				<th>Action</th>
			</tr>
			
		<?php
		function affiche_medias(){

			$request = mysql_query("SELECT * from media") or die(mysql_error());
			while ($resu_request = mysql_fetch_array($request)) {

				$img_id = $resu_request['ID'];
				$img_ttl = $resu_request['titre'];
				$img_url = $resu_request['url'];

			echo "<tr>
					<td>".$resu_request['titre']."</td>
					<td><span type='button' class='' data-toggle='modal' data-target='#myModal'>
						<img height='100' class='thumbnail all_img inline-block' src='".$resu_request['url']."'>
						</span><br /></td>
					<td><a href='index.php?del_img=".$img_id."&del_img_ttl=".$img_ttl."&del_img_url=".$img_url."' class='label label-danger lab'><span class='glyphicon glyphicon-trash'></span></a></td>
				</tr>";
			}
		}
			echo affiche_medias();
		?>
		</table>
	</div>
</div><!-- End Panel -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
			<p><?php echo "I'm from PHP";?></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div><!-- end Modal  -->

	<form action="index.php?form=send" method="POST" enctype="multipart/form-data">
		<input type="file" name="media_img" required><br />
		<input type="submit" name="submit"><br />
	</form>
</body>
</html>