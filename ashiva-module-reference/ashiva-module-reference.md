## Reference Notation for DaNIS3H Modules

A **Reference Notation** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **Imprint** which is *usually omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - **StrongModifiers** which are *optional* (and each consist of an *optional key* and a value)
 - **LightModifiers** which are *optional* (and each consist of an *optional key* and a value)

______

### Normal Reference Notation:

```
«PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»

«PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»
```

**Normal References** (which begin with the **PublisherShortName**) are the most common type of reference.

For more examples of *Normal References*, see:

 - [Normal References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
 
______

### Full Reference Notation:

```
«PublisherName:::Imprint:::PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»

«PublisherName:::Imprint:::PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»
```

**Full References** (which begin with the **PublisherName** and may include an **Imprint**) appear more rarely.

For more examples of *Full References*, see:

 - [Full References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)


________
________

CONSIDER:

Currently, <SB_Notice::COVID_19> and <SB_Notice::Brexit> are TWO DISTINCT da3shModules (by virtue of the Strong Modifiers).
This means that SB_Notice::COVID_19 and SB_Notice::Brexit BOTH need to be listed in the Page Manifest.

The next stage is to turn these two Modules-with-Strong-Modifiers into a single module, to which Light Modifiers may be applied (see below).

All I really need to know before introducing this new syntax is: is it any slower to use @$Variables in PHP... ?

[NEW] PHP syntax with LIGHT modifiers
[NEW] dm('<SB_Notice sponsor-melanie>'); - parse string and use &${'<SB_Notice>'} AND ['sponsor-melanie'] inside function
[NEW] dm('<SB_Notice covid-19>');
[NEW] dm('<SB_Notice brexit>');

[NEW] danis3hModule('<SB_Notice content="sponsor-melanie">'); - parse string and use &${'<SB_Notice>'} AND ['content' => 'sponsor-melanie'] inside function
[NEW] danis3hModule('<SB_Notice content="covid-19">');
[NEW] danis3hModule('<SB_Notice content="brexit">');

[NEW] Front-end syntax with LIGHT modifiers
[NEW] <!--[ <SB_Notice sponsor-melanie> ]--> 
[NEW] <!--[ <SB_Notice covid-19> ]-->     
[NEW] <!--[ <SB_Notice brexit> ]--> 

[NEW] <!--[ <SB_Notice content="sponsor-melanie"> ]--> 
[NEW] <!--[ <SB_Notice content="covid-19"> ]-->     
[NEW] <!--[ <SB_Notice content="brexit"> ]--> 

but not...

PHP syntax with STRONG modifiers
[NEW] danis3hModule('<SB_Notice Sponsor_Melanie>'); - parse string and use &${'<SB_Notice::Sponsor_Melanie>'} inside function
[NEW] danis3hModule('<SB_Notice COVID_19>');
[NEW] danis3hModule('<SB_Notice Brexit>');

[NEW] danis3hModule('<SB_Notice Content="Sponsor_Melanie">'); - parse string and use &${'<SB_Notice::Content:Sponsor_Melanie>'} inside function
[NEW] danis3hModule('<SB_Notice Content="COVID_19">');
[NEW] danis3hModule('<SB_Notice Content="Brexit">');

Front-end syntax with STRONG modifiers
[NEW] <!--[ <SB_Notice COVID_19> ]-->
[NEW] <!--[ <SB_Notice Brexit> ]-->

[NEW] <!--[ <SB_Notice Content="COVID_19"> ]-->
[NEW] <!--[ <SB_Notice Content="Brexit"> ]-->


FOR REFERENCE:

[OLD] PHP syntax with STRONG modifiers
[OLD] danis3hModule(${'<SB_Notice::Content:COVID_19>'});
[OLD] danis3hModule(${'<SB_Notice::Content:Brexit>'});

[OLD] PHP syntax with LIGHT modifiers
[OLD] danis3hModule(${'<SB_Notice>'}, ['Content' => 'COVID_19']);
[OLD] danis3hModule(${'<SB_Notice>'}, ['Content' => 'Brexit']);


Then, only SB_Notice would need to be listed in the Page Manifest.

ALSO, SB_Notice should employ a REGISTER (like SB_Colour_Charts does) to avoid the processing slowdown that comes with the PHP Error Message
