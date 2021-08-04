<?php

function fn_count($str){

    $i=0;
    while ($str[$i] != '') {
        $i++;
    }

    return $i;

}

return(fn_count(array('php', 'c\'est', 'cool', 'parfois')));

?>