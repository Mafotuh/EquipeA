<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-4">
		<div class="row">
			<div class="col-sm-12">
				<!-- Accordeon -->
					<div class="panel-group" id="action">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="#maj" class="panel-title" data-toggle="collapse" data-parent="#action">Mise à Jour</a>
							</div><!-- end panel heading -->
							<div class="panel-collapse collapse" id="maj">
								<div class="panel-body">
									<table class="table table-hover">
										<tr><td><a href="index.php?form=actu_form"> Actualité</a></td></tr>
										<tr><td><a href="index.php?form=event_form"> Evenement</a></td></tr>
										<tr><td><a href="index.php?form=evsport_form"> Evenement Sportif</a></td></tr>
										<tr><td><a href="index.php?form=galerie_form"> Galerie</a></td></tr>
										<tr><td><a href="index.php?form=media_form"> Medias</a></td></tr>
									</table><!-- end table -->
								</div><!-- end panel body -->
							</div>
						</div><!-- End panel default -->

						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="#modif" class="panel-title" data-toggle="collapse" data-parent="#action">Modifier </a>
							</div><!-- end panel heading -->
							<div class="panel-collapse collapse" id="modif">
								<div class="panel-body">
									<table class="table table-hover">
										<tr><td><a href="index.php?form=actu_view"> Actualité</a></td></tr>
										<tr><td><a href="index.php?form=event_view"> Evenement</a></td></tr>
										<tr><td><a href="index.php?form=evsport_view"> Evenement Sportif</a></td></tr>
										<tr><td><a href="index.php?form=message"> Message</a></td></tr>
									</table><!-- end table -->
								</div><!-- end panel body -->
							</div>
						</div><!-- End panel default -->

						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="#membre" class="panel-title" data-toggle="collapse" data-parent="#action">Les Membres </a>
							</div><!-- end panel heading -->
							<div class="panel-collapse collapse" id="membre">
								<div class="panel-body">
									<table class="table table-hover">
										<tr><td><a href="index.php?form=membre_view"> Membres Enregistré</a></td></tr>
										<tr><td><a href="index.php?form=membre_part"> Les participants aux évenemnets</a></td></tr>
									</table><!-- end table -->
								</div><!-- end panel body -->
							</div>
						</div><!-- End panel default -->

					</div><!-- End Panel Group -->
			</div> <!-- End Col-12 Accordeon  -->
		</div><!-- End Row Accordeon -->

		

		<!-- Monitoring ///////////////////-->
		<div class="row">
			<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h4 class="page-header">Monitoring</h4></div>
						<div class="panel-body">
							<table class="table table-hover">
								<tr>
									<th>Type</th>
									<th>Nombre</th>
									<th>Status</th>
								</tr>
								<tr>
									<td>Actualité</td>
									<td><span class="badge"><?php echo actualite('actu');?></span></td>
									<td>En ligne <span class="label label-success"><?php echo actu_en_lign('actu');?></span><br />
										En attente<span class="label label-warning"> <?php echo actu_en_att('actu');

										// actualite() Function Native from /model/actu_model.php (L.38) ::::::::::::::::::::::::::::::::::: 
										// actu_en_lign() Function Native from /model/actu_model.php (L.45) ::::::::::::::::::::::::::::::::::: 
										// actu_en_att() Function Native from /model/actu_model.php (L.52) ::::::::::::::::::::::::::::::::::: 
										?></span>
									</td>
								</tr>
								<tr>
									<td>Evenement</td>
									<td><span class="badge"><?php echo evenement('event');?></span></td>
									<td>En ligne <span class="label label-success"><?php echo event_en_lign('event');?></span><br />
										En attente <span class="label label-warning"><?php echo event_en_att('event');

										// evenement() Function Native from /model/event_model.php (L.34) ::::::::::::::::::::::::::::::::::: 
										// event_en_lign() Function Native from /model/event_model.php (L.41) ::::::::::::::::::::::::::::::::::: 
										// event_en_att() Function Native from /model/event_model.php (L.48) ::::::::::::::::::::::::::::::::::: 
										?></span>
									</td>
								</tr>
								<tr>
									<td>Evenement Sportif</td>
									<td><span class="badge"><?php echo evsport_total();?></span></td>
									<td>En cours <span class="label label-success"><?php echo evsport_encours();?></span><br />
										<?php $passe = evsport_total()-evsport_encours();?>
										Passés <span class="label label-warning"><?php echo $passe;

										// evenement() Function Native from /model/event_model.php (L.34) ::::::::::::::::::::::::::::::::::: 
										// event_en_lign() Function Native from /model/event_model.php (L.41) ::::::::::::::::::::::::::::::::::: 
										// event_en_att() Function Native from /model/event_model.php (L.48) ::::::::::::::::::::::::::::::::::: 
										?></span>
									</td>
								</tr>
								<tr>
									<td>Message</td>
									<td><span class="badge"><?php echo message('mssg');?></span></td>
									<td>Lu <span class="label label-success"><?php echo msg_lu('mssg');?></span><br />
										Non Lu<span class="label label-danger"><?php echo $msg_non_lu = message('mssg') - msg_lu('mssg');

										// message() Function Native from /model/message_model.php (L.7) ::::::::::::::::::::::::::::::::::: 
										// msg_lu() Function Native from /model/message_model.php (L.14) ::::::::::::::::::::::::::::::::::: 
										// msg_non_lu() Function Native from /model/message_model.php (L.21) ::::::::::::::::::::::::::::::::::: 
										?></span></td>
								</tr>
								<tr>
									<td>Membre</td>
									<td><span class="badge"><?php echo membre_total();?></span></td>
									<td>Actif <span class="label label-success"><?php echo membre_actif();?></span><br />
										Banie<span class="label label-danger"><?php echo membre_nn_act();

										// message() Function Native from /model/message_model.php (L.7) ::::::::::::::::::::::::::::::::::: 
										// msg_lu() Function Native from /model/message_model.php (L.14) ::::::::::::::::::::::::::::::::::: 
										// msg_non_lu() Function Native from /model/message_model.php (L.21) ::::::::::::::::::::::::::::::::::: 
										?></span></td>
								</tr>
							</table><!-- end table -->
						</div><!-- end panel body -->
					</div><!-- end panel heading -->
				</div> <!-- END COL 12 MONITORING -->
			</div> <!-- END ROW MONITORING -->
		</div> <!-- ENDO COL 6 FIRST SIDE -->
	<div class="col-sm-6">
		<!-- Inclusion des pages -->
		<?php 

			if (isset($_GET['form']) AND isset($_GET['form'])!= '') {

				switch ($_GET['form']) {
					
					//ACTUALITE
					case 'actu_form':
						inclusion('admin/dashbord/actu_form.php');
						break;
					
					case 'actu_view':
						inclusion('admin/dashbord/actu_view.php');
						break;

					case 'actu_edit':
						inclusion('admin/dashbord/actu_edit.php');
						break;
					// MEDIA
					case 'media_form':
						inclusion('admin/dashbord/media_form.php');
						break;

					//EVENEMENT 
					case 'event_form':
						inclusion('admin/dashbord/event_form.php');
						break;

					case 'event_view':
						inclusion('admin/dashbord/event_view.php');
						break;

					case 'event_edit':
						inclusion('admin/dashbord/event_edit.php');
						break;

					//EVENEMENT SPORTIF 
					case 'evsport_form':
						inclusion('admin/dashbord/evsport_form.php');
						break;

					case 'evsport_view':
						inclusion('admin/dashbord/evsport_view.php');
						break;

					case 'evsport_edit':
						inclusion('admin/dashbord/evsport_edit.php');
						break;

					//MEMBRE ENREGISTRER
					case 'membre_view':
						inclusion('admin/dashbord/membre_view.php');
						break;

					case 'membre_actif':
						inclusion('admin/dashbord/membre_actif.php');
						break;

					case 'membre_nn_actif':
						inclusion('admin/dashbord/membre_nn_actif.php');
						break;

					case 'membre_part':
						inclusion('admin/dashbord/membre_part.php');
						break;
					
					//MESSAGE
					case 'message':
						inclusion('admin/dashbord/message_view.php');
						break;

					case 'send':
						inclusion('admin/dashbord/send.php');
						break;	
						
					//Galerie
					case 'galerie_form':
						inclusion('admin/dashbord/galerie_form.php');
						break;
						
					default:
						# code...
						break;
				}
			}

			// Voire le profile des membres 
			elseif (isset($_GET['id']) AND isset($_GET['id'])!= ''){
				inclusion('admin/dashbord/persone.php');
			}

			// Voire un message envoyé
			elseif (isset($_GET['msg_id']) AND isset($_GET['msg_id'])!= ''){
				inclusion('admin/dashbord/message_edit.php');
			}

			// EDITER DU CONTENU ===============================================
			// Editer une evenement de l'association
			elseif (isset($_GET['event']) AND isset($_GET['event'])!= ''){
				inclusion('admin/dashbord/event_edit.php');
			}

			// Editer une evenement sportif
			elseif (isset($_GET['ev_sport']) AND isset($_GET['ev_sport'])!= ''){
				inclusion('admin/dashbord/evsport_edit.php');
			}

			// Editer un article d'actualité
			elseif (isset($_GET['post']) AND isset($_GET['post'])!= '') {
				inclusion('admin/dashbord/actu_edit.php');
			}	

			// DEMANDER CONFIRMATION DES SUPPRESSION ============================		
			// Demander la suppression des Articles
			elseif (isset($_GET['del_art']) AND $_GET['del_art']!= '') {
				inclusion('admin/dashbord/delet.php');
			}
			
			//  Demander la suppression des evenemt 
			elseif (isset($_GET['del_event']) AND $_GET['del_event']!= '') {
				inclusion('admin/dashbord/delet.php');
			}

			//  Demander la suppression des evenemt sportifs
			elseif (isset($_GET['del_ev_sport']) AND $_GET['del_ev_sport']!= '') {
				inclusion('admin/dashbord/delet.php');
			}

			//  Demander la suppression des Message envoyé par les visiteur
			elseif (isset($_GET['del_msg']) AND $_GET['del_msg']!= '') {
				inclusion('admin/dashbord/delet.php');
			}

			//  Demander la suppression des Images
			elseif (isset($_GET['del_img']) AND $_GET['del_img']!= '') {
				inclusion('admin/dashbord/delet.php');
			}

			// SUPPRESSION DEFINITIF ===========================================
			// supprimer un article d'actualité
			elseif (isset($_GET['supr_ar']) AND $_GET['supr_ar']!= '') {
				inclusion('admin/dashbord/send.php');
			}
			
			// supprimer un Evenement de l'Asso
			elseif (isset($_GET['supr_event']) AND $_GET['supr_event']!= '') {
				inclusion('admin/dashbord/send.php');
			}

			// supprimer un Evenement Sportif
			elseif (isset($_GET['supr_evspr']) AND $_GET['supr_evspr']!= '') {
				inclusion('admin/dashbord/send.php');
			}

			// supprimer un Message envoyé par les visiteur
			elseif (isset($_GET['supr_msg']) AND $_GET['supr_msg']!= '') {
				inclusion('admin/dashbord/send.php');
			}

			// supprimer une image
			elseif (isset($_GET['supr_img']) AND $_GET['supr_img']!= '') {
				inclusion('admin/dashbord/send.php');
			}

			else{
				echo "<h4 class='page-header'>Bonjour ".$_SESSION['nom_ad']."</h4>
				<small>Veillez choisir une section à gauche pour commancer !</small>";

				 board();
			}

			// inclusion() Function Native from /Controller/link.php (L.41) ::::::::::::::::::::::::::::::::::: 
			function board(){
				echo "
				<div class='row'><br /><br />
					<div class='col-sm-4 graph-sz'>Sec 1</div>
					<div class='col-sm-4 graph-sz'>Sec 2</div>
					<div class='col-sm-4 graph-sz'>Sec 3</div>
				</div>
				<div class='row'>
					<div class='col-sm-4 graph-sz'>Sec 4</div>
					<div class='col-sm-4 graph-sz'>Sec 5</div>
					<div class='col-sm-4 graph-sz'>Sec 6</div>
				</div>
				";
			}

			?>
	</div><!-- ENDO COL 6 SECOND SIDE -->
	<div class="col-sm-1"></div>
</div> <!-- END NEW GLOBAL ROW ////////////////////////////////////////////////////////// -->
</div><!-- end container  -->

</body>
</html>