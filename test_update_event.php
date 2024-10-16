<?php
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

#Обновляем описание подписки
#Например если сменили имя камеры
$device_name = 'Камера черного входа';
$query = [
    'description' => $device_name,
];
$id = 2; #id события из сервиса рассылки.
$result = update_event($API_HOST, $API_KEY, $query, $id);
var_dump($result);
?>