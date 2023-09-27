<?php

function genera_password($range_typo, $range_leng)
{

    $result = "";
    $max_leng_array = sizeof($range_typo);
    for ($i = 0; $i < $range_leng; $i++) {

        $random_number = rand(0, $max_leng_array - 1);

        $result = $result . $range_typo[$random_number];
    }
    ;

    return $result;
}
;

?>