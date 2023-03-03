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
    $old_h46 = ["渡邊美穂","影山優佳","宮田愛萌"];
    $old_h46str = array_map(
      fn($str) => "日向坂46卒業生の" . $str ,$old_h46
    );

    print_r($old_h46str);
  ?>
</body>
</html>
