<!-- 新規作成 2023/2/15 -->
<!-- 入力チェックを追加 2023/2/16 -->
<!-- BBS掲示板cgiプログラム -->
<!-- 書き込み処理 -->
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

        function out_url() {
            echo "<a href=index.php>掲示板へ</a>";
        }

        // タイトルを取得する変数
        $title = $_POST["title"];
        $title = str_replace(array(" ","　"),"",$title);
        // 入力チェック
        if(strlen($title) == 0){
            echo "タイトルを入力してください";
            out_url();
            exit();
        }
        // 内容を取得する変数
        $sum = $_POST["sum"];
        $sum = str_replace(array(" ","　"),"",$sum);
        // 入力チェック
        if(strlen($sum) == 0){
            echo "内容を入力してください";
            out_url();
            exit();
        }

        // 日付を取得
        $date1 = date("Y年m月d日 H時i分s秒");
        // ミリ秒を取得
        $w_time = microtime(true);
        $w_array = explode('.',$w_time);
        $mtime = $w_array[1];
        $microtime = intval($mtime / 100);

        // ファイルに書き込む内容を変数に代入する。
        $result = "<br>". "日付:" .$date1 . $microtime . "<br>" . "タイトル:" . $title . "<br>" . "内容:" . $sum;

        // 書き込みモードでファイルを開く
        $write1 = file_put_contents("bbs.txt", $result,FILE_APPEND);

        // ファイルの書き込みチェック処理
        if($write1){
            echo "ファイルの書き込みが成功しました。";
        } else {
            echo "ファイルの書き込みに失敗しました。";
        }

        out_url();


    ?>
</body>

</html>
