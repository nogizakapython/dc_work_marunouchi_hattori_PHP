<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arraymap実装テスト</title>
</head>
<body>
  <?php
    $prices = [100,200,300];
    $newprices = array_map(
      function ($n) {return $n*1.1;},$prices
    );

    print_r($newprices);
  ?>
</body>
</html>
