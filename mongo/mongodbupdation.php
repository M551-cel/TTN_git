<?php
   try {
       
       $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
       $bulk = new MongoDB\Driver\BulkWrite;
       $doc = ['_id' => new MongoDB\BSON\ObjectID, name => $_POST["name"], age =>$_POST["age"] , competancy => $_POST["com"]];
       $bulk->update(['name' => $_POST["name"],], ['$set' => ['age' =>$_POST["age"]]]);
       $manager->executeBulkWrite('bootcamp.mongo', $bulk);
	echo "record is updated";
      } 
       catch (MongoDB\Driver\Exception\Exception $e) {
       echo "Exception:", $e->getMessage(), "\n";
       echo "In file:", $e->getFile(), "\n";
       echo "On line:", $e->getLine(), "\n";  
}    
   
?>


