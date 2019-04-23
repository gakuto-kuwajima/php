<?php
  $integer = 20;
  $string = "abc";

  echo $integer;
  echo $string;

  $new_integer = $integer + 10;
  echo $new_integer;

  $red_fruit = "APPLE";
  $yellow_fruit = "Banana";

  $array =[2017,2018,2019,2020];
  echo $array[0];
  echo $array[2];

  $array2 = ["spring","summer","autumn","winter"];
  echo $array2[2];

  $animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥",
  ];

  echo $animals["cat"];
  echo $animals["bird"];

  $result = "true";

  if ($result == "true") {
    echo "成功しました。";
  } else {
    echo "失敗しました。";
  }


  $value = 6;
  echo $value + 2;

  $value = 6;
  echo $value - 2;

  $value = 6;
  echo $value * 2;

  $value = 6;
  echo $value / 2;

  $value = "AAA";
  echo $value . "BBB";

 ?>
