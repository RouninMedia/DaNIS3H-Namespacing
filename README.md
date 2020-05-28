# ashivaModule Namespacing

**ashivaModule Namespacing** is the _Module Namespacing System_ utilised by **ashiva** Digital Development & Publishing Platform.

Each **ashivaModule** is automatically namespaced in order that its scripts and stylesheets don't influence or modify the behaviour or presentation of external elements from the **global** namespace or from other **ashivaModules** included in the same HTML document.

In turn, each **ashivaModule**'s namespacing successfully shields the behaviour and presentation of that **ashivaModule**'s own elements from being influenced or modified by external scripts or styles from other other **ashivaModules** included in the same HTML document.

Consequently, each **ashivaModule** represents an entirely encapsulated sub-section of the parent HTML document. We may safely continue to add styles and scripts to any **ashivaModule**, confident that no additions will ever result in an unintended alteration of any other part of the HTML document.

This also means that an **ashivaModule** developed for one website may be straightforwardly saved as an **ashivaPackage** JSON file and then deployed on an entirely separate website without risk of incompatibility. (Multiple **ashivaPackages** may also be saved and exported together as a single JSON file called an **ashivaBundle**.)

## Contents:

 - [The ashivaModule Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/ashiva-module-reference.md)
   - [Examples of Normal ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
   - [Examples of Full ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)
 
 - [The ashivaComponent Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-reference.md)
   - [Examples of ashivaComponent References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-references.md)
   
 - The ashivaNamespace
   - Examples of ashivaNamespaces
 
 - The ashivaNamespace Prefix
   - Examples of ashivaNamespace Prefixes
   
 - ashiva Namespacing Access
   - The ashivaNamespace Access Directive
   - Examples of ashivaNamespace Access Directives
   - [`checkNamespaceAccess()` Function](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/check-namespace-access-function.md)

 - ashivaModule References in ashivaModule Manifests
_____

## ashivaModule Namespaces and Namespace References in Files

### ashiva Namespaces in HTML, CSS and Javascript Files

In a pre-processed ashiva CSS file, such as `/.assets/modules/styles/styles.css`, you can find the following forms:

 - **ashiva Namespace:** `psn-modulename°sm»by»publisherName`
 - **ashiva Namespace Prefix:** `psn-modulename°sm»by»publisherName»»»`

Note that *light modifiers* are **never needed nor included** in either form immediately above.


### ashivaModule References in PHP Files

In a PHP File, any reference is always to a specific Component of an ashivaModule, as follows:

 - Classic Component ashivaModule Reference: `${'<Markup[@]SB_Translations::EN>'}`
 - Custom Component ashivaModule Reference: `${'<Welcome[@]SB_Translations::EN>'}`
 - PrimeComponent ashivaModule Reference: `${'<SB_Translations::EN>'}`


### ashivaModule References in ashivaModule Manifests



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
