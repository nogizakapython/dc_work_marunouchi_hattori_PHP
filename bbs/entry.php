<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS掲示板</title>
</head>
<body>
    <?php

        // タイトルを取得する変数
        $title = $_POST["title"];
        // 内容を取得する変数
        $sum = $_POST["sum"];

        $result = "<br>" . "タイトル:" . $title . "<br>" . "内容:" . $sum;

        // 書き込みモードでファイルを開く
        $write1 = file_put_contents("bbs.txt", $result,FILE_APPEND);

        if($write1){
            echo "ファイルの書き込みが成功しました。";
        } else {
            echo "ファイルの書き込みに失敗しました。";
        }

        echo "<a href=index.php>掲示板へ</a>";




    ?>
</body>

</html>
