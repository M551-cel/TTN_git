<?php
   try {
       
       $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
       $bulk = new MongoDB\Driver\BulkWrite;
       $doc = ['_id' => new MongoDB\BSON\ObjectID, name => $_POST["name"], age =>$_POST["age"] , competancy => $_POST["com"]];
       $bulk->delete(['name' => $_POST["name"]]);


         //$bulk->update(['name' => $_POST["fn"],], ['$set' => ['age' =>$_POST["em"]]]);



       $manager->executeBulkWrite('bootcamp.mongo', $bulk);
echo "record is deleted";
   } catch (MongoDB\Driver\Exception\Exception $e) {
       echo "Exception:", $e->getMessage(), "\n";
       echo "In file:", $e->getFile(), "\n";
       echo "On line:", $e->getLine(), "\n";  
}    
   
?>


