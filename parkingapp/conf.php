<?php
    /*
	define('HOST','localhost');
	define('USERNAME','root');
	define('PWD','');
	define('DB','icae02');
    */

	
	define('SERVERNAME', '127.0.0.1:3306');
	define('USERNAME', 'root');
	define('PASSWORD', 'mariadb');
	define('DBNAME', 'icae02');
	
	
	

	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
?>