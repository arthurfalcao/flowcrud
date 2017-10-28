<?php 
function isLoggedIn(){
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
		return false;
	}
	return true;
}

function isLoggedOut(){
	$_SESSION['logged_in'] = false;
	session_destroy();
}

function make_hask($str){
	return sha1(md5($str));
}
 ?>