# `checkNamespaceAccess()` Function

```
function checkNamespaceAccess($Module_Name, $Substitute_Module_Name, $ashivaNamespaceAccess) {

  ${'Access_to_'.$Substitute_Module_Name} = TRUE;

  if ($ashivaNamespaceAccess[0] === TRUE) {

    if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['override']))) {

      ${'Access_to_'.$Substitute_Module_Name} = $ashivaNamespaceAccess[1]['access']['override'];
    }


    else {

      if ((isset($ashivaNamespaceAccess[1]['access'])) && (isset($ashivaNamespaceAccess[1]['access']['default']))) {

        ${'Access_to_'.$Substitute_Module_Name} = $ashivaNamespaceAccess[1]['access']['default'];
      }


      if (isset($ashivaNamespaceAccess[1][$Module_Name])) {

        if ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['override']))) {

          ${'Access_to_'.$Substitute_Module_Name} = $ashivaNamespaceAccess[1][$Module_Name]['access']['override'];
        }


        else {

          if (isset($ashivaNamespaceAccess[1][$Module_Name][$Substitute_Module_Name])) {

            ${'Access_to_'.$Substitute_Module_Name} = $ashivaNamespaceAccess[1][$Module_Name][$Substitute_Module_Name];
          }

          elseif ((isset($ashivaNamespaceAccess[1][$Module_Name]['access'])) && (isset($ashivaNamespaceAccess[1][$Module_Name]['access']['default']))) {

            ${'Access_to_'.$Substitute_Module_Name} = $ashivaNamespaceAccess[1][$Module_Name]['access']['default'];
          }
        }
      }
    }
  }

  return ${'Access_to_'.$Substitute_Module_Name};
}
```
