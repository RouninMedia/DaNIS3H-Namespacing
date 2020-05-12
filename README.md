# ashivaModule Namespacing

**ashivaModule Namespacing** is the _Module Namespacing System_ utilised by **ashiva**.

Each **ashivaModule** is automatically namespaced in order that its scripts and stylesheets don't influence or modify the behaviour or presentation of external elements from the **global** namespace or from other **ashivaModules** included in the same HTML document.

In turn, each **ashivaModule**'s namespacing successfully insulates the behaviour and presentation of that **ashivaModule**'s own elements from being influenced or modified by external scripts or styles from other other **ashivaModules** included in the same HTML document.

Consequently, each **ashivaModule** represents an entirely encapsulated sub-section of the parent HTML document. We may safely continue to add styles and scripts to any **ashivaModule**, confident that no additions will ever result in an unintended alteration of any other part of the HTML document.

This also means that an **ashivaModule** developed for one website may be straightforwardly saved as an **ashivaPackage** JSON file and then deployed on an entirely separate website without risk of incompatibility. (Multiple **ashivaPackages** may also be saved and exported together as a single JSON file called an **ashivaBundle**.)

## Contents:

 - The anatomy of an ashivaModule Reference
   - Examples of Full ashivaModule References
   - Examples of Normal ashivaModule References
   - Examples of ashivaModule Component References
   
  - ashivaModule References in Files
    - ashivaModule References in HTML, CSS and Javascript Files
    - ashivaModule References in PHP Files
    - ashivaModule References in ashivaModule Manifests
    - ashivaModule References in ashivaModule Codesheets
   
 - ashiva Namespacing Access
   - `checkNamespaceAccess()` Function

_____

## The anatomy of an ashivaModule Reference

An **ashivaModule Reference** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **ComponentType** which is *often omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - The **StrongModifiers** which are *optional*
 - The **LightModifiers** which are *optional*

It's rare to see a **Full ashivaModule Reference** (which begins with the **PublisherName**), but **Normal ashivaModule References** (which begin with the **PublisherShortName**) and **ashivaModule Component References** (which begin with the **ComponentType**) are more common.

### Examples of Full ashivaModule References

>  #### Full ashivaModule Reference

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Full ashivaModule Reference (without Light Modifiers)

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Full ashivaModule Reference (without Strong Modifiers)

`«PublisherName:::PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Full ashivaModule Reference (without any Modifiers)

`«PublisherName:::PublisherShortName_ModuleName»`


### Examples of Normal ashivaModule References

>  #### Normal ashivaModule Reference

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Reference (without Light Modifiers)

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Normal ashivaModule Reference (without Strong Modifiers)

`«PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Reference (without any Modifiers)

`«PublisherShortName_ModuleName»`


### Examples of ashivaModule Component References

>  #### Normal ashivaModule Component Reference

`«ComponentType[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Component Reference (without Light Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Normal ashivaModule Component Reference (without Strong Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Component Reference (without any Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName»`

_____

## ashiva Namespacing Access

**ashiva Namespacing Access** enables permissions for an **ashivaModule** in one `namespace` to access and modify the styles and scripts of an **ashivaModule** in another `namespace`.

### checkNamespaceAccess() Function

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
