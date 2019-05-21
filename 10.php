<?php

$array = [2,4,3,6,3,2,5,5];
//函数定义
function FindNumsAppearOnce($array) {

    $cut = array_count_values($array);
    foreach($cut as $k=>$v){
        if($v==1){
            $arr[] = $k;
        }
    }
    //返回值
    return $arr;
}
print_r($array);