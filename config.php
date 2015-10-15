<?php

class Core {
	static $DB_Created = 2014;
	static $DB_Skin = 'default';
	static $DB_Name = 'Main';
	static $DB_Login = 'Alex2';
	static $DB_Pass = '153079';
	static $DB_Local = 'localhost';

}

$link = mysqli_connect(Core::$DB_Local, Core::$DB_Login, Core::$DB_Pass, Core::$DB_Name);
mysqli_set_charset($link, 'utf8');
/* define ('CREATED',2015); 
define('NEWSONPAGE',12);
define('SKIN','default'); // podstavljaem v glavnie fajl= index.php ( u neas eto urok17.php)

// zdesj takzhe soedinenija s bazoj dannih i drugie nastrojki
/*define('DB','name');
define('DBlogin','alex');
define('DBpass','153079');
define('ADMINLOGIN','alex');
define('ADMINPASS','153079');
*/
?>