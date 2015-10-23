<?php

// CAS D'UN ARTICLE D'ACTUALITE =======================================================================
//=====================================================================================================
if (isset($_GET['del_art']) AND $_GET['del_art']!='' && isset($_GET['del_art_title']) AND $_GET['del_art_title']!='') {
	$art_id = $_GET['del_art'];
	$art_titre = $_GET['del_art_title'];

	// Confirmer la suppression ///////////////////////////////////
echo "
	<h3 class='page-header'>Attention ! <small>Vous etes sur le point de supprimer l'article : <em>".$art_titre."</em></small></h3><br />
	<div class='btn-group'>
		<a href='index.php?form=actu_view' class='btn btn-default'>Annuler</a>
		<a href='index.php?supr_ar=".$art_id."' class='btn btn-danger'>Supprimer</a>
	</div>
	";
}

// CAS D'UN EVENEMENT ASSO ============================================================================
//=====================================================================================================
if (isset($_GET['del_event']) AND $_GET['del_event']!='' && isset($_GET['del_ev_title']) AND $_GET['del_ev_title']!='') {
	$event_id = $_GET['del_event'];
	$event_titre = $_GET['del_ev_title'];

	// Confirmer la suppression ///////////////////////////////////
echo "
	<h3 class='page-header'>Attention ! <small>Vous etes sur le point de supprimer l'article : <em>".$event_titre."</em></small></h3><br />
	<div class='btn-group'>
		<a href='index.php?form=event_view' class='btn btn-default'>Annuler</a>
		<a href='index.php?supr_event=".$event_id."' class='btn btn-danger'>Supprimer</a>
	</div>
	";
}

// CAS D'UN EVENEMENT SPORTIF =========================================================================
//=====================================================================================================
if (isset($_GET['del_ev_sport']) AND $_GET['del_ev_sport']!='' && isset($_GET['del_evspr_title']) AND $_GET['del_evspr_title']!='') {
	$evspr_id = $_GET['del_ev_sport'];
	$evsprt_titre = $_GET['del_evspr_title'];

	// Confirmer la suppression ///////////////////////////////////
echo "
	<h3 class='page-header'>Attention ! <small>Vous etes sur le point de supprimer l'article : <em>".$evsprt_titre."</em></small></h3><br />
	<div class='btn-group'>
		<a href='index.php?form=evsport_view' class='btn btn-default'>Annuler</a>
		<a href='index.php?supr_evspr=".$evspr_id."' class='btn btn-danger'>Supprimer</a>
	</div>
	";
}

// CAS D'UN MESSAGE ENVOYE PAR LES VISITEUR ===========================================================
//=====================================================================================================
if (isset($_GET['del_msg']) AND $_GET['del_msg']!='' && isset($_GET['del_msg_ttl']) AND $_GET['del_msg_ttl']!='') {
	$msg_id = $_GET['del_msg'];
	$msg_titre = $_GET['del_msg_ttl'];

	// Confirmer la suppression ///////////////////////////////////
echo "
	<h3 class='page-header'>Attention ! <small>Vous etes sur le point de supprimer le message intitulé : <em>".$msg_titre."</em></small></h3><br />
	<div class='btn-group'>
		<a href='index.php?form=message' class='btn btn-default'>Annuler</a>
		<a href='index.php?supr_msg=".$msg_id."' class='btn btn-danger'>Supprimer</a>
	</div>
	";
}

// CAS D'UNE IMAGE ====================================================================================
//=====================================================================================================
if (isset($_GET['del_img']) AND $_GET['del_img']!='') {
	$img_id = $_GET['del_img'];
	$img_titre = $_GET['del_img_ttl'];
	$img_url = $_GET['del_img_url'];

	// Confirmer la suppression ///////////////////////////////////
echo "
	<h3 class='page-header'>Attention ! <small>Vous etes sur le point de supprimer l'image : <em>".$img_titre."</em></small></h3><br />
	<img height='100' class='thumbnail all_img inline-block' src='".$img_url."'>
	<div class='btn-group'>
		<a href='index.php?form=media_form' class='btn btn-default'>Annuler</a>
		<a href='index.php?supr_img=".$img_id."&supr_img_url=".$img_url."' class='btn btn-danger'>Supprimer</a>
	</div>
	";
}