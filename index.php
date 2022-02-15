<?php

function calculate($arr) {
    echo 'The easy solution by using library function for calculate min and max : ';
    echo '<br>';
    echo '<br>';
    echo 'The max() value = '. max($arr);
    echo '<br>';
    echo 'The min() value = '. min($arr);
    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo 'The traditional solution : ';

    echo '<br>';
    echo '<br>';

    $counter = count($arr);
    $output_max = $arr[0];
    $output_min = $arr[0];

    for ($i = 1; $i < $counter; $i++){
        if ($output_max < $arr[$i]){
            $output_max = $arr[$i];
        }
        elseif ($output_min > $arr[$i]){
            $output_min = $arr[$i];
        }
    }

    return 'The max value = '. $output_max. '<br>'.' The min value = '. $output_min. '<br>'.'And number of odd numbers = '. odd_number($arr);



}

function odd_number($arr) {
    $counter = count($arr);
    $odd_number = 0;
    for ($i = 0; $i < $counter; $i++){
        if ($arr[$i] % 2 != 0 ){
            $odd_number ++;
        }
    }

    return $odd_number;
}

echo calculate([23,1,3,7,4,10,2,50,5,9,12]);
