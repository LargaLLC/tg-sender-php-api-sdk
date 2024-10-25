<?php

function query_builder($API_HOST, $arr_assoc=[], $relative_url='') {
    $query_str = "";
    $query_str .= $API_HOST.$relative_url.'/?';
    foreach ($arr_assoc as $key => $value) {
        $query_str.=urlencode($key).'='.urlencode($value).'&';
    }
    return ($query_str);
}


#==========================СОБЫТИЯ НАЧАЛО=================================
function get_events($API_HOST, $API_KEY, $arr_assoc=[]) {
    $ch = curl_init();
    $relative_url = '/api/event';
    $prepared_str = query_builder($API_HOST, $arr_assoc, $relative_url);
    #var_dump($prepared_str);
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function get_event_by_id($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/event/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function create_event($API_HOST, $API_KEY, $arr_assoc) {
    $ch = curl_init();
    $relative_url = '/api/event/';
    $prepared_str = $API_HOST.$relative_url;
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);    
}

function delete_event($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/event/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function update_event($API_HOST, $API_KEY, $arr_assoc, $id) {
    $ch = curl_init();
    $relative_url = '/api/event/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

#==========================СОБЫТИЯ КОНЕЦ=================================


#==========================ПОДПИСЧИКИ НАЧАЛО=================================
function get_subscribers($API_HOST, $API_KEY, $arr_assoc=[]) {
    $ch = curl_init();
    $relative_url = '/api/subscribers';
    $prepared_str = query_builder($API_HOST, $arr_assoc, $relative_url);
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function get_subscribers_by_id($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function create_subscribers($API_HOST, $API_KEY, $arr_assoc) {
    $ch = curl_init();
    $relative_url = '/api/subscribers/';
    $prepared_str = $API_HOST.$relative_url;
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);    
}

function update_subscribers($API_HOST, $API_KEY, $arr_assoc, $id) {
    $ch = curl_init();
    $relative_url = '/api/subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function delete_subscribers($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}
#==========================ПОДПИСЧИКИ КОНЕЦ=================================


#==========================ПОДПИСКИ НА СОБЫТИЯ=================================
function get_events_subscribers($API_HOST, $API_KEY, $arr_assoc=[]) {
    $ch = curl_init();
    $relative_url = '/api/events-subscribers';
    $prepared_str = query_builder($API_HOST, $arr_assoc, $relative_url);
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function get_events_subscribers_by_id($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/events-subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function create_events_subscribers($API_HOST, $API_KEY, $arr_assoc) {
    $ch = curl_init();
    $relative_url = '/api/events-subscribers/';
    $prepared_str = $API_HOST.$relative_url;
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);    
}

function update_events_subscribers($API_HOST, $API_KEY, $arr_assoc, $id) {
    $ch = curl_init();
    $relative_url = '/api/events-subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arr_assoc));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}

function delete_events_subscribers($API_HOST, $API_KEY, $id) {
    $ch = curl_init();
    $relative_url = '/api/events-subscribers/';
    $prepared_str = $API_HOST.$relative_url.$id.'/';
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    $headers = [
        'Authorization: Api-Key '.$API_KEY,
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return($server_output);
}
#==========================ПОДПИСКИ НА СОБЫТИЯ КОНЕЦ=================================


#=================================КОМАНДЫ============================================

function send_photo_to_subscribers($name, $photo_path, $caption = '', $API_HOST, $API_KEY) {
    $relative_url = '/api/send-photo-to-subscribers/';
    $prepared_str = $API_HOST . $relative_url;

    // Проверка существования файла
    if (!file_exists($photo_path)) {
        return ['error' => 'Файл не найден: ' . $photo_path];
    }

    // Подготовка файла для отправки
    $file = new CURLFile($photo_path);
    $data = [
        'name' => $name,
        'caption' => $caption,
        'photo' => $file,
    ];

    $headers = [
        'Authorization: Api-Key ' . $API_KEY
    ];

    // Инициализация cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_POST, true);
    
    // Не используем http_build_query, просто передаем массив данных
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Выполнение запроса и получение ответа
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $response_json = json_decode($response, true);
    return $response_json;  // Или $status_code для получения статуса ответа
}


function send_two_photo_to_subscribers($name, $photo_path, $photo_path2, $caption = '', $API_HOST, $API_KEY) {
    $relative_url = '/api/send-two-photo-to-subscribers/';
    $prepared_str = $API_HOST . $relative_url;

    // Проверка существования файла
    if (!file_exists($photo_path)) {
        return ['error' => 'Файл не найден: ' . $photo_path];
    }

    // Проверка существования файла
    if (!file_exists($photo_path2)) {
        return ['error' => 'Файл не найден: ' . $photo_path];
    }

    // Подготовка файла для отправки
    $file = new CURLFile($photo_path);
    $file2 = new CURLFile($photo_path2);
    $data = [
        'name' => $name,
        'caption' => $caption,
        'photo' => $file,
        'photo2' => $file2,
    ];

    $headers = [
        'Authorization: Api-Key ' . $API_KEY
    ];

    // Инициализация cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $prepared_str);
    curl_setopt($ch, CURLOPT_POST, true);
    
    // Не используем http_build_query, просто передаем массив данных
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Выполнение запроса и получение ответа
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $response_json = json_decode($response, true);
    return $response_json;  // Или $status_code для получения статуса ответа
}

#=================================КОМАНДЫ КОНЕЦ============================================

