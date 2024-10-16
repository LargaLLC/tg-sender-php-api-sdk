<?php
#Удаляем событие. Рекомендуется выполнять метод при удалении камеры.
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$id = 3;
$result = delete_event($API_HOST, $API_KEY, $id);
var_dump($result);
?>