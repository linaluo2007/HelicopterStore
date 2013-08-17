<?php  

$db_host = "mysql2.000webhost.com"; 

$db_username = "a7030844_store";  

$db_pass = "strawberry605";  

$db_name = "a7030844_store"; 

// Run the actual connection here  
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql"); 
mysql_select_db("$db_name") or die ("no database");              
?>