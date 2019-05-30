<?php
function one($n){
    $num = decbin($n);
    $arr = substr_count('1',$num);
    return $arr;
    echo one(5);
}