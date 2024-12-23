<?php



	define('HOST', '127.0.0.1:3306');
	define('USERNAME', 'root');
	define('PWD', 'mariadb');
	define('DB', 'icae02');
	
	


	$connection = mysqli_connect(HOST,USERNAME,PWD,DB);
?>