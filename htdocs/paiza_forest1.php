<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num1 = trim(fgets(STDIN));
    $array1 = [];
    for($i=0;$i<$num1;$i++){
        $data = trim(fgets(STDIN));
        $w_array = explode(' ',$data);
        $key = $w_array[0];
        $value = $w_array[1];
        $array1 = array_merge($array1,array($key=>$value));
    }
    $res1 = trim(fgets(STDIN));
    print($array1[$res1]);

?>
