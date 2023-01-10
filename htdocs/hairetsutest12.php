<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列テスト(配列のキー)</title>
  <style>
      .test1 {
        color:blueviolet;
        font-size:20px;
      }
  </style>  
</head>
<body>
  <?php
    $scores = [
      'first' => 90,
      'second' => 40,
      'Third' => 100
    ];
    $count = count($scores);

    
    foreach($scores as $key => $score){
      echo "<p class=test1>" . $key . ' - ' . $score . "</p>" . PHP_EOL;
    }
  ?>
</body>
</html>