<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/20
 * Time: 8:36
 */
$str = "student. a am I";
print_r(ReverseSentence($str));
function ReverseSentence($str){

    $arr = explode(' ',$str);
    $arr = array_reverse('',$arr);
    $ar = implode(' ',$arr);
 return $ar;
}