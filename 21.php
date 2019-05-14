<?php

//函数定义
function calSteps($n){
    if($n==1){
        return 1;
    }elseif($n==2){
        return 2;
    }else{
        //方法实现
        return calSteps($n-1)+calSteps($n-2);
    }
}//返回值
echo calSteps(5);