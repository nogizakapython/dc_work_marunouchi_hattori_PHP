<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>無名関数テスト</title>
</head>
<body>
  <?php
      $sum = function($a,$b,$c){
        return $a + $b + $c;
      };
      
      echo $sum(100,300,500) . PHP_EOL;
  ?>
</body>
</html>