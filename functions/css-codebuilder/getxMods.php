<?php

// FUNCTION :: GET EXTENSION MODIFIERS
function getxMods($xMods_Set) {

  $xMods = '';

  for ($i = 0; $i < count($xMods_Set); $i++) {

    $xMods .= '[data-°'.strtolower($xMods_Set[$i]).']';
  }

  return $xMods;
}

?>
