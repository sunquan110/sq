<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/7/1
 * Time: 8:36
 */
function CountSteps($x,$y){
    $data = '';
    foreach($x as $k=>$v){
        $data = $v;
        foreach($y as$k=>$vo){
            $data = $vo;
        }
    }
    return $data;

}
print_r(CountSteps($x,$y));