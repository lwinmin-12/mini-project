<?php include_once "head.php"; ?>
<div class="w-50 mx-auto">
    <h1>Create Friend Card</h1>

    <form action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Friend Name</label>
            <input type="text" name="fri-name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Phone</label>
            <input type="text" name="fri-Phone" class="form-control" required>
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

    </form>
</div>


<?php include_once "footer.php"; ?>