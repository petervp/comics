<?php
   require_once('DB.php');

   $hostname = "127.0.0.1";
   $databasename = "comicstore";
   $username = "root";
   $password = "root";

   function showerror()
   {
	die("Error ".mysql_errno()." : ".mysql_error());
   }
?>
