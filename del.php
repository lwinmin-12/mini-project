<?php

$filePatch = "area-records/".$_GET["name"];

echo $filePatch;

    unlink($filePatch);

header("Location: area-calc.php");
