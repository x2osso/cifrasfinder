<?php
function dd($var, $die = 0){
    echo "<pre>";
    print_r($var);
    echo "</pre>";

    if($die){
        die();
    }
}
