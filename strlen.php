<?php

function fn_strlen ($str){

  $i=0;
  while ($str[$i] != '') {
    $i++;
  }

  return $i;

}

return(fn_strLen('j\'ai sommeil'))

?>