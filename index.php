<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Comics</title>
</head>
<body><pre>
<?php 
   require "include/defines.inc";
   $connection = DB::connect($dsn);
   if (DB::isError($connection))
      die($connection->getMessage());

   $result = $connection->query("SELECT * FROM books");

   if (DB::isError($result))
      die ($result->getMessage());

   while ($row = $result->fetchRow(DB_FETCHMODE_ASSOC))
   {
      foreach ($row as $attribute)
         print "{$attribute} ";

      print "\n";
   }
?>
</pre>
</body>
</html>