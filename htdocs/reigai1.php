<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>例外処理テスト</title>
</head>
<body>
  <?php
    $msg = "AAAAA";
    $num = "10";
    $ans;
    try{
      $ans = (integer) $msg;
    } catch(Exception $e){
      echo "<p>文字列です</p>";
    } finally {
      echo $ans;
      echo "<p>終了</p>";
    }
  ?>  
</body>
</html>