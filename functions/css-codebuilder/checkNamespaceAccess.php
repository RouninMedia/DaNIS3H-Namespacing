<?php


// FUNCTION :: CHECK NAMESPACE ACCESS
function checkNamespaceAccess($Module_Name, $Substitute_ModuleName, $ashivaNamespaceAccess) {

  ${'Access_to_'.$Substitute_ModuleName} = TRUE;

  if ($ashivaNamespaceAccess[0] === TRUE) {

    if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['override']))) {

      ${'Access_to_'.$Substitute_ModuleName} = $ashivaNamespaceAccess[1]['access']['override'];
    }


    else {

      if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['default']))) {

        ${'Access_to_'.$Substitute_ModuleName} = $ashivaNamespaceAccess[1]['access']['default'];
      }


      if (isset($ashivaNamespaceAccess[1][$Module_Name])) {

        if ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['override']))) {

          ${'Access_to_'.$Substitute_ModuleName} = $ashivaNamespaceAccess[1][$Module_Name]['access']['override'];
        }


        else {

          if (isset($ashivaNamespaceAccess[1][$Module_Name][$Substitute_ModuleName])) {

            ${'Access_to_'.$Substitute_ModuleName} = $ashivaNamespaceAccess[1][$Module_Name][$Substitute_ModuleName];
          }

          elseif ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['default']))) {

            ${'Access_to_'.$Substitute_ModuleName} = $ashivaNamespaceAccess[1][$Module_Name]['access']['default'];
          }
        }
      }
    }
  }

  return ${'Access_to_'.$Substitute_ModuleName};
}

?>
