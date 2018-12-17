<?php 
require_once 'class.php';
class Game extends stuff{
    
private $connection;

public function __construct(array $message) {
    
    $this->connection = new Connection;
    
    parent::__construct($message);
    
}
    public function process (){
    //parse message text
    $parseArray = parseMessageText($this->messageText);
    $command = $parseArray['command'];
    $parameter = $parseArray['parameter'];
    
    if ($command === '/hi'){
        $this->sendEcho ('go away!');
    }
  }
}