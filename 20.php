<?php

print_r(CountSteps(1,1));
function CountSteps($x,$y){
    $data = '';
    foreach($x as $k=>$v){
        $data=$v;
        foreach($y as $ke=>$vo){
            $data=$vo;
        }
    }
return $data;
}