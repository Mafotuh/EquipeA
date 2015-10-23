<?php

// + Form
//   - champ
//   - check box
//   - Radio box
//   - Bouton 
//  ================================================

#INPUT TEXT FILDSET /////////////////////////////////////////////////////
// number (type, name, min, max, step, value)

function number($type, $name, $min, $max, $step, $placeh, $class ){
	echo "<input type='$type' name='$name' min='$min' max='$max' step='$step' placeholder='*$placeh' class='$class' required><br />";
}

#INPUT TEXT FILDSET /////////////////////////////////////////////////////
// text
// email
// password
// date
// tel

function text($type, $name, $placeh, $class ){
	echo "<input type='$type' name='$name' placeholder='*$placeh' class='$class' required><br />";
}

# ADMIN FORM ////////////////////////////////////////////////////////////
function admlog($type, $name, $placeh, $class ){
	echo "<input type='$type' name='$name' placeholder='*$placeh' class='$class' required> ";
}

function textarea($name, $placeh, $class ){
	echo "<textarea name='$name' placeholder='*$placeh' class='$class editor' required></textarea><br />";
}

#INPUT BOX FIELDSET /////////////////////////////////////////////////////
// checkbox
// radio

function box($type, $name, $value, $label){
	echo "<label><input type='$type' name='$name' value='$value' required> $label </label><br />";
}

#INPUT SPECIAL FILEDSET /////////////////////////////////////////////////
// file


// bouton 
function bouton($type, $value, $class){
	echo "<input type='$type' value='$value' class='$class'><br />";
}

// range (type, name, min, max)
function ranges($type, $name, $min, $max ){
	echo "<input type='$type' name='$name' min='$min' max='$max'><br />";
}

# ///////////////// FORM EDITING ///////////////////////////////////////////////////////////
# /////////////////////////////////////////////////////////////////////////////////////////
function text_edit($type, $name, $placeh, $class, $value){
	echo "<input type='$type' name='$name' placeholder='*$placeh' class='$class' value='$value' required><br />";
}

function number_edit($type, $name, $min, $max, $step, $placeh, $class, $value ){
	echo "<input type='$type' name='$name' min='$min' max='$max' step='$step' placeholder='*$placeh' class='$class' value='$value' required><br />";
}

function textarea_edit($name, $placeh, $class, $value ){
	echo "<textarea name='$name' placeholder='*$placeh' class='$class' required>$value</textarea><br />";
}

function id_edit($ID, $id_value){
	echo "<select name='".$ID."'><option>".$id_value."</option></select><br />";
}

?>