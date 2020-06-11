<?php

// FUNCTION :: ADD SELECTORS
function addSelectors($Module_Name, $Module_Publisher, $Namespace, $ashivaNamespaceAccess, $Raw_Selectors, $Rule_Section = FALSE) {

  $Namespace_Prefix = $Namespace.'»»»';
  $Selectors = '';

  for ($s = 0; $s < count($Raw_Selectors); $s++) {

    $Selector = $Raw_Selectors[$s];
      
    if ($s > 0) {

      $Selectors .= ','."\n";

      if ($Rule_Section === TRUE) {

        $Selectors .= '  ';
      }
    }


    if (strpos($Selector, '  ') !== FALSE) {

      $Selector = preg_replace('/\s{2,}/', ' ', trim($Selector));
    }

    $Selector = str_replace('.', '.'.$Namespace_Prefix, $Selector);
    $Selector = str_replace('#', '#'.$Namespace_Prefix, $Selector);

    if (substr($Selector, 0, 3) === '‹') {

      if (substr($Selector, 0, 6) === '‹\'«') {

        $Selector = requestNamespace($Module_Name, $Module_Publisher, $Namespace, $Selector, $ashivaNamespaceAccess);
      }

      elseif (substr($Selector, 0, 4) === '‹[') {

        $Open_Selector = openSelector($Selector);
        $FlexMods_Set = $Open_Selector[0];
        $Selector = $Open_Selector[1];
        $Selector = getFlexMods($FlexMods_Set).' '.$Selector;
      }
    }

    $requiresContext = TRUE;

    if ((in_array(substr($Selector, 0, 1), ['#', '.'])) || (in_array(substr($Selector, 0, 5), ['body#', 'body.', 'body[', 'body ']))) {

      $requiresContext = FALSE;
    }

    if ($requiresContext === TRUE) {

      $Selector = (substr($Selector, 0, 8) === '[data-°') ? '.'.$Namespace.$Selector : '.'.$Namespace.' '.$Selector;
    }

    
    if (strpos($Selector, ' */') !== FALSE) {

      $Selector = str_replace(' */', '', $Selector);
      $Rule_Commented = TRUE;
    }

    $Selectors .= $Selector;
  }

  return $Selectors;
}

?>
