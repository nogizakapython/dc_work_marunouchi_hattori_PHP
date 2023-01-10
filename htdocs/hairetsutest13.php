<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列テスト(配列の要素の追加)</title>
</head>
<body>
  <?php
    $morescore = [100,60];
    $scores = [50,80,...$morescore,60];

    foreach($scores as $score){
      echo "<p>" . $score . "</p>";
    }
  ?>
</body>
</html>