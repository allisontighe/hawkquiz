<?php
$header = header('Content-type: application/json');
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$chatId = $update['message']['chat']['id'];
$messageText = $update['message']['text'];

$message = ['method' => 'sendMessage', 'chat_id' => $chatId, 'text' => $messageText];
echo json_encode($message);

