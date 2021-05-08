<?php

$arr1 = [3, 51, 56, 3, 512, 4, 9];
$arr2 = [34, 65, 34, 21];
$arr3 = [];
//$arr3 = array_merge($arr1,$arr2);

for ($i = 0; $i < count($arr1); $i++) {
    array_push($arr3, $arr1[$i]);
}
for ($i = 0; $i < count($arr2); $i++) {
    array_push($arr3, $arr2[$i]);
}
for ($i = 0; $i < count($arr3); $i++) {
    echo $arr3[$i] . ' ';
}
