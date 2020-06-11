## The difference between **Strong Modifiers** and *Extension Modifiers*

The key thing to remember is that an *ashivaModule* with a **Strong Modifier** ***is*** an ashivaModule.

An *ashivaModule* with a **Strong Modifier** represents its own distinct ashivaModule, no less than an *ashivaModule* without such a modifier.

By contrast, an *ashivaModule* with a *Extension Modifier* is simply a variant of that *ashivaModule* without such a modifier.

An analogy may be drawn with website addresses:

 - https://example.com/ points to the webpage: https://example.com/index.html
 - https://example.com/my-page/ points to the webpage: https://example.com/index.html/my-page/index.html
 
The second address may intially appear to be some sort of extension to the first address. But, in fact, ***both*** web addresses point to distinct web-pages. The second address points to a complete, self-contained resource no less than the first.

By contrast, however:
 
 - https://example.com/my-page/#my-section points to `#my-section` within: https://example.com/index.html/my-page/index.html
 
In this case, the third address, using the `#` anchor, really **is** an extension of the second address. It does not point to a complete, self-contained resource, but, instead, modifies the browsers landing point, when it arrives at the second address.

By a similar token:

- `<MyModule>` is an *ashivaModule* Reference, referring to the *ashivaModule* `«MyPublication:::MyModule»`
- `<MyModule::London>`, in turn, refers to the *ashivaModule* `«MyPublication:::MyModule::London»`

By contrast, however:

- `<MyModule::London#Summer>` refers to the `#Summer` variant of the *ashivaModule* `«MyPublication:::MyModule::London»`

This means that:

 - **Strong Modifiers** indicate new, complete *ashivaModules* and *always* modify styles, scripts and may also modify content
 - *Extension Modifiers* indicate an *ashivaModule* variant which ***may***, optionally, modify styles *or* scripts *or* content
 
## What does an HTML Element with *Extension Modifiers* look like:

Unlike **Strong Modifiers**, *Extension Modifiers* appear in the markup as custom `data-*` attributes, rather than as class suffixes, like this:

 - `<div class="myConsole»by»ashiva•welcome" data-°entersFromTop>`
 - `<div class="myConsole»by»ashiva•welcome" data-°entersFromLeft>`
 
Consequently, any module may have a *Extension Modifier* which enables it to take on different *behaviour* (via javascript), but maintain exactly the same *presentation* (via CSS).

By the same token, any module may have a *Extension Modifier* which enables it to take on different *presentation* (via CSS), but maintain exactly the same *behaviour* (via javascript).

Thus,

 - `«Scotia_Beauty:::myConsole::welcome*entersFromTop»`
 - `«Scotia_Beauty:::myConsole::welcome*entersFromLeft»`
 
may be selected via:

- `.myConsole»by»ashiva•welcome[data-°entersFromTop]`
- `.myConsole»by»ashiva•welcome[data-°entersFromLeft]`

