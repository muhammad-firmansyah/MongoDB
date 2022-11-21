<?php
   // connect to mongoDB
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->datasiswarpl1;
	
   echo "Database mydb selected";
?>