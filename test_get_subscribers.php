<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#получим подписчика по id чата из телеграма
$query = [
    'chat_id' => 21321213,
];
$result = get_subscribers($API_HOST, $API_KEY, $query);
var_dump($result);
?>