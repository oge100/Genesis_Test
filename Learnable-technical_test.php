<?php

function nth_most_rate($list, $n){
    // Creating an empty array for the output

    $output = array();

    // Counting the occurrence of each value in the array
    $assoc_arr = array_count_values($list);
    asort($assoc_arr);
    // Counting numbers
    foreach($assoc_arr as $key => $value){
        $output[$value][] = $key;
    }

    $result_values = array_values($output);

    $result_keys = array_keys($output);

    if ($n - 1  < 0 || $n > count($assoc_arr) - 1){
        echo "The rarest position value is invalid \n";
    }
    else{
        echo "The rarest position at " . $n . ":\n";
        foreach($result_values[$n - 1] as $value){
            echo $value. "\n";
        }
        echo "Which appears ". $result_keys[$n - 1] . " time(s) \n";
    }
    return ( $assoc_arr);
}

nth_most_rate([5,6,3,2,4,3,4,4,4,6,5,5,7,4,3,4,4], 4);

?>