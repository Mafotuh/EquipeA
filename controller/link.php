<?php

// + Link
//   - Images
//   - fichier php
//   - fichier css
//   - fichier js
// ==================================================================

#CONSTANT DEFINING ///////////////////////////////////////////////////
define('WEBROOT', dirname(__FILE__));
define('WEBFOLDER', dirname(__DIR__));
define('DIRSEP', DIRECTORY_SEPARATOR);

define('WEBDIR', $_SERVER['DOCUMENT_ROOT']);
define('WEBPRO', '/neqa/');

#IMAGE FUNCTION DECLARATION //////////////////////////////////////////
function images($imgname, $class){
	echo "<img src='/neqa/webroot/img/$imgname' class='$class'>";
}

function imgnc($imglink){
	echo "<img src='/neqa/webroot/img/$imglink'>";
}

function images_upload($name){
	
	echo "<img src='/neqa/webroot/img/upload/$name'>";
}

function imgsc($imglink, $title){
	echo "<img src='/neqa/webroot/img/$imglink' title='$title'>";
}

#PHP FILES FUNCTION DECLARATION (ROOTDIR) ////////////////////////////
function linking($linkfile, $name){
	echo "<a href='/neqa/$linkfile'>$name</a>";
}

function linkatag($linkfile, $name, $class){
	echo "<a href='/neqa/$linkfile' class='$class'>$name</a>";
}

function linkimage($url, $imgname, $class){
	echo "<a href='/neqa/$url'><img src='/neqa/webroot/img/$imgname' class='$class'></a>";
}

#PHP LINK FUNCTION DECLARATION (ROOTDIR) ////////////////////////////
function inclusion($filename){
	$fpath=WEBDIR.WEBPRO;
	include $fpath.$filename;
}

#CSS FILES FUNCTION DECLARATION //////////////////////////////////////
function style($rel, $type, $href){
	echo "<link rel='$rel' type='$type' href='/neqa/webroot/css/$href'>";
}

#JS FILES FUNCTION DECLARATION ///////////////////////////////////////
function js($jslink){
	echo "<script src='/neqa/webroot/js/$jslink'></script>";
}

