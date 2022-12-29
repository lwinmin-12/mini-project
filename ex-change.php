<?php include_once('head.php') ?>
<div class="w-50 mx-auto">
    <h1>exchange</h1>
    <?php require_once "ex-logic.php"; ?>
    <div class="row g-3">
        <form id="exForm" method="POST"></form>
        <div class="col-12">
            <label for="" class="form-label">Amount</label>
            <input name="amount" class="form-control" form="exForm" required type="number" placeholder="amount">
        </div>
        <div class="col-6">
            <label for="" class="form-label">from currency</label>
            <select name="from" form="exForm" class="form-select" required>
                <option value="">Select</option>
                <?php foreach ($rates as $key => $ea) : ?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6">
            <label for="" class="form-label">to currency</label>
            <select name="to" form="exForm" class="form-select" required>
                <option value="">Select</option>
                <?php foreach ($rates as $key => $ea) : ?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12">
            <button name="calc" form="exForm" class="btn btn-primary w-100 btn-lg">Calculate</button>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>