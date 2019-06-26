<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/26
 * Time: 8:35
 */

$target = 7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
function Find($target, $array) {
    $str = str_split($array,'');


    foreach($array as $k=>$v){
        if($v=$target){
            return $str;
        }
    }

}
print_r(Find($target,$array));