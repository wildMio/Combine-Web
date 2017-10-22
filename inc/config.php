<?php
	
	//if there is no constant defined called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	}
	
	// Session are already turned on
	if(!isset($_SESSION)) {
		session_start();
	}

	// Our config is below
	// Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');

	//Include th DB.php file
	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	include_once "classes/Page.php";
	include_once "classes/User.php";
	include_once "function.php";

	$con = DB::getConnection();
?>