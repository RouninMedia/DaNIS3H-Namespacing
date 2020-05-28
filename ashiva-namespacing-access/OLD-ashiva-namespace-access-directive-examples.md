# [OLD] Examples of ashivaNamespace Access Directives
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
