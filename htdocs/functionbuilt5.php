<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ビルトイン関数5</title>
</head>
<body>
  <?php
    $input = '20200320Item-A  1200';
    $input = substr_replace($input,'Item-B  ',8,8);

    $date = substr($input,0,8);
    $product = substr($input,8,8);
    $amount =  substr($input,16);

    echo $date . PHP_EOL;
    echo $product . PHP_EOL;
    // echo $amount . PHP_EOL;
    echo number_format($amount) . PHP_EOL;
  ?>
</body>
</html>