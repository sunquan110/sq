<?php
/**
 * Created by PhpStorm.
 * User: 孙权
 * Date: 2019/6/18
 * Time: 19:05
 */

$numbers = [3,32,321];
function PrintMinNumber($numbers){
    $data = explode($numbers,',');
    

    print_r( PrintMinNumber($data));
}