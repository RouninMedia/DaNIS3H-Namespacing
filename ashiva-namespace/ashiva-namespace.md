
```
.sb-translations°en•strongmodifier1•strongmodifier2°flexiblemod1°flexiblemod2
```

## The difference between **Strong Modifiers** and *Flexible Modifiers*

 - **Strong Modifiers** *always* modify styles *and* scripts and may also modify content
 - *Flexible Modifiers* ***may*** modify styles *or* scripts and may also modify content
 
## What does an HTML Element with *Flexible Modifiers* look like:

Unlike **Strong Modifiers**, *Flexible Modifiers* appear in the markup as custom `data-*` attributes, rather than as class suffixes, like this:

 - `<div class="myConsole»by»ashiva•welcome" data-ashiva-flexmods="[«myConsole›by›ashiva°entersFromTop»]">`
 - `<div class="myConsole»by»ashiva•welcome" data-ashiva-flexmods="[«myConsole›by›ashiva°entersFromLeft»]">`
 
Consequently, any module may have a *Flexible Modifier* which enables it to take on different *behaviour* (via javascript), but maintain exactly the same *presentation* (via CSS).

By the same token, any module may have a *Flexible Modifier* which enables it to take on different *presentation* (via CSS), but maintain exactly the same *behaviour* (via javascript).

Thus,

```
 - «Scotia_Beauty:::myConsole::welcome#entersFromTop»
 - «Scotia_Beauty:::myConsole::welcome#entersFromLeft»
```

cannot be selected via the class selector:

 - `.myConsole»by»ashiva•welcome°entersFromTop`
 - `.myConsole»by»ashiva•welcome°entersFromLeft`
 
but instead may be selected via:

```
- .myConsole»by»ashiva•welcome[data-ashiva-flexmods*="«myConsole›by›ashiva°entersFromLeft»"]
- .myConsole»by»ashiva•welcome[data-ashiva-flexmods*="«myConsole›by›ashiva°entersFromLeft»"]
```
