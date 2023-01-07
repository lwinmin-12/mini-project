<?php

$friends = [];
$index = $_GET["index"];
$fileName = "friRecordData.json";

if (file_exists($fileName) && filesize($fileName)) {
    $friends = json_decode(file_get_contents($fileName), true);
}

array_splice($friends , $index ,1);

file_put_contents($fileName ,json_encode($friends));

header("Location : friCard.php");