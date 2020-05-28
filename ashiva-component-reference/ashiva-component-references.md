# Examples of ashivaComponent References

See below all possible configurations of an *ashivaComponent Reference*:


## Classic Component ashivaComponent Reference
```
<Markup[@]PublisherShortName_ModuleName>
<Markup[@]PublisherShortName_ModuleName#LightMod1#LightMod2>
<Markup[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2>
<Markup[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightMod1#LightMod2>
```
A *Classic Component* may be either `Data`, `Styles`, `Scripts`, `Vectors` or `Markup`.


## Custom Component ashivaComponent Reference
```
<List[@]PublisherShortName_ModuleName>
<List[@]PublisherShortName_ModuleName#LightMod1#LightMod2>
<List[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2>
<List[@]PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightMod1#LightMod2>
```
A *Custom Component* may be given any name at all (as long as it doesn't match any of the Classic Components).


## PrimeComponent ashivaComponent Reference
```
<PublisherShortName_ModuleName>
<PublisherShortName_ModuleName#LightMod1#LightMod2>
<PublisherShortName_ModuleName::StrongModifier1::StrongModifier2>
<PublisherShortName_ModuleName::StrongModifier1::StrongModifier2#LightMod1#LightMod2>
```
A *PrimeComponent* Reference declares only the module. The designated *PrimeComponent* is already registered.
