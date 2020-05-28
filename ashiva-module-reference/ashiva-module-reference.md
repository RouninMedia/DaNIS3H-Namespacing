## The anatomy of an ashivaModule Reference

An **ashivaModule Reference** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **ComponentType** which is *often omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - The **StrongModifiers** which are *optional*
 - The **LightModifiers** which are *optional*

**Full ashivaModule References** (which begins with the **PublisherName**) appear more rarely.

**Normal ashivaModule References** (which begin with the **PublisherShortName**) are more common.

**ashivaModule Component References** (which begin with the **ComponentType**) are also more common.

### Full ashivaModule Reference

```
«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightMod1#LightMod2»
```

For more examples of *Full ashivaModule References*, see:

 - [Full ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/full-ashiva-module-references.md)


### Normal ashivaModule Reference

```
«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»
```

For more examples of *Normal ashivaModule References*, see:

 - [Normal ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/normal-ashiva-module-references.md)
