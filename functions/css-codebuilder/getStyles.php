<?php

// FUNCTION :: GET STYLES
function getStyles($Modules, $ashivaNamespaceAccess) {

  $Stylesheet = '';

  foreach ($Modules['Styles'] as $Module_Name => $Module_Stylesheet) {

    $Module_Publisher = $Modules['Register'][$Module_Name]['Publisher'];
    $Namespace = str_replace('::', '•', url($Module_Name)).'»by»'.txt($Module_Publisher, 'camelCase');
    $Namespace_Prefix = $Namespace.'»»»';

    $Stylesheet_Segment = '';
    $Stylesheet_Segment .= '  /*'.str_repeat('*', (strlen($Module_Name) + strlen($Module_Publisher) + 13)).'*/'."\n";
    $Stylesheet_Segment .= ' /* '.strtoupper(txt($Module_Name)).' MODULE by '.strtoupper(txt($Module_Publisher)).' */'."\n";
    $Stylesheet_Segment .= '/*'.str_repeat('*', (strlen($Module_Name) + strlen($Module_Publisher) + 13)).'*/'."\n\n";
    

    for ($i = 0; $i < count($Module_Stylesheet); $i++) {

      if (isset($Module_Stylesheet[$i]['@Rule'])) {

        $Stylesheet_Segment .= "\n".'@'.$Module_Stylesheet[$i]['@Rule']['Type'];
        $Stylesheet_Segment .= ' ';

        if ($Module_Stylesheet[$i]['@Rule']['Type'] === 'keyframes') {

          $Stylesheet_Segment .= $Module_Stylesheet[$i]['@Rule']['Animation Name'];
          $Stylesheet_Segment .= ' {'."\n";

          for ($j = 0; $j < count($Module_Stylesheet[$i]['@Rule']['Animation Sequence']); $j++) {

          	$Stylesheet_Segment .= "\n".'  ';

            for ($k = 0; $k < count($Module_Stylesheet[$i]['@Rule']['Animation Sequence'][$j]['Frames']); $k++) {

              $Stylesheet_Segment .= $Module_Stylesheet[$i]['@Rule']['Animation Sequence'][$j]['Frames'][$k];
              if ($k < (count($Module_Stylesheet[$i]['@Rule']['Animation Sequence'][$j]['Frames']) - 1)) {$Stylesheet_Segment .= ', ';}
            }
          
            $Stylesheet_Segment .= ' {'."\n";

              $Styles = $Module_Stylesheet[$i]['@Rule']['Animation Sequence'][$j]['Styles'];

              foreach ($Styles as $Property => $Value) {

                $Stylesheet_Segment .= '    '.$Property.': '.$Value.';'."\n";
              }

            $Stylesheet_Segment .= '  }';

            if ($Rule_Commented === TRUE) {$Stylesheet_Segment .= "\n\n*/\n"; $Rule_Commented = FALSE;}

            $Stylesheet_Segment .= "\n";
          }

          $Stylesheet_Segment .= '}'."\n\n";
        }

        else if ($Module_Stylesheet[$i]['@Rule']['Type'] === 'media') {

          for ($j = 0; $j < count($Module_Stylesheet[$i]['@Rule']['Directives']); $j++) {

            $Stylesheet_Segment .= $Module_Stylesheet[$i]['@Rule']['Directives'][$j];

            if ($j < (count($Module_Stylesheet[$i]['@Rule']['Directives']) - 1)) {$Stylesheet_Segment .= ','."\n";}
          }

          $Stylesheet_Segment .= ' {'."\n";

          for ($j = 0; $j < count($Module_Stylesheet[$i]['@Rule']['Rules']); $j++) {

            $Raw_Selectors = $Module_Stylesheet[$i]['@Rule']['Rules'][$j]['Selectors'];
            $Stylesheet_Segment .= "\n".'  '.addSelectors($Module_Name, $Module_Publisher, $Namespace, $ashivaNamespaceAccess, $Raw_Selectors, TRUE).' {';

            if ($Rule_Commented !== TRUE) {$Stylesheet_Segment .= "\n    ";} else {$Stylesheet_Segment .= ' ';}

            $Styles = $Module_Stylesheet[$i]['@Rule']['Rules'][$j]['Styles'];

            foreach ($Styles as $Property => $Value) {

              $Stylesheet_Segment .= $Property.': '.$Value.';';
              if ($Rule_Commented !== TRUE) {$Stylesheet_Segment .= "\n  ";} else {$Stylesheet_Segment .= ' ';}
            }

            $Stylesheet_Segment .= '}';

            if ($Rule_Commented === TRUE) {$Stylesheet_Segment .= "\n\n*/\n"; $Rule_Commented = FALSE;}

            $Stylesheet_Segment .= "\n";
          }

          $Stylesheet_Segment .= '}'."\n\n";
        }
      }


      else {

        $Raw_Selectors = $Module_Stylesheet[$i]['Selectors'];
        $Stylesheet_Segment .= "\n".addSelectors($Module_Name, $Module_Publisher, $Namespace, $ashivaNamespaceAccess, $Raw_Selectors).' {'."\n";
        
        $Styles = $Module_Stylesheet[$i]['Styles'];

        foreach ($Styles as $Property => $Value) {

          $Stylesheet_Segment .= '  '.$Property.': '.$Value.';'."\n";
        }

        $Stylesheet_Segment .= '}';

        if ($Rule_Commented === TRUE) {$Stylesheet_Segment .= "\n\n*/\n"; $Rule_Commented = FALSE;}

        $Stylesheet_Segment .= "\n\n";
      }
    }

    $Stylesheet .= $Stylesheet_Segment."\n\n\n\n";
  }

  return $Stylesheet;
}


?>
