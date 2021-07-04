## The ashivaModule Reference

An **ashivaModule Reference** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - **StrongModifiers** which are *optional* (and each consist of an *optional key* and a value)
 - **LightModifiers** which are *optional* (and each consist of an *optional key* and a value)

______

### Normal ashivaModule References:

```
 - «PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»
 - «PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»

```

**Normal ashivaModule References** (which begin with the **PublisherShortName**) are more common.

For more examples of *Normal ashivaModule References*, see:

 - [Normal ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
 
______

### Full ashivaModule Reference

```
 -
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»
 - «PublisherName:::PublisherShortName_ModuleName::StrongModifier1_Value::StrongModifier2_Value#LightMod1_Value#LightMod2_Value»
```

**Full ashivaModule References** (which begin with the **PublisherName**) appear more rarely.

For more examples of *Full ashivaModule References*, see:

 - [Full ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)
