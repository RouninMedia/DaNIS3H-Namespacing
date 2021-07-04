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

``` «PublisherShortName_ModuleName::StrongModifier1_Key:StrongModifier1_Value::StrongModifier2_Key:StrongModifier2_Value#LightMod1_Key:LightMod1_Value#LightMod2_Key:LightMod2_Value»

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
