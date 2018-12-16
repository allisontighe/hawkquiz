<?php
header('Content-type: application/json');
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$chatId = $request['message']['chat']['id'];
$messageText = $request['message']['text'];

$message = ['method' => 'sendMessage', 'chat_id' => $chatId, 'text' => $messageText];
echo json_encode($message);
