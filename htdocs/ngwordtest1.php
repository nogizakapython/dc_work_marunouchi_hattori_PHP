<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NGワードテスト</title>
</head>
<body>
  <?php
    $list = ["死ね","自殺","まんこ","おちんちん","ちんこ","おまんこ"];
    $str1 = "死ね、チンコ野郎";
    $count = 0;
    foreach($list as $word) {
      $w_str = "/" . $word . "/";
      $a = preg_match($w_str,$str1);
      if ($a == true){
        $count += 1;
      }
    }
    if ($count >= 1){
      echo "NGワードが入っているため投稿禁止です";
      exit();
    }
  ?>
</body>
</html>
