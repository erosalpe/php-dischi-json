<?php
$string = file_get_contents("song-list.json");
//var_dump($string);

$list = json_decode($string, true);
//var_dump($list);

header('Content-Type: application/json');
echo json_encode($list);
?>