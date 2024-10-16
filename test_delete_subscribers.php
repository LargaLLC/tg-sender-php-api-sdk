<?php
#Удаляем подписчика. Автоматом удалится и подписка на событие.
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$id = 6;
$result = delete_subscribers($API_HOST, $API_KEY, $id);
var_dump($result);
?>