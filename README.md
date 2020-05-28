# ashivaModule Namespacing

**ashivaModule Namespacing** is the _Module Namespacing System_ utilised by **ashiva** Digital Development & Publishing Platform.

Each **ashivaModule** is automatically namespaced in order that its scripts and stylesheets don't influence or modify the behaviour or presentation of external elements from the **global** namespace or from other **ashivaModules** included in the same HTML document.

In turn, each **ashivaModule**'s namespacing successfully shields the behaviour and presentation of that **ashivaModule**'s own elements from being influenced or modified by external scripts or styles from other other **ashivaModules** included in the same HTML document.

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
   - The ashivaNamespace Access Directive
   - Examples of ashivaNamespace Access Directives
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

It's rare to see a **Full ashivaModule Reference** (which begins with the **PublisherName**).

**Normal ashivaModule References** (which begin with the **PublisherShortName**) and **ashivaModule Component References** (which begin with the **ComponentType**) are more common.

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

## ashivaModule Namespaces and Namespace References in Files

### ashiva Namespaces in HTML, CSS and Javascript Files

In a pre-processed ashiva CSS file, such as `/.assets/modules/styles/styles.css`, you can find the following forms:

 - **ashiva Namespace:** `psn-modulename°sm»by»publisherName`
 - **ashiva Namespace Prefix:** `psn-modulename°sm»by»publisherName»»»`

Note that *light modifiers* are **never included** in either form immediately above.


### ashivaModule References in PHP Files

In a PHP File, any reference is always to a specific Component of an ashivaModule, as follows:

 - Classic Component ashivaModule Reference: `${'<Markup[@]SB_Translations::EN>'}`
 - Custom Component ashivaModule Reference: `${'<Welcome[@]SB_Translations::EN>'}`
 - PrimeComponent ashivaModule Reference: `${'<SB_Translations::EN>'}`


### ashivaModule References in ashivaModule Manifests

### ashivaModule References in Da3SH Components

In **Da3SH Components** `#LightModifiers` are ignored, so:

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1#LightModifier1»
```

is the same as:

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1»
```

**ashivaNamespace Reference Functions** (the context in which **ashivaModule References** appear in **Da3SH Components**) may be found in 

 - *CSS Da3SH Components*
 - *Javascript Da3SH Components*
 - *jsModule Da3SH Components*

Examples of **ashivaNamespace Reference Functions** in a *CSS Da3SH Component*, referencing an **ashivaModule Namespace**:

```
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '.nail-products-category'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '[class=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '[class=\"nail-products-category\"]'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '[id=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '[id=\"nail-products-category\"]'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', '[class=\"nail-products-category\"]'›
 - ‹'«Scotia_Beauty:::SB_Translations::EN»', 'li strong'›
```

 Examples of **ashivaNamespace Reference Functions** in a *CSS Da3SH Component*, referencing the **GLOBAL Namespace**:

```
 - ‹'«GLOBAL»', 'body.ashiva-control-pad-activated'›
 - ‹'«GLOBAL»', '[id=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]'›
 - ‹'«GLOBAL»', 'body > [id=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]'›
 - ‹'«GLOBAL»', '[class=\"nail-products-category\"]'›
 - ‹'«GLOBAL»', '.canvas footer address p'›
 - ‹'«GLOBAL»', '.canvas [role=\"search\"] input'› 
```

#### How ashivaNamespace Reference Functions appear in CSS Da3SH Components:

