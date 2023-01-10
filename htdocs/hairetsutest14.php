<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列テスト(連想配列)</title>
</head>
<body>
  <?php
    $score1 = [
      'manatsu' => 85,
      'erika' => 75,
      'yuri' => 88,
      'mio' => 87,
      'nao' => 15,
      'umezawa' => 28,
      'sakura' => 32
    ];

    $score2 = [
      'okahina' => 10,
      'teresa' => 86,
      'aruno' => 77,
      'nao' => 31
    ];
    // ２つの連想配列を連結する
    $score3 = array_merge($score1,$score2);
    // 値の順に逆順に並び替える
    arsort($score3);

    foreach($score3 as $key => $score){
      echo "<p>" . $key . " → " . $score . "</p>";
    }
    
  ?>
</body>
</html>