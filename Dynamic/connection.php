<?php
	
	define("DSN","mysql:host=sql311.infinityfree.com;dbname=if0_36745121_studentdb");
	define("DBUSER","if0_36745121");
	define("DBPASS","apollopugi");

	try {

		$conn = new PDO(DSN, DBUSER, DBPASS);

	} catch (PDOException $e) {

		print "Error: " . $e->getMessage()  . "<br>";

		die();

	}

?>