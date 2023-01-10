<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列テスト</title>
</head>
<body>
  <?php
    $scores = [90,40,100];
    $count = count($scores);

    // var_dump($scores);

    for($i=0;$i<$count;$i++){
      echo "<p>". $scores[$i] . "</p>";
    }
  ?>
</body>
</html>