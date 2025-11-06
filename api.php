<?php
$id  = $_GET['id'];
$cmd = $_GET['cmd'];
$file = 'users.json';
$json = json_decode(file_get_contents($file), true);
$json[$id]['cmd'] = $cmd;
file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT));
echo "OK";
?>