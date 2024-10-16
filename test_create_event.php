<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$device_uuid = "dasdasdasdasdadasdasds111111";
$sub_type = "FACE-DETECTION";
$device_name = "Камера главного двора";
$query = [
    'name' => $device_uuid.'_'.$sub_type, #required
    'description' => $device_name, #optional
];
$result = create_event($API_HOST, $API_KEY, $query);
var_dump($result);
?>