# DaNIS3H Module Namespacing

**DaNIS3H Module Namespacing** is the _Module Namespacing System_ utilised by **DaNIS3H**.

Each **DaNIS3H Module** is automatically namespaced in order that the module's scripts and stylesheets don't influence the behaviour or presentation of elements in the **global** namespace or elements in other **DaNIS3H Modules** within the same HTML document.

In turn, each **DaNIS3H Module**'s namespacing successfully shields the behaviour and presentation of that **DaNIS3H Module**'s own elements from being influenced or modified by scripts or styles from other **DaNIS3H Modules** within the same HTML document.

Consequently, each **DaNIS3H Module** represents an entirely encapsulated sub-section of the parent HTML document. We may safely continue to add styles and scripts to any **DaNIS3H Module**, confident that none of these additions will inadvertently modify any other part of the HTML document.

This *also* means that an **DaNIS3H Module** developed for one website may be straightforwardly serialised as an **DaNIS3H Package** JSON file and then deployed on an entirely separate website without risk of incompatibility. (Multiple **DaNIS3H Packages** may also be saved and exported together as a single JSON file called an **DaNIS3H Bundle**.)

## Contents:

 - [The DaNIS3H Module Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/ashiva-module-reference.md)
   - [Examples of Normal DaNIS3H Module References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
   - [Examples of Full DaNIS3H Module References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)
 
 - [The DaNIS3H Component Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-reference.md)
   - [Examples of DaNIS3H Component References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-references.md)
   
 - [The DaNIS3H Namespace in JS Scripts and CSS Stylesheets](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespace/ashiva-namespace.md)
   - [Examples of DaNIS3H Namespaces in JS Scripts and CSS Stylesheets](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespace/ashiva-namespaces.md)
 
 - [The DaNIS3H Namespace Prefix in JS Scripts and CSS Stylesheets](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespace/ashiva-namespace-prefix.md)
   - [Examples of DaNIS3H Namespace Prefixes in JS Scripts and CSS Stylesheets](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespace/ashiva-namespace-prefixes.md)
   
 - [DaNIS3H Namespacing Access](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/ashiva-namespacing-access.md)
   - [The DaNIS3H Namespace Access Directive](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/ashiva-namespace-access-directive.md)
   - [Examples of DaNIS3H Namespace Access Directives](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/ashiva-namespace-access-directive-examples.md)
   - [`checkNamespaceAccess()` Function](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/check-namespace-access-function.md)

 - DaNIS3H Module References in DaNIS3H Module Manifests
_____

## DaNIS3H Module Namespaces and Namespace References in Files

### DaNIS3H Namespaces in pre-processed CSS and Javascript Files

In a pre-processed DaNIS3H CSS file, such as `/.assets/modules/styles/styles.css`, you can find the following:

 - **DaNIS3H Namespace:**
   - `id="psn-modulename•strongmodifier»by»publisherName"`
   - `class="psn-modulename•strongmodifier»by»publisherName"`

and

 - **DaNIS3H Namespace Prefix:**
   - `id="psn-modulename•strongmodifier»by»publisherName»»»"`
   - `class="psn-modulename•strongmodifier»by»publisherName»»»"`

Note that the other kind of modifiers, *extension modifiers*, are **not conventionally included** in the `Namespace` or `Namespace Prefix` immediately above.

Instead, *extension modifiers* (or *x-mods*) will appear as custom attributes at the end of the element, like this:

`<... data-°xmod1 data-°xmod2>`


### DaNIS3H Namespaces in pre-processed HTML Files



### DaNIS3H Module References in PHP Files

In a PHP File, any reference is always to a specific Component of an DaNIS3H Module, as follows:

 - Classic Component DaNIS3H Module Reference: `${'<Markup[@]SB_Translations::EN>'}`
 - Custom Component DaNIS3H Module Reference: `${'<Welcome[@]SB_Translations::EN>'}`
 - PrimeComponent DaNIS3H Module Reference: `${'<SB_Translations::EN>'}`


### DaNIS3H Module References in DaNIS3H Module Manifests

_______

## Experiments with x-mods in DaNIS3H Style Components:

```

[

  {
    "Selectors" : [

      "small"
    ],

    "Styles" : {

      "color" : "yellow"
    }
  },


  {
    "Selectors": [

      "‹'«Ashiva:::Ashiva_Control_Pad»', 'small'›"
    ],

    "Styles": {

      "color": "yellow"
    }
  },


  {
    "Selectors" : [

      "strong"
    ],

    "Styles" : {

      "color" : "red"
    }
  },


  {
    "Selectors": [

      "‹'«Ashiva:::Ashiva_Control_Pad»', 'strong'›"
    ],

    "Styles": {

      "color": "red"
    }
  },


  {

    "Selectors" : [

      "‹['orange'], 'p small'›"
    ],

    "Styles" : {

      "color" : "orange"
    }
  },


  {

    "Selectors": [

      "‹'«Ashiva:::Ashiva_Control_Pad»', ['orange'], 'p small'›"
    ],

    "Styles": {

      "color": "orange"
    }
  },


  {

    "Selectors" : [

      "‹['purple'], '.smaller'›"
    ],

    "Styles" : {

      "color" : "purple"
    }
  },

  {

    "Selectors" : [

      "‹'«Ashiva:::Ashiva_Control_Pad»', ['purple'], '.smaller'›"
    ],

    "Styles" : {

      "color" : "purple"
    }
  },

  {
    "Selectors" : [

      "‹['purple'], ''›"
    ],

    "Styles" : {

      "color" : "purple"
    }
  },

  {
    "Selectors": [

      "‹'«Ashiva:::Ashiva_Control_Pad»', ['purple'], ''›"
    ],

    "Styles": {

      "color": "purple"
    }
  }

]

```
________

# NOTES TO ADD...

```
body.ashiva-control-pad-activated {
  width: calc(100vw - 17px);
  overflow: hidden;
}
```

^^^ So what would this come out as, according to the rules below ?


It would come out as:

```
body.ashiva-control-pad-activated {  // <= obviously <body> is excepted from the direct child shenanigans
  width: calc(100vw - 17px);
  overflow: hidden;
}
```



======


CONCLUSIONS FOR GLOBAL NAMESPACE:

i) ◄GLOBAL» Rule MUST be preceded by body > (UNLESS it begins with body)
ii) any namespace prefix must be stripped from any id or class attributes containing them
iii) any <element> or [attribute] selector MUST be unfolded out to include the :not([id*="-filter-"]):not([class*="-filter-"]) qualifier

