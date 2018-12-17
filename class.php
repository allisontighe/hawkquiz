<?php 

class Game
{
    private $connection;
    
    private $chatId;
    
   public function __construct(Connection $connection, int $chatiD)
    {
        $this->connection = $connection;
        
        $this->chatId = $chatId;
    }
    private function sendMessage(int $chatId, string $text, array $keyboard = [])
    
    {
        
        if (empty($keyboard)) return Bot::send('sendMessage', ['chat_id' => $chatId, 'text' => $text, 'parse_mode' => 'Markdown']);
        
        else return Bot::send('sendMessage', ['chat_id' => $chatId, 'text' => $text, 'parse_mode' => 'Markdown', 'reply_markup' => json_encode(['inline_keyboard' => $keyboard])]);
    }
    function __construct(array $message){
    }
}