<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$id = 1;
$result = get_subscribers_by_id($API_HOST, $API_KEY, $id);
var_dump($result);
?>