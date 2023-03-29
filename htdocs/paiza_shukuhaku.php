<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    // paiza 宿泊費のスキルチェック
    // 新規作成 2023/3/29
    $input1 = trim(fgets(STDIN));
    $array1 = explode(' ',$input1);
    $shin =  (int) $array1[0];
    $hotel = (int) $array1[1];
    
    $n =  (int) $array1[2];
    $hotel_cost = 0;
    $kisei_cost = 0;
    $before = 0;
    $after = 0;
    $kankaku = 0;
    $res_array = [];
    for($i=1;$i<=$n;$i++){
        $data = trim(fgets(STDIN));
        $w_array1 = explode(' ',$data);
        $before = (int) $w_array1[0];
        if ($i==1){
            $kankaku = $before - $after;
            $kisei_cost = $shin;
            array_push($res_array,$kisei_cost);
        } else {
            $kankaku = $before - $after;
            $kisei_cost = 2 * $shin;
            $hotel_cost = $kankaku * $hotel;
            if ($kisei_cost <= $hotel_cost){
                array_push($res_array,$kisei_cost);
            } else {
                array_push($res_array,$hotel_cost);
            }
        }
        $after = (int) $w_array1[1];
        $hotel_cost = 0;
        $kisei_cost = 0;
        
    }
    array_push($res_array,$shin);
    
    echo (array_sum($res_array));
?>