# checkNamespaceAccess() Function

```
function checkNamespaceAccess($Module_Name, $Substitute_Namespace, $ashivaNamespaceAccess) {

  ${'Access_to_'.$Substitute_Namespace} = TRUE;

  if ($ashivaNamespaceAccess[0] === TRUE) {

    if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['override']))) {

      ${'Access_to_'.$Substitute_Namespace} = $ashivaNamespaceAccess[1]['access']['override'];
    }


    else {

      if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['default'])) && ($ashivaNamespaceAccess[1]['access']['default'] === FALSE)) {

        ${'Access_to_'.$Substitute_Namespace} = FALSE;
      }


      if (isset($ashivaNamespaceAccess[1][$Module_Name])) {

        if ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['override']))) {

          ${'Access_to_'.$Substitute_Namespace} = $ashivaNamespaceAccess[1][$Module_Name]['access']['override'];
        }


        else {

          if (isset($ashivaNamespaceAccess[1][$Module_Name][$Substitute_Namespace])) {

            ${'Access_to_'.$Substitute_Namespace} = $ashivaNamespaceAccess[1][$Module_Name][$Substitute_Namespace];
          }

          elseif ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['default']))) {

            ${'Access_to_'.$Substitute_Namespace} = $ashivaNamespaceAccess[1][$Module_Name]['access']['default'];
          }
        }
      }
    }
  }

  return ${'Access_to_'.$Substitute_Namespace};
}

```
