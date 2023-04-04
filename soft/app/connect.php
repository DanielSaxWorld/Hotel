<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'imperia4_suser';
$db_pass		= 'soft@2022';
$db_database	= 'imperia4_softdb';



/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
