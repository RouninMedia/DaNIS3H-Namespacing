<?php

// FUNCTION :: REQUEST NAMESPACE
function requestNamespace($Module_Name, $Module_Publisher, $Namespace, $Selector, $ashivaNamespaceAccess) {
  
  // STEP 1: SET UP FUNDAMENTALS
  $Namespace_Prefix = $Namespace.'»»»';

  $Selector = str_replace('‹', '[', $Selector);
  $Selector = str_replace('›', ']', $Selector);
  $Selector = str_replace('"', '\"', $Selector);
  $Selector = str_replace('\'', '"', $Selector);

  
  $Selector_Array = json_decode($Selector, TRUE);

  if (count($Selector_Array) > 2) {

    $Substitute_Module_Address = str_replace(['«', ' ', '»'], '', $Selector_Array[0]);
    $Substitute_FlexMods_Set = $Selector_Array[1];
    $Substitute_Selector = $Selector_Array[2];
  }

  else {

    $Substitute_Module_Address = str_replace(['«', ' ', '»'], '', $Selector_Array[0]);
    $Substitute_Selector = $Selector_Array[1];
  }



  // STEP 2: ESTABLISH VARIABLES, ACCORDING TO NAMESPACE SUBSTITUTION TYPE
  if ($Substitute_Module_Address === 'GLOBAL') {
      
    $Substitute_Publisher = $Substitute_ModuleName = $Substitute_Namespace = $Substitute_Module_Address;
  }

  elseif (strpos($Substitute_Module_Address, ':::') !== FALSE) {
      
    $Substitute_ModuleAddress_Array = explode(':::', $Substitute_Module_Address);
    $Substitute_Publisher = $Substitute_ModuleAddress_Array[0];

    $Substitute_ModuleName_Array = explode('*', $Substitute_ModuleAddress_Array[1]);
    $Substitute_ModuleName = $Substitute_ModuleName_Array[0];

    $Substitute_Namespace = url(str_replace('::', '•', $Substitute_ModuleName)).'»by»'.txt($Substitute_Publisher, 'camelCase');
    $Substitute_Namespace_Prefix = $Substitute_Namespace.'»»»';
  }

  else {

    $Console = '';
    $Console .= '  ⚠️ Ashiva Console:'."\n\n";
    $Console .= '  ⚠️ Issue: ashiva Namespace Reference does not begin with a Publisher Name followed by \':::\'.'."\n\n";
    $Console .= '  ⚠️ Next Step: In «'.src($Module_Publisher).':::'.src($Module_Name).'» Style Component, edit the reference to «'.$Substitute_Module_Address.'».'."\n\n";
    $Console .= '  ⚠️ Style Declaration: ‹\'«'.$Substitute_Module_Address.'»\', \''.$Substitute_Selector.'\'›';

    $Selector = "\n/*\n\n".$Console.' */';

    return $Selector;
  }



  // CHECK NAMESPACE ACCESS PERMISSIONS
  if (checkNamespaceAccess($Module_Name, $Substitute_ModuleName, $ashivaNamespaceAccess) === TRUE) {

    // GLOBAL Namespaces
    if ($Substitute_Module_Address === 'GLOBAL') {
          
      // ADD body > IF SELECTOR DOESN'T BEGIN WITH body
      $Substitute_Selector = (substr($Substitute_Selector, 0, 4) === 'body') ? $Substitute_Selector : 'body > '.$Substitute_Selector;

      // REMOVE ALL NAMESPACE PREFIXES FROM SUBSTITUTE SELECTOR
      if (strpos($Substitute_Selector, '»by»') !== FALSE) {

        $Substitute_Selector = str_replace('•', '', $Substitute_Selector);
        $Substitute_Selector = preg_replace('/([\#\.\"])[^»]+»by»[^»]+»»»/', '$1', $Substitute_Selector);
      }

      // PAD SUBSTITUTE SELECTOR
      $Substitute_Selector = ' '.$Substitute_Selector.' ';
      $Substitute_Selector = str_replace(' ', '  ', $Substitute_Selector);
          
      // ADD EXCLUSION QUALIFIER TO ELEMENT SELECTORS (EXCEPT FOR body)

      // Temporarily replace pseudo-classes and pseudo-elements
      $Substitute_Selector = str_replace([':', '(', ')'], ['IIIII', 'CCCCC', 'DDDDD'], $Substitute_Selector);

      $Substitute_Selector = preg_replace('/(\s[\w-]+)\s/', '$1:not([id*="»by»"]):not([class*="»by»"]) ', $Substitute_Selector);
      $Substitute_Selector = str_replace('body:not([id*="»by»"]):not([class*="»by»"]) ', 'body ', $Substitute_Selector);

      // Revert pseudo-classes and pseudo-elements
      $Substitute_Selector = str_replace(['IIIII', 'CCCCC', 'DDDDD'], [':', '(', ')'], $Substitute_Selector);


      // ADD EXCLUSION QUALIFIER TO ATTRIBUTE SELECTORS
      $Substitute_Selector = str_replace('] ', ']:not([id*="»by»"]):not([class*="»by»"]) ', $Substitute_Selector);

      // TRIM SUBSTITUTE SELECTOR
      $Substitute_Selector = str_replace('  ', ' ', $Substitute_Selector);
      $Substitute_Selector = trim($Substitute_Selector);

      $Selector = $Substitute_Selector;
    }


    // All Other Namespaces
    else {
      
      $Substitute_Selector = str_replace($Namespace, $Substitute_Namespace, $Substitute_Selector);
      $Substitute_Selector = str_replace('id="', 'id="'.$Substitute_Namespace_Prefix, $Substitute_Selector);
      $Substitute_Selector = str_replace('class="', 'class="'.$Substitute_Namespace_Prefix, $Substitute_Selector);
      $Substitute_Selector = str_replace($Substitute_Namespace_Prefix.$Substitute_Namespace_Prefix, $Substitute_Namespace_Prefix, $Substitute_Selector);

      if (isset($Substitute_FlexMods_Set)) {

        $Substitute_Selector = getFlexMods($Substitute_FlexMods_Set).' '.$Substitute_Selector;
      }

      if (!in_array(substr($Substitute_Selector, 0, 1), ['#', '.'])) {

        $Substitute_Selector = (substr($Substitute_Selector, 0, 8) === '[data-°') ? '.'.$Substitute_Namespace.$Substitute_Selector : '.'.$Substitute_Namespace.' '.$Substitute_Selector;
      }

      $Selector = $Substitute_Selector;
    }
  }
      
      
  else {

    $Console = '';
    $Console .= '  ⚠️ Ashiva Console:'."\n\n";
    $Console .= '  ⚠️ Issue: «'.src($Module_Publisher).':::'.src($Module_Name).'» has NO ACCESS to the «'.$Substitute_Module_Address.'» Namespace.'."\n\n";
    $Console .= '  ⚠️ Next Step: Enable «'.src($Module_Publisher).':::'.src($Module_Name).'» access to «'.$Substitute_Module_Address.'» Namespace in this page\'s Manifest.'."\n\n";
    $Console .= '  ⚠️ Style Declaration: ‹\'«'.$Substitute_Module_Address.'»\', \''.$Substitute_Selector.'\'›';

    $Selector = "\n/*\n\n".$Console.' */';
  }


  $Selector = $Substitute_Selector;
  
  return $Selector;
}


?>
