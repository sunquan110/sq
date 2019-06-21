<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/19
 * Time: 8:42
 */
$array = [2,4,3,6,3,2,5,5];
function FindNumsAppearOnce($array){
    $cut = array_count_values($array);
    foreach($cut as $k=>$v){
        if($v==1){
       $arr[]=$k;
        }

    }
    return $arr;
}

print_r(FindNumsAppearOnce($array));