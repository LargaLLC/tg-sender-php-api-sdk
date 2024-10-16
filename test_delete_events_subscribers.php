<?php
#Отписываем юзера от рассылки
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$id = 3; #id подписки на рассылку
$result = delete_events_subscribers($API_HOST, $API_KEY, $id);
var_dump($result);
?>