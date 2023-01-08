<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>関数テスト8</title>
  <style>
    .a{
      color:#A90;
      font-size:16px;
      font-weight:bold;
    }
  </style>  
</head>
<body>
  <?php
    

    function showInfo(string $name,int $score):void
    {
      echo "<p class=a>" . $name . ":" . $score . "</p>" . PHP_EOL;
    }
    
    showInfo('Akimoto',80);
    showInfo('Ikuta',75);
    showInfo('Yumiki',5);
  ?>
</body>
</html>