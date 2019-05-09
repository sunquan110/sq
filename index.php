<?php
$str ='adadadad';
print_r(two($str));
function two($str)
{
    $data = str_split($str);
    $t = array_count_values($data);
    foreach ($t as $k => $value) {
        if ($value >= 3) {
            return $k;
        }
    }
}
