<?php
define("DB_SERVER", "localhost");
define("DB_USER", "u0371269_default");
define("DB_PASS", "O8!bciNR");
define("DB_NAME", "u0371269_submain");
$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die("Cannot select DB");
mysql_set_charset( 'utf8' );
?>