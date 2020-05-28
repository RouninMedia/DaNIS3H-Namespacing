### ashivaModule References in CSS Da3SH Components

In **CSS Da3SH Components** `#LightModifiers` are ignored, so:

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1#LightModifier1»
```

is the same as:

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1»
```

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
