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


    $a = [3,4,8];
    $b = [4,8,12];
    // 配列の結合
    $merged = array_merge($a,$b);
    output($merged);
    // 重複を除いて配列の結合
    $unique = array_unique($merged);
    output($unique);

    // 配列aから配列bの重複要素を除いて返す
    $diff1 = array_diff($a,$b);
    output($diff1);

    // 配列bから配列aの重複要素を除いて返す
    $diff2 = array_diff($b,$a);
    output($diff2);

    // 配列bから配列aの重複要素を除いて返す
    $common = array_intersect($b,$a);
    output($common);




    $c = [1,2];
    $d = [3,4];
    // テンプレート演算子を使って配列の結合
    $w_array = array_merge($c,$d);
    output($w_array);






  ?>
</body>
</html>
