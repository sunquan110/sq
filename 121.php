<?php
$n =5;
function Sum_Solution($n){
    $num = range(1,$n);
    $sum = array_sum($num);
    return $sum;
}
print_r(Sum_Solution($n));