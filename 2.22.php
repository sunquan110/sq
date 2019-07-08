<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/7/8
 * Time: 8:39
 */
$n=5;
function flower($n){

    if($n==1){
        return 1;
    }elseif($n==2){
        return 2;
    }else{
        return flower($n-1)+flower($n-2);
    }
}
print_r(flower($n));