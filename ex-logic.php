<?php

$api = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$apiArr = json_decode($api, true);

$rates = array_map(function ($ea) {
   return str_replace(',', '', $ea);
}, $apiArr["rates"]);

if (isset($_POST['calc'])) {
   $amount = $_POST['amount'];
   $from = $_POST['from'];
   $to = $_POST['to'];
   $result = $amount * $rates[$from] / $rates[$to];
?>
<div class="bg-light border-3 py-3 px-1">
   <p class="mb-1 text-secondary">From <? $amount ?> <?= $from ?> to <?= $to ?> </p>
   <h2 class="fw-bold"><?= round($result,2) ?> <?= $to ?></h2>
</div>
<?php }; ?>