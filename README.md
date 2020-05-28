# ashivaModule Namespacing

**ashivaModule Namespacing** is the _Module Namespacing System_ utilised by **ashiva** Digital Development & Publishing Platform.

Each **ashivaModule** is automatically namespaced in order that its scripts and stylesheets don't influence or modify the behaviour or presentation of external elements from the **global** namespace or from other **ashivaModules** included in the same HTML document.

In turn, each **ashivaModule**'s namespacing successfully shields the behaviour and presentation of that **ashivaModule**'s own elements from being influenced or modified by external scripts or styles from other other **ashivaModules** included in the same HTML document.

Consequently, each **ashivaModule** represents an entirely encapsulated sub-section of the parent HTML document. We may safely continue to add styles and scripts to any **ashivaModule**, confident that no additions will ever result in an unintended alteration of any other part of the HTML document.

This also means that an **ashivaModule** developed for one website may be straightforwardly saved as an **ashivaPackage** JSON file and then deployed on an entirely separate website without risk of incompatibility. (Multiple **ashivaPackages** may also be saved and exported together as a single JSON file called an **ashivaBundle**.)

## Contents:

 - [The ashivaModule Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/ashiva-module-reference.md)
   - [Examples of Normal ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/normal-ashiva-module-references.md)
   - [Examples of Full ashivaModule References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-module-reference/full-ashiva-module-references.md)
 
 - [The ashivaComponent Reference](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-reference.md)
   - [Examples of ashivaComponent References](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-component-reference/ashiva-component-references.md)
   
 - The ashivaNamespace
   - Examples of ashivaNamespaces
 
 - The ashivaNamespace Prefix
   - Examples of ashivaNamespace Prefixes
   
 - ashiva Namespacing Access
   - [The ashivaNamespace Access Directive](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/ashiva-namespace-access-directive.md)
   - [Examples of ashivaNamespace Access Directives](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/ashiva-namespace-access-directive-examples.md)
   - [`checkNamespaceAccess()` Function](https://github.com/RouninMedia/ashiva-Namespacing/blob/master/ashiva-namespacing-access/check-namespace-access-function.md)

 - ashivaModule References in ashivaModule Manifests
_____

## ashivaModule Namespaces and Namespace References in Files

### ashiva Namespaces in HTML, CSS and Javascript Files

In a pre-processed ashiva CSS file, such as `/.assets/modules/styles/styles.css`, you can find the following forms:

 - **ashiva Namespace:** `psn-modulename°sm»by»publisherName`
 - **ashiva Namespace Prefix:** `psn-modulename°sm»by»publisherName»»»`

Note that *light modifiers* are **never needed nor included** in either form immediately above.


### ashivaModule References in PHP Files

In a PHP File, any reference is always to a specific Component of an ashivaModule, as follows:

 - Classic Component ashivaModule Reference: `${'<Markup[@]SB_Translations::EN>'}`
 - Custom Component ashivaModule Reference: `${'<Welcome[@]SB_Translations::EN>'}`
 - PrimeComponent ashivaModule Reference: `${'<SB_Translations::EN>'}`


### ashivaModule References in ashivaModule Manifests
