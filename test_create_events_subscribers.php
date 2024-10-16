<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#подписываем чат в телеграме на рассылку
$event = 2; #id события
$subscriber = 1; #id подписчика(не путать с chat_id)
$query = [
    'event' => $event,
    'subscriber' => $subscriber,
];
$result = create_events_subscribers($API_HOST, $API_KEY, $query);
var_dump($result);
?>