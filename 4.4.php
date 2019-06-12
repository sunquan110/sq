<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/12
 * Time: 8:38
 */



function one($n,$m){
    $arr = range($n,$m);
    $sum = 0;
    for($i=$n;$i<$m;$i++){
        $j=$i;
        while(!$j=0){
            $sum+=($j%10==1?1:0);
               $j/10;
        }
    }
return $sum;
}
print_r(one(1,13));