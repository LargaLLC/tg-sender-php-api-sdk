<?php

header ("Content-Type: text/html; charset=utf-8");
include("./api.php");
include("./config.php");

$query = [
    'chat_id' => '21321213', #id чата из телеграма #require
    // "link": "https://t.me/None", #optional
    // "chat_id": -4584613960, #optional
    // "username": null, #optional
    // "first_name": null, #optional
    // "last_name": null, #optional
    // "phone": null, #optional
    // "description": "", #optional
    // "photo": null, #optional
];
$result = create_subscribers($API_HOST, $API_KEY, $query);
var_dump($result);
?>