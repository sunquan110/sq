<?php


$target = 7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
function Find($target,$array){
    foreach($target as $k=>$value){
        $array=$value;
    }
    return $array;
}
print_r(Find($target,$array));