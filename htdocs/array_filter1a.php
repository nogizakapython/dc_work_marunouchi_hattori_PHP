<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrayfilter実装テスト</title>
</head>
<body>
  <?php
    $array1 = range(1,15);
    $array2 = array_filter(
      $array1,

      fn($n) => $n % 3 === 1
    );

    print_r($array2);
  ?>
</body>
</html>
