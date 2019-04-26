<?php
//if文
$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
}


//else文
$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}

$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200) {
  echo "200cm 以上の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}


//switch文
$weekday = "月曜";
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}

$weekday = "月曜";
switch($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
  case "水曜":
    echo "資源ごみの日です。";
  default:
    echo "回収はありません。";
}

$weekday = "木曜";
switch($weekday){
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
   echo "資源ごみの日です。";
   break;
  default:
   echo "回収はありません。";
   break;
}


//さまざまな条件の比較
$a = 3;
$b = 3;
$c = "3" ;

var_dump($a == $b);

var_dump($a != $b);

var_dump($a > $b);

var_dump($a >= $b);

var_dump($a < $b);

var_dump($a <= $b);

var_dump($a === $b);

var_dump($a !== $c);


//for文 例１
for($i = 0; $i < 10; $i++){
  echo $i;
}

//for文 例２
$total = 0;
echo $total;

for($i = 0; $i <= 100; $i++){
  $total += $i;
}
echo $total;

//for文による配列処理
$fruits = ["apple", "orange", "lemon"];

echo count($fruits);

for($i = 0; $i < count($fruits); $i++){
  echo "要素は". $fruits[$i];
  echo "\n";
}




?>
