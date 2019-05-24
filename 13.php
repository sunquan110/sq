<?php
function Add($num1, $num2){


    $arr = [$num1,$num2];
    $sum = array_sum($arr);
    echo $sum;
}
print_r(Add(10,20));