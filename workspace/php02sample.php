<?php
  $integer = 20;
  $string = "abc";

  echo $integer;
  echo $string;

  $new_integer = $integer + 10;
  echo $new_integer;


  $red_fruit = "APPLE";
  $yellow_fruit = "Banana";


//配列
  $array =[2017,2018,2019,2020];
  echo $array[0];
  echo $array[2];


//連想配列
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


//二項演算
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


//論理演算
  $value = 10;
  $result = $value == 20;
  var_dump($result);

  $value = 10;
  $result = $value < 20;
  var_dump($result);

  $value = 10;
  $result =$value > 20;
  var_dump($result);


  $a = "20";
  $b = 20;

  $result = $a == $b;
  var_dump($result);

  $result = $a === $b;
  var_dump($result);


//単項演算
  $value = 10;
  ++$value;
  echo $value;

  $value = 10;
  --$value;
  echo $value;


//複合演算
  $value = 10;
  $value += 5;
  echo $value;

  $value = 10;
  $value -= 5;
  echo $value;

  $value = 'apple';
  $value .= 'orange';
  echo $value;


  //三項演算
  $value = 10;
  $result = ($value < 20) ? '$valueは20より小さい': '$valueは20と等しいかまたは大きい';
  echo $result;

  $value = 10;
  $result = ($value < 20) ? "$valueは20より小さい" : "$valueは20と等しいかまたは大きい";
  echo $result;
 ?>
