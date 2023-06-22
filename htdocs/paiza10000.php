<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $str_num = fgets(STDIN);
    $str_num = trim($str_num);
    $str_num = (int) $str_num;
    $array1 = [];
    $array2 = [];
    $ans = "";
    $work_array = [];
    $t_num =  fgets(STDIN);
    $t_num = trim($t_num);
    $t_num = (int) $t_num;
    $count = 0;
    for($i=0;$i<$t_num;$i++){
        $data = fgets(STDIN);
        $data = trim($data);
        array_push($array1,$data);
    }
    for($j=1;$j<=$str_num;$j++){
        for($k=0;$k<$t_num;$k++){
            $w_data = $array1[$k];
            $work_array = explode(' ',$w_data);
            $target = (int) $work_array[0];
            $w_str = $work_array[1];
            if($target == $j){
                array_push($array2,$w_str);
            } else {
                array_push($array2,"!");
            }
        }
    }
    $char1 = trim(fgets(STDIN));
    for($i=0;$i<$str_num;$i++){
        $w_str2 = $array2[$i];
        if ($w_str2 == "!" ){
            $ans = $ans . $char1;
        } else {
            $ans = $ans . $w_str2;
        }
    }
    echo $ans;
?>
