<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/25
 * Time: 8:35
 */
$str = 'abcdefghijkmlnopqrstuwoxyzabcdefghij';
function FirstNotRepeatingChar($str) {
     $st =[];
    foreach($str as $k=>$v){
        if($v=$st){
            return $st;
        }
    }
}
print_r(FirstNotRepeatingChar($str));