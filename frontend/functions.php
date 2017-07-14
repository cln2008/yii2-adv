<?php
function funcGetDump($data){

    return print_r($data, true);
}

function funcShowDump($data){

    echo "<pre>" . print_r($data, true) . "</pre>";
}
