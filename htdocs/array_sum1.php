<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列の集計</title>
</head>
<body>
  <?php

    function output($array_name){
      print_r($array_name);
    }


    // 配列の0番目から5番目を10で入れる
    $scores = array_fill(0,5,10);
    output($scores);

    $scores1 = range(1,10);
    output($scores1);

    $scores2 = range(1,10,2);
    output($scores2);

    // 配列の合計
    echo array_sum($scores2) . PHP_EOL;

    // 配列の最大値
    echo max($scores2) . PHP_EOL;

    // 配列の最小値
    echo min($scores2) . PHP_EOL;

    // 配列の平均値
    echo array_sum($scores2) / count($scores2) . PHP_EOL;






  ?>
</body>
</html>
