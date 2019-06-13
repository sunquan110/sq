<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/13
 * Time: 8:36
 */
$data = [1,2,3,4,5,6];
print_r(one($data));
function one($data){
    $dat =[];
    $da=[];
    foreach($data as $k=>$v){

        if(!$v%2==0){
            $dat=$v;
        }elseif($v%2==0){
            $da=$v;
        }
    }
    return $dat;
}