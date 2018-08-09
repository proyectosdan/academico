<?php 
	$servidor	= "localhost";
	$usuario 	= "root";
	$password	= "";
	$bd			= "academico";

	$conn= new mysqli($servidor,$usuario,$password,$bd);
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}

 ?>