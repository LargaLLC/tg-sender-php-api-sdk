<?php
header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$device_uuid = "dasdasdasdasdadasdasds";
$sub_type = "FACE-DETECTION";
$name = $device_uuid.'_'.$sub_type;
$caption = "Обнаружен вор!";
$result = send_photo_to_subscribers("test_send_photo_to_subscribers", "./test.jpeg", $caption, $API_HOST, $API_KEY);
var_dump($result);
?>