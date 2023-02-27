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
    $old_n46 = ["秋元真夏","生田絵梨花","白石麻衣","西野七瀬","齋藤飛鳥"];
    $old_n46str = array_map(
      fn($str) => "乃木坂46卒業生の" . $str ,$old_n46
    );

    print_r($old_n46str);
  ?>
</body>
</html>
