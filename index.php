<?php

function identicalElements($array)
{
    $identical = 0;
    $element = '';

    foreach ($array as $item) {
        if ($element == $item) {
            $identical++;
        }
        $element = $item;
    }

    return $identical;
}

$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];
echo identicalElements($array);