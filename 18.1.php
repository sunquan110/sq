<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/28
 * Time: 8:35
 */
$n = 10;
function NumberOf1($n){
    $num = decbin($n);
    $arr = substr_count($num,'1');
    return$arr;
}
print_r(NumberOf1($n));