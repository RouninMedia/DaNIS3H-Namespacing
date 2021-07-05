## Reference Notation for DaNIS3H Modules

A **DaNIS3H Module Reference Notation** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **Imprint** which is *usually omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - **StrongModifiers** which are *optional* (and each consist of an *optional key* and a value)
 - **LightModifiers** which are *optional* (and each consist of an *optional key* and a value)

______

### Normal DaNIS3H Module Reference Notation:

```
«PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»

«PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»
```

**Normal DaNIS3H Module References** (which begin with the **PublisherShortName**) are the most common type of reference.

For more examples of *Normal References*, see:

 - [Normal References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
 
______

### Full DaNIS3H Module Reference Notation:

```
«PublisherName:::Imprint:::PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»

«PublisherName:::Imprint:::PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»
```

**Full DaNIS3H Module References** (which begin with the **PublisherName** and may include an **Imprint**) appear more rarely.

For more examples of *Full References*, see:

 - [Full References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)


________
________

```
<?php

$Fruitbowl = [
  "apple",
  "banana",
  "cherry"
];

function dm($danis3hModule) {
    
  extract($GLOBALS);
  
  $danis3hModule = str_replace(['<', '>'], '', $danis3hModule);
  
  $Strong_Modifier_Set = explode('#', $danis3hModule)[0];
  $Strong_Modifiers = explode('::', $Strong_Modifier_Set);
  array_shift($Strong_Modifiers);

  $Light_Modifier_Set = str_replace($Strong_Modifier_Set, '', $danis3hModule);
  $Light_Modifiers = explode('#', $Light_Modifier_Set);
  array_shift($Light_Modifiers);
  
  $Strong_Modifiers_Array = [];
  $Light_Modifiers_Array = [];
  
  $Modifiers = [$Strong_Modifiers, $Light_Modifiers];
  
  for ($i = 0; $i < count($Modifiers); $i++) {
    
    $Modifiers_Array = [];
  
    for ($j = 0; $j < count($Modifiers[$i]); $j++) {
      
      $Modifier = explode(':', $Modifiers[$i][$j]);
  
      if (strpos($Modifiers[$i][$j], ':') === FALSE) {
      
        $Modifiers_Array[(count($Modifiers[$i]) - 1)] = $Modifier[0];
      }
    
      else {
      
        $Modifiers_Array[$Modifier[0]] = $Modifier[1];
      }
    }
    
    if ($Modifiers[$i] === $Strong_Modifiers) {
    
      $Module['Strong_Modifiers'] = $Modifiers_Array;
    }
    
    elseif ($Modifiers[$i] === $Light_Modifiers) {
    
      $Module['Light_Modifiers'] = $Modifiers_Array;  
    }
  }
  
  return $Module;
}

$My_Module = dm('<My_Module::Content:Fruitbowl::Fishbowl#content:fruitbowl#fishbowl>');

print_r($My_Module);

print_r(${$My_Module['Strong_Modifiers']['Content']});

?>
```

*So far so good - still need to convert:*
    
    '<My_Module Content="Fruitbowl" Fishbowl content="fruitbowl" fishbowl>'
    
*into:*

    '<My_Module::Content:Fruitbowl::Fishbowl#content:fruitbowl#fishbowl>'

*because the **real*** `dm()` *function will look like this:*
    
    $My_Module = dm('<My_Module Content="Fruitbowl" Fishbowl content="fruitbowl" fishbowl>');`

________
________

    dm('<SB_Colour_Charts>');                                         <!--[ <SB_Colour_Charts> ]-->                         
    dm('<SB_Notice Orange Yellow>');                                  <!--[ <SB_Notice Orange Yellow> ]-->              
    dm('<SB_Notice Bg="Orange" Fg="Yellow">');                        <!--[ <SB_Notice Bg="Orange" Fg="Yellow"> ]-->
    dm('<SB_nextPage :context="page">');                              <!--[ <SB_nextPage :context="page"> ]-->
    dm('<SB_Body_Data :context="element">');                          <!--[ <SB_Body_Data :context="element"> ]-->
    dm('<SB_Body_Data :critical="false" :context="element">');        <!--[ <SB_Body_Data :critical="false" :context="element"> ]-->
    dm('<SB_Colour_Charts orange yellow>');                           <!--[ <SB_Colour_Charts orange yellow> ]-->
    dm('<SB_Colour_Charts bg="orange" fg="yellow">');                 <!--[ <SB_Colour_Charts bg="orange" fg="yellow"> ]-->
    dm('<Markup[@]SB_Translations>');                                 <!--[ <Markup[@]SB_Translations> ]-->
    dm('<Language_Folder[@]SB_Translations>');                        <!--[ <Language_Folder[@]SB_Translations> ]-->

**N.B.** `Strong Modifiers` start with *Capital Letters*, `Light Modifiers` start with *lowercase letters*

`<SB_Notice Bg="Orange" Fg="Yellow" top="12" left="12">` (or `Scotia_Beauty:::SB_Notice::BG:Orange::FG:Yellow#top:12#left:12`)

CALLS THE SAME DaNIS3H MODULE AS:

`<SB_Notice Bg="Orange" Fg="Yellow">` (or `Scotia_Beauty:::SB_Notice::BG:Orange::FG:Yellow`)



CONSIDER:

Currently, `<SB_Notice::COVID_19>` and `<SB_Notice::Brexit>` are TWO DISTINCT da3shModules (by virtue of the Strong Modifiers).
This means that SB_Notice::COVID_19 and SB_Notice::Brexit BOTH need to be listed in the Page Manifest.

The next stage is to turn these two Modules-with-Strong-Modifiers into a single module, to which Light Modifiers may be applied (see below).

All I really need to know before introducing this new syntax is: is it any slower to use @$Variables in PHP... ?

### PHP syntax with LIGHT modifiers
`dm('<SB_Notice sponsor-melanie>');` - parse string and use &${'<SB_Notice>'} AND ['sponsor-melanie'] inside function

`dm('<SB_Notice covid-19>');`

`dm('<SB_Notice brexit>');`


`dm('<SB_Notice content="sponsor-melanie">');` - parse string and use &${'<SB_Notice>'} AND ['content' => 'sponsor-melanie'] inside function

`dm('<SB_Notice content="covid-19">');`

`dm('<SB_Notice content="brexit">');`

### Front-end syntax with LIGHT modifiers
`<!--[ <SB_Notice sponsor-melanie> ]-->` 

`<!--[ <SB_Notice covid-19> ]-->`     

`<!--[ <SB_Notice brexit> ]-->`


`<!--[ <SB_Notice content="sponsor-melanie"> ]-->`

`<!--[ <SB_Notice content="covid-19"> ]-->`    

`<!--[ <SB_Notice content="brexit"> ]-->`

but not...

### PHP syntax with STRONG modifiers
`dm('<SB_Notice Sponsor_Melanie>');` - parse string and use &${'<SB_Notice::Sponsor_Melanie>'} inside function

`dm('<SB_Notice COVID_19>');`

`dm('<SB_Notice Brexit>');`


`dm('<SB_Notice Content="Sponsor_Melanie">');` - parse string and use &${'<SB_Notice::Content:Sponsor_Melanie>'} inside function

`dm('<SB_Notice Content="COVID_19">');`

`dm('<SB_Notice Content="Brexit">');`

### Front-end syntax with STRONG modifiers
`<!--[ <SB_Notice COVID_19> ]-->`

`<!--[ <SB_Notice Brexit> ]-->`


`<!--[ <SB_Notice Content="COVID_19"> ]-->`

`<!--[ <SB_Notice Content="Brexit"> ]-->`


## [OLD] FOR REFERENCE [OLD]:

### PHP syntax with STRONG modifiers
`danis3hModule(${'<SB_Notice::Content:COVID_19>'});`

`danis3hModule(${'<SB_Notice::Content:Brexit>'});`

### PHP syntax with LIGHT modifiers
`danis3hModule(${'<SB_Notice>'}, ['Content' => 'COVID_19']);`

`danis3hModule(${'<SB_Notice>'}, ['Content' => 'Brexit']);`


Then, only SB_Notice would need to be listed in the Page Manifest.

ALSO, SB_Notice should employ a REGISTER (like SB_Colour_Charts does) to avoid the processing slowdown that comes with the PHP Error Message
