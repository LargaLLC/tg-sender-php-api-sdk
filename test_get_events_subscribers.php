<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#получим всех подписчиков на рассылку по  id рассылки
$query = [
    'event' => 1,
];
$result = get_events_subscribers($API_HOST, $API_KEY, $query);
var_dump($result);
?>