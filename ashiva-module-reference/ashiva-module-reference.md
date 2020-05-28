## The ashivaModule Reference

An **ashivaModule Reference** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **ComponentType** which is *often omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - The **StrongModifiers** which are *optional*
 - The **LightModifiers** which are *optional*

______

### Normal ashivaModule Reference

```
«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»
```

**Normal ashivaModule References** (which begin with the **PublisherShortName**) are more common.

For more examples of *Normal ashivaModule References*, see:

 - [Normal ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
 
______

### Full ashivaModule Reference

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightMod1#LightMod2»
```

**Full ashivaModule References** (which begins with the **PublisherName**) appear more rarely.

For more examples of *Full ashivaModule References*, see:

 - [Full ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)
