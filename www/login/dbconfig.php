<?php


	$db_host = "http://mysql.pituteando.octopusgen.net";
	$db_name = "pitu_01";
	$db_user = "dh_yy95";
	$db_pass = "xKu^3xk!";

	try{

		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>
