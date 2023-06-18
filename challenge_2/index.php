<?php

$input_array = [2, 3, 1, 2, 3];
$element_occurences = array_count_values($input_array);

foreach ($element_occurences as $element => $occurence) {
    if ($occurence > 1) {
        echo $element.' ';
    }
}
