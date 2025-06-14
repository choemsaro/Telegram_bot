<?php
$botToken = "7670337919:AAGyEjbxGNvBNbY6isbjM6Uxn_yk-RU_0ro";
$chatId = "7648728908";
$message = "សួស្តីពី PHP Telegram Bot!";
$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => $message
];
$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
?>