<?php include_once('head.php') ?>
<h1 class="w-50 mx-auto">area</h1>

<?php include_once('server.php') ?>

<form method='post'>
    <div class="row mx-auto w-50 my-3">
        <div class="col">
            <input class="form-control" type="number" name='width' placeholder="width" required>

        </div>
        <div class="col">
            <input class="form-control" type="number" name='breath' placeholder='breadth' required>

        </div>
        <div class="col">
            <button class='btn btn-outline-primary' name='area_calc_form'>calc</button>

        </div>
    </div>
</form>

<?php
if (is_dir($folderName)) :
    $files = array_filter(scandir($folderName), fn ($ea) => $ea != "." && $ea != "..");
?>
    <?php if (count($files)) { ?>

        <table class="table table-bordered mx-auto w-50">
            <thead>
                <tr>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Area</th>
                    <th class="text-center">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $ea) :
                    $eaFile = json_decode(file_get_contents($folderName . "/" . $ea), true);
                ?>
                    <tr>
                        <td><?= $eaFile["width"] ?> ft</td>
                        <td><?= $eaFile["height"] ?> ft</td>
                        <td><?= $eaFile["area"] ?> sqft</td>

                        <td class="text-center">
                            <a class="btn btn-outline-danger" href="del.php?name=<?= $ea ?>"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php }; ?>
<?php endif; ?>

<?php include_once('footer.php') ?>