<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>関数テスト(可変長引数)</title>
  <style>
    .test1 {
      color:#f1ca7a;
      font-size:20px;
      font-weight:bold;
    }
  </style>  
</head>
<body>
  <?php
 
    // 可変長引数で合計を計算する
    function getStats(...$numbers)
    {
      $total = 0;
      foreach($numbers as $number){
        $total += $number;
      }
      return [$total,$total / count($numbers)];
    }

    // ブラウザ表示
    function disp($num){
      echo "<p class=test1>${num}</p>";
    }

    list($sum1,$avg1) = getStats(1,4,7);
    disp($sum1);
    disp($avg1);

    [$sum2,$avg2] = getStats(1,3,5,7,9,11);
    disp($sum2);
    disp($avg2);

  ?>
</body>
</html>