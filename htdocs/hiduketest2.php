<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>現在日付取得テスト</title>
</head>
<body>
    <form method="post" action="hiduketest2.php">
        <input type="text" name="test1">
        <input type="submit" value="送信">
    </form>    
    <?php
        $date = date("Y-m-d");
        if(isset($_POST['test1'] ) && $_POST['test1'] != ""){
            print '日付: ' . $date . ' 入力した内容: ' . htmlspecialchars($_POST['test1'],ENT_QUOTES,'UTF-8');
        } else {
            print "入力されていません";
            exit;
        }

    ?>

</body>
</html>