<?php include_once('head.php') ?>
<h1 class="w-50 mx-auto">area</h1>

<?php include_once('server.php') ?>

<form method='post'>
    <div class="row mx-auto w-50">
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
<?php include_once('footer.php') ?>