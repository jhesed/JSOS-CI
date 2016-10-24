<?php
    define('DB_HOST', 'mysql1.000webhost.com');
    define('DB_USER', 'a3176676_pmm');
	define('DB_PASSWORD', '12345jhesed');
    define('DB_DATABASE', 'a3176676_pmm');
    $conn=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die ("Error connecting to " . DB_DATABASE);
    mysql_select_db(DB_DATABASE) or die ("Error: Cannot access " . DB_DATABASE . " database");
?>