```
  {
    "@Rule" : {

      "Type" : "media",
  
      "Directives" : [

        "only screen and (hover: hover) and (pointer: fine)"
      ],

      "Rules" : [

        {
          "Selectors": [

            "{«GLOBAL»} body.{«GLOBAL»}.ashiva-control-pad-activated"
          ],

          "Styles": {

            "width": "calc(100vw - 17px)",

            "overflow": "hidden"
          }
        },

        {
          "Selectors": [

            ".{«Scotia_Beauty:::SB_Translations::EN»}.nail-products-category"
          ],

          "Styles": {

            "text-decoration": "underline"
          }
        },

        {
          "Selectors": [

            "[class$=\"nail-products-category\"]"
          ],

          "Styles": {

            "font-style": "italic"
          }
        },

        {
          "Selectors": [

            "[id     =    \"nail-products-category\"]"
          ],

          "Styles": {

            "font-style": "italic"
          }
        },

        {
          "Selectors": [

            "[{«Scotia_Beauty:::SB_Translations::EN»}][class=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]"
          ],

          "Styles": {

            "color": "yellow"
          }
        },

        {
          "Selectors": [

            "[{«Scotia_Beauty:::SB_Translations::EN»}][id=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]"
          ],

          "Styles": {

            "color": "yellow"
          }
        },

        {
          "Selectors": [

            "[{«GLOBAL»}][class=\"sb-translations°en»by»scotiaBeauty»»»nail-products-category\"]"
          ],

          "Styles": {

            "color": "green"
          }
        },

        {
          "Selectors": [

            "[class=\"ashiva-control-pad»by»ashiva»»»ashivaControlPad_locationSite\"]"
          ],

          "Styles": {

            "font-style": "italic"
          }
        },

        {
          "Selectors": [

            "[class*=\"ashivaControlPad_locationSite\"]"
          ],

          "Styles": {

            "color": "yellow"
          }
        },

        {
          "Selectors": [

            "li strong"
          ],

          "Styles": {

            "color": "rgb(127, 191, 255)"
          }
        },

        {
          "Selectors": [

            "header + p span"
          ],

          "Styles": {

            "letter-spacing": "12px"
          }
        },

        {
          "Selectors": [

            "footer address p"
          ],

          "Styles": {

            "font-size": "18px"
          }
        },

        {
          "Selectors": [

            "{«Scotia_Beauty:::SB_Translations::EN»} li strong"
          ],

          "Styles": {

            "color": "rgb(127, 191, 255)"
          }
        },

        {
          "Selectors": [

            "{«GLOBAL»} footer address p"
          ],

          "Styles": {

            "font-size": "18px"
          }
        }
      ]
    }
  }
```

_____

## ashiva Namespacing Access

**ashiva Namespacing Access** enables permissions for an **ashivaModule** in one `namespace` to access and modify the styles and scripts of an **ashivaModule** in another `namespace`.

### The ashivaNamespace Access Directive

```
"ashivaNamespaceAccess" : [

  true,

  {
    "Ashiva_Control_Pad" : {"access" : {"default" : true}, "Global" : true, "SB_Translations::EN" : true},
    "access" : {"default" : true}  
  }
]
```

### Examples of ashivaNamespace Access Directives
```
// NOTHING
```

```
"ashivaNamespaceAccess" : {} 
```

```
"ashivaNamespaceAccess" : {  

  "Active" : false,
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {}
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {}	
  }
}
```

```
"ashivaNamespaceAccess" : {  

  "Active" : true,

  {

    "access" : {"override" : true}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"override" : false}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"default" : true}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"override" : true, "default" : true}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"override" : false, "default" : true}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"override" : true, "default" : false}	
  }
}
```

```
"ashivaNamespaceAccess" : { 

  "Active" : true,

  {

    "access" : {"override" : false, "default" : false}	
  }
}
```

```
"ashivaNamespaceAccess" : {

  "Active" : true,

  "Access_Directives" : {
    
    "Global" : {"access" : {"override" : true, "default" : false}, "Ashiva_Control_Pad" : false},
    "Ashiva_Control_Pad" : {"access" : {"default" : false}, "SB_Colour_Charts" : true},
    "SB_Body_Data" : {"access" : {"default" : false}, "SB_Colour_Charts" : false},
    "SB_Colour_Charts" : {"access" : {"default" : false}},
    "SB_Nail_Categories" : {"access" : {"default" : false}},
    "SB_Translations::EN" : {"access" : {"default" : false}},

    "access" : {"default" : false}  // <= if absent, considered FALSE    
  }
},
```

```
    "Global" : {},
    "Global" : {"access" : {}},

    "Global" : {"access" : {"override" : true}},
    "Global" : {"access" : {"override" : false}},
    "Global" : {"access" : {"default" : true}},
    "Global" : {"access" : {"default" : false}},
    
    "Global" : {"access" : {"override" : true, "default" : false}},
    "Global" : {"access" : {"override" : false, "default" : false}},
    "Global" : {"access" : {"override" : true, "default" : true}},
    "Global" : {"access" : {"override" : false, "default" : true}},

    "Global" : {"Ashiva_Control_Pad" : true}
    "Global" : {"Ashiva_Control_Pad" : false}

```

```
"ashivaNamespaceAccess" : {

  "Active" : true,

  {
    "access" : {"default" : true}
  },

  {
    "access" : {"override" : true}
  },

  {
    "access" : {"override" : true, "default" : false}
  },

  {
    "Global" : {"access" : {"default" : true}}
  },

  {
    "Global" : {"access" : {"override" : true}}
  },

  {
    "Global" : {"access" : {"override" : true, "default" : false}}
  },

  {
    "Global" : {"access" : {"default" : true}, "Ashiva_Control_Pad" : true}
  },

  {
    "Global" : {"access" : {"override" : true}, "Ashiva_Control_Pad" : false}
  },

  {
    "Global" : {"access" : {"override" : true, "default" : false}, "Ashiva_Control_Pad" : false}
  },

  {
    "Global" : {"Ashiva_Control_Pad" : true}
  }
}
```



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
