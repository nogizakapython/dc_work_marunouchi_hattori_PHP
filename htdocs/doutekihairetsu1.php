<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>動的配列の課題</title>
</head>
<body>
    <?php
      // 自分の得意な言語で
      // Let's チャレンジ！！
      echo("最初の配列の要素数と操作数を入力してください");
      $data = trim(fgets(STDIN));
      $array1 = explode(' ',$data);
      $c = $array1[0];
      $num1 = $array1[1];
      echo("最初に定義する配列の要素をスペース区切りで入力してください");
      $data2 = trim(fgets(STDIN));
      $array2 = explode(' ',$data2);
      $count = 0;
      $limit_c = $num1;
      while ($count < $limit_c){
          echo("操作の内容「1:要素の削除」「2:要素をスペース区切りで表示」、それ以外は要素の追加");
          $str1 = trim(fgets(STDIN));
          // 1の時、要素を削除
          if ($str1 == "1"){
              array_pop($array2);
          // 2の時、配列の要素をスペース区切りで出力
          } else if ($str1 == "2"){
              $work = "";
              for($i=0;$i<count($array2);$i++){
                  if ($i == count($array2) - 1){
                      $work = $work . $array2[$i];
                  } else {
                      $work = $work . $array2[$i] . " ";
                  }
              }
              echo $work . "\n";
          // 要素の追加
          } else {
              $w_array1 = explode(' ',$str1);
              $f = $w_array1[0];
              $ele = $w_array1[1];
              array_push($array2,$ele);
          }
          $count += 1;
      }

  ?>

</body>
</html>
