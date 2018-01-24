<?php
	define("DBNAME", "ibwas");
	define("DBUSER", "root");
	define("DBPASS", "oluwafemi17");

	try{
		$conn= new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
	} catch(PDOException $e){
		echo $e->getMessage();
	}

?>
