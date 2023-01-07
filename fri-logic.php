<?php



$friends = [];
$folderName = "friZone";
$friRecordsData = "friRecordData.json";

if (file_exists($friRecordsData)) {
    $friends = json_decode(file_get_contents($friRecordsData),true);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_FILES["fri-photo"]["error"] === 0) {

        $filename = $folderName . "/" . uniqid() . "friend" . "." . pathinfo($_FILES["fri-photo"]["name"])["extension"];

        move_uploaded_file($_FILES["fri-photo"]["tmp_name"], $filename);
        $_POST["photo"] = $filename;

        array_push($friends, $_POST);
        // echo "<pre>";
        // print_r($friends);
      echo $filename ;
        $friRecords = fopen($friRecordsData, 'w');
        fwrite($friRecords, json_encode($friends));
        fclose($friRecords);
    }
}
