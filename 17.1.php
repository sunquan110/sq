<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/27
 * Time: 8:37
 */
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
function Combine($arr_A, $arr_B){
 $arr=[];
    for($i=0;$i<$arr_A;$i++){
        for($j=0;$j<$arr_B;$j++){
            $arr_A=$arr_B;
            $arr=$arr_A;
            $arr_B=$arr;
        }
    }
    return $arr;
}
print_r(Combine($arr_A,$arr_B));