CONCLUSIONS FOR SUBSTITUTE NAMESPACE:

i) Any Rule beginning with <element> or [attribute] selector MUST be preceded by substitute namespace
ii) any namespace prefix must be replaced by substitute namespace prefix in any id or class attributes containing them




```
body > p:not([id*="-filter-"]):not([class*="-filter-"]) {

  color: red;
}
```

^^^ THIS IS ABSOLUTELY CORRECT



EXAMPLES...


EXAMPLE 0:  `p`

NO GLOBAL
```
.ashiva-control-pad»by»ashiva p {

  color: red;
}
```

GLOBAL
```
body > p:not([id*="-filter-"]):not([class*="-filter-"]) {

  color: red;
}
```



EXAMPLE 1:  `p.myClass`

NO GLOBAL
```
.ashiva-control-pad»by»ashiva p.ashiva-control-pad»by»ashiva»»»myClass {

  color: red;
}
```

GLOBAL
```
body > p:not([id*="-filter-"]):not([class*="-filter-"]).myClass {

  color: red;
}
```


EXAMPLE 2:  `.myOtherClass p.myClass`

NO GLOBAL
```
.ashiva-control-pad»by»ashiva»»»myOtherClass p.ashiva-control-pad»by»ashiva»»»myClass {

  color: red;
}
```

GLOBAL
```
body > .myOtherClass p:not([id*="-filter-"]):not([class*="-filter-"]).myClass {

  color: red;
}
```



EXAMPLE 3: `div ul li p.myClass`

NO GLOBAL
```
.ashiva-control-pad»by»ashiva div ul li p.ashiva-control-pad»by»ashiva»»»myClass {

  color: red;
}
```

GLOBAL
```
body > div:not([id*="-filter-"]):not([class*="-filter-"]) ul:not([id*="-filter-"]):not([class*="-filter-"]) li:not([id*="-filter-"]):not([class*="-filter-"]) p:not([id*="-filter-"]):not([class*="-filter-"]).myClass {

  color: red;
}
```

______

## In a Selector Reference...

**i)** `sb-translations•en•strongmod1•strongmod2°xmod1°xmod2»by»scotiaBeauty`

**ii)** `sb-translations•en•strongmod1•strongmod2»by»scotiaBeauty`

Both of the references above are the same.

**i)** may be considered as a *descriptive notation* of **ii)**

Consequently, **i)** must be regarded as the same as **ii)**.

## By the same token, in a Page Manifest...

**i)** `Scotia_Beauty:::SB_Translations::EN::StrongMod1::StrongMod2*xMod1*xMod2`

**ii)** `Scotia_Beauty:::SB_Translations::EN::StrongMod1::StrongMod2`

Both of the references above are the same.

**i)** may be considered as a *descriptive notation* of **ii)**

Consequently, **i)** must be regarded as the same as **ii)**.
