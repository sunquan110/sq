<?php
$n= 100;
$m= 1300;

print_r(index($n,$m));

function index($x,$y){
    $data = [];
    for($i=$x;$i<=$y;$i++){
        $data[] = substr_count($i,1);
    }
    return array_sum($data);
}