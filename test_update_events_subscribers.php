<?php
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#наврятли понадобится этот метод. 
$query = [
    'event' => 1,
    'sub' => 2,
];
$id = 2; #id подписки
$result = update_events_subscribers($API_HOST, $API_KEY, $query, $id);
var_dump($result);
?>