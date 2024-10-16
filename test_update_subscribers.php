<?php
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#Обновляем подписчика
$query = [
    'phone' => '+79643850555',
];
$id = 6; #id события из сервиса рассылки.
$result = update_subscribers($API_HOST, $API_KEY, $query, $id);
var_dump($result);
?>