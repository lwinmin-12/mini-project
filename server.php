<?php
$folderName = "area-records";

?>


<?php if (isset($_POST["area_calc_form"])) : ?>

    <?php
    $width = $_POST['width'];
    $height = $_POST['breath'];

    $area = $width * $height;

    ?>
    <table class="table table-bordered mx-auto w-50">
        <thead>
            <tr>
                <th>Width</th>
                <th>Height</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $width ?> ft</td>
                <td><?= $height ?> ft</td>
                <td><?= $area ?> sqft</td>

            </tr>
        </tbody>
    </table>
    <?php

    $json = json_encode(["width" => $width, "height" => $height, "area" => $area]);

    if (!is_dir($folderName)) {
        mkdir($folderName);
    }

    $fileName = "record" . uniqid() . ".json";
    $f = fopen($folderName . "/" . $fileName, "w");
    fwrite($f, $json);
    fclose($f);
    ?>
<?php endif; ?>




<!-- <a href="area-calc.php">Calc Agian</a> -->