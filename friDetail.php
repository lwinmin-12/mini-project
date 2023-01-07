<?php include_once "head.php"; ?>

<?php

$friends = [];
$index = $_GET["index"];
$fileName = "friRecordData.json";

if (file_exists($fileName) && filesize($fileName)) {
    $friends = json_decode(file_get_contents($fileName), true);
}

$eaData = $friends[$index];

?>

<div class="w-50 mx-auto card text-center col-5 mb-3 ">
    <div class="w-100 text-end my-2">
        <a href="delFri.php?index=<?= $index ?>" class="btn btn-danger">del</a>
    </div>
    <img src="<?= $eaData["photo"] ?>" width="100" height="100" class="rounded-circle d-block mx-auto" alt="">
    <h4><?= $eaData["fri-name"] ?></h4>
    <p><?= $eaData["fri-Phone"] ?></p>
    <a href="friCard.php" class="btn btn-primary w-100 d-block">back</a>

</div>

<?php include_once "footer.php"; ?>