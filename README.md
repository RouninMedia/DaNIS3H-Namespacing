# ashivaModule Namespacing

**ashivaModule Namespacing** is the _Module Namespacing System_ employed by **ashiva**.

 - The anatomy of an ashivaModule Reference
   - Examples of Full ashivaModule References
   - Examples of Normal ashivaModule References
   - Examples of ashivaModule Component References
   
  - ashivaModule References in Files
    - ashivaModule References in HTML, CSS and Javascript Files
    - ashivaModule References in PHP Files
    - ashivaModule References in ashivaModule Manifests
    - ashivaModule References in ashivaModule Codesheets
   
 - ashiva Namespacing Access

_____

## The anatomy of an ashivaModule Reference

An **ashivaModule Reference** consists of *6 sections*:

 - The **PublisherName** which is *usually omitted* but in certain contexts is *obligatory*
 - The **ComponentType** which is *often omitted* but in certain contexts is *obligatory*
 - The **PublisherShortName** which is *obligatory*
 - The **ModuleName** which is *obligatory*
 - The **StrongModifiers** which are *optional*
 - The **LightModifiers** which are *optional*

It's rare to see a **Full ashivaModule Reference** (which begins with the **PublisherName**), but **Normal ashivaModule References** (which begin with the **PublisherShortName**) and **ashivaModule Component References** (which begin with the **ComponentType**) are more common.

### Examples of Full ashivaModule References

>  #### Full ashivaModule Reference

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Full ashivaModule Reference (without Light Modifiers)

`«PublisherName:::PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Full ashivaModule Reference (without Strong Modifiers)

`«PublisherName:::PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Full ashivaModule Reference (without any Modifiers)

`«PublisherName:::PublisherShortName_ModuleName»`


### Examples of Normal ashivaModule References

>  #### Normal ashivaModule Reference

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Reference (without Light Modifiers)

`«PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Normal ashivaModule Reference (without Strong Modifiers)

`«PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Reference (without any Modifiers)

`«PublisherShortName_ModuleName»`


### Examples of ashivaModule Component References

>  #### Normal ashivaModule Component Reference

`«ComponentType[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Component Reference (without Light Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2»`

>  #### Normal ashivaModule Component Reference (without Strong Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName#LightModifier1#LightModifier2»`

>  #### Normal ashivaModule Component Reference (without any Modifiers)

`«ComponentType[@]PublisherShortName_ModuleName»`

_____

## ashiva Namespacing Access

**ashiva Namespacing Access** enables permissions for an **ashivaModule** in one `namespace` to access and modify the styles and scripts of an **ashivaModule** in another `namespace`.
