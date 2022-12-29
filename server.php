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
                <td><?= $width ?></td>
                <td><?= $height ?></td>
                <td><?= $area ?></td>

            </tr>
        </tbody>
    </table>
<?php endif; ?>




<!-- <a href="area-calc.php">Calc Agian</a> -->