# ashiva Namespacing

**ashiva Namespacing** is the _Module Namespacing System_ employed by **ashiva**.

Additionally, **ashiva Namespacing Access** enables permissions for an **ashivaModule** in one `namespace` to access and modify the styles and scripts of an **ashivaModule** in another `namespace`.


_____

# The anatomy of an ashivaModule Reference

An ashiva Module Reference consists of *5 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - The **StrongModifiers** which are *optional*
 - The **LightModifiers** which are *optional*
 
_____

## Examples of Full Ashiva Module References

>  ### Full Ashiva Module Reference

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  ### Full Ashiva Module Reference (without Light Modifiers)

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  ### Full Ashiva Module Reference (without Strong Modifiers)

`«PublisherName:::PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  ### Full Ashiva Module Reference (without any Modifiers)

`«PublisherName:::PublisherShortName_ModuleName»`

_____

## Examples of Normal Ashiva Module References

>  ### Normal Ashiva Module Reference

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  ### Normal Ashiva Module Reference (without Light Modifiers)

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  ### Normal Ashiva Module Reference (without Strong Modifiers)

`«PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  ### Normal Ashiva Module Reference (without any Modifiers)

`«PublisherShortName_ModuleName»`

