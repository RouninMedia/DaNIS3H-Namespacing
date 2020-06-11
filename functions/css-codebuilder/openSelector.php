<?php

// FUNCTION :: SEPARATE OUT SELECTOR AND FLEXIBLE MODIFIERS
function openSelector($Selector) {

  $Selector = str_replace('‹', '[', $Selector);
  $Selector = str_replace('›', ']', $Selector);
  $Selector = str_replace('\'', '"', $Selector);
  
  $Open_Selector = json_decode($Selector, TRUE);

  return $Open_Selector;
}

?>
