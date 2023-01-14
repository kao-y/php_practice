<?php
//for文を使って、1から10000までの合計の値を表示
$total = 0;
echo $total;
echo "\n";

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
