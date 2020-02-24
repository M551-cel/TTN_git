<?php
class Logger{
    public function log($message){
        echo "logging message: $message","\n";
    }
}
class UserProfile{
    public function createUser(){
        $logger=new Logger();
        $logger->log("user created");
    }
    public function updateUser(){
        $logger=new Logger();
        $logger->log("user updated");
    }
    public function deleteUser(){
        $logger=new Logger();
        $logger->log("user deleted");
    }
}
$userprofile=new UserProfile();
$userprofile->createUser();
$userprofile->updateUser();
$userprofile->deleteUser();