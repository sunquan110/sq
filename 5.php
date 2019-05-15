<?php
$arr = [1,2,3,4,5,6];
print_r(index($arr));
function index($array)
{
    $a[] = '';
    $ar[] = '';
    foreach ($array as $k => $v) {
        if ($v % 2 == 1) {
            $a[] = $v;
        } elseif ($v % 2 == 0) {
            $ar[] = $v;

        }
    }
    echo json_encode(array_merge($a,$ar));
}
