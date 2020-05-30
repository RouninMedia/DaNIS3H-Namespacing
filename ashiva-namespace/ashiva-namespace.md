
```
.sb-translations°en•strongmodifier1•strongmodifier2°lightmod1°lightmod2
```

Current Setup:

 - **Strong Modifiers** always modify content *and* styles *and* scripts
 - *Light Modifiers* modify only content
 
Which means that, if there is a module with a modifier which takes a different script, but exactly the same styles...

 - `myConsole»by»ashiva•welcome•entersFromTop`
 - `myConsole»by»ashiva•welcome•entersFromLeft`

every style now needs to be **written twice** to cover both `myConsole»by»ashiva•welcome` modules (which is clearly redundant).

So the next step would be to change `•entersFromTop` and `•entersFromLeft` to *Light Modifiers*:

 - `myConsole»by»ashiva•welcome°entersFromTop`
 - `myConsole»by»ashiva•welcome°entersFromLeft`

But then, if they don't appear in the markup (but, instead, only in the PHP), the javascript cannot find any distinguishing hooks.

Okay, so the solution is that *Light Modifiers* ***do*** appear in the markup, but as custom `data-*` attributes, rather than as namespace-in-class suffixes:

 - **Strong Modifiers** always modify styles *and* scripts and may also modify content
 - *Light Modifiers* may modify styles *or* scripts and may also modify content
 
*Light Modifiers* can be added like this:

 - `<div class="myConsole»by»ashiva•welcome" data-ashiva-modifiers="[«myConsole›by›ashiva°entersFromTop»]">`
 - `<div class="myConsole»by»ashiva•welcome" data-ashiva-modifiers="[«myConsole›by›ashiva°entersFromLeft»]">`
 
Now, if there is a module with a modifier which takes a different script, but exactly the same styles...

 - `myConsole»by»ashiva•welcome°entersFromTop`
 - `myConsole»by»ashiva•welcome°entersFromLeft`

all the styles now need to be **written only once** under `.myConsole»by»ashiva•welcome` to cover both `myConsole»by»ashiva•welcome` modules.

And any specific styles can be written as:

- `.myConsole»by»ashiva•welcome[data-ashiva-modifiers*="«myConsole›by›ashiva°entersFromLeft»"]`
 
