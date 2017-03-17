<?php
//ini_set("allow_url_fopen", 1);
//
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_URL, 'http://validate.jsontest.com/?json=%7B%22key%22:%22value%22%7D');
//$result = curl_exec($ch);
//curl_close($ch);
//$obj = json_decode($result);
$json = file_get_contents('http://validate.jsontest.com/?json=%7B%22key%22:%22value%22%7D');

$obj = json_decode($json);
echo $obj->size;
