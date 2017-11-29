<?php
$qty=@$_GET['qty'];
$totalAmt=@$_GET['totalAmt'];
$exchange=@$_GET['exchange'];
$currency=@$_GET['currency'];
$equity=@$_GET['equity'];
$recentPrice=@$_GET['recentPrice'];

echo $qty."<br>".$totalAmt."<br>".$exchange."<br>".$currency."<br>".$equity."<br>".$recentPrice;
?>