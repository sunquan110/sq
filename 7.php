<?php
//函数定义
function GetUglyNumber_Solution($index){
    if(!is_numeric($index)){
        return 'is a not number';
    }
    while($index%2==0){
        $index = $index/2;
    }
    while($index%3==0){
        $index = $index/3;
    }
    while($index%5==0){
        $index = $index/5;
    }
    if($index == 1){
        return $index.'是丑数';
    }else{
        return 0;
    }

}
//返回值
echo GetUglyNumber_Solution(1);

