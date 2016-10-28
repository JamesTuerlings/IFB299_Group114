<?php
//open connection to database
$db_host = "localhost";
$db_username = "root";
$db_pass = "password";
$db_name = "packagedb";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldn't connect to MySql");
@mysql_select_db("$db_name") or die ("no database");
?>
