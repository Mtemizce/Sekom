<?php 
	require_once('classes/db.php');

	$dbPropPath = "../data/db_properties.json";

	$db = new db();

	$dbProp = json_decode(file_get_contents($dbPropPath),true);

	$db->setServer($dbProp['server']);
	$db->setUser($dbProp['username']);
	$db->setPassword($dbProp['password']);
	$db->setDatabase($dbProp['database']);

	$conn  = $db->open();
?>