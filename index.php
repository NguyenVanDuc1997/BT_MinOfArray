<?php
function minOfArray($array){
    $min=$array[0];
    for($i=1;$i<count($array);$i++){
        if ($min>$array[$i])
            $min=$array[$i];
    }return $min;
}

$arr=[3,4,5,2,6,4,6,4,0,-9,11,3];
echo "Min cua mang cho san la: " .minOfArray($arr);
?>