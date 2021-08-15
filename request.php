<?php
header('Access-Control-Allow-Origin: *');

$json = file_get_contents('https://sknt.ru/job/frontend/data.json');
print_r($json);
// End php
?>