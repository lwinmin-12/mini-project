<?php include_once "head.php"; ?>
<?php include_once "fri-logic.php"; ?>
<div class="w-50 mx-auto">
    <h1>Create Friend Card</h1>
    <form enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Friend Name</label>
            <input type="text" name="fri-name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Phone</label>
            <input type="number" name="fri-Phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="fri-address" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Photo</label>
            <input type="file" name="fri-photo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fri-check" class="form-label">Friend Photo</label>
            <input type="checkbox" name="fri-check" class="form-check" required>
        </div>
        <button class="btn btn-primary">submit</button>
    </form>
    <div class="my-5 row justify-content-between">
        <?php $data = json_decode(file_get_contents($friRecordsData), true) ?>

        <?php foreach ($data as $key=>$ea) : ?>
            <div class="card text-center col-5 mb-3 py-3">
                <img src="<?= $ea["photo"] ?>" width="100" height="100" class="rounded-circle d-block mx-auto" alt="">
                <h4><?= $ea["fri-name"] ?></h4>
                <p><?= $ea["fri-Phone"] ?></p>
                <a href="friDetail.php?index=<?= $key ?>" class="btn btn-primary w-100 d-block">detail</a>
            </div>
        <?php endforeach; ?>

    </div>
</div>


<?php include_once "footer.php"; ?>