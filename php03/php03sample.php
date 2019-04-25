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

?>
