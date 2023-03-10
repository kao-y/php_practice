<?php
$height = 160;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 

//=> 何も表示されない
echo "\n";

$height = 140;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される

if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}

//=> "ご乗車になれます。" が表示される。
echo "\n";

for($i = 0; $i < 10; $i++){
  echo $i;
}
//=> 0123456789 が表示される。
echo "\n";

$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理をおこなう。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
//=> 5050 と表示される。
echo "\n";
