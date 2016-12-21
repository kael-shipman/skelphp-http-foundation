# SkelPHP HttpFoundation

*NOTE: The Skel framework is an __experimental__ web applications framework that I've created as an exercise in various systems design concepts. While I do intend to use it regularly on personal projects, it was not necessarily intended to be a "production" framework, since I don't ever plan on providing extensive technical support (though I do plan on providing extensive documentation). It should be considered a thought experiment and it should be used at your own risk. Read more about its conceptual foundations at [my website](https://colors.kaelshipman.me/about/this-website).*

This is a package that simply adapts the Symfony HTTP Foundation components `Request` and `Response` for use in the Skel framework. I've used Symfony's implementation here because they were ready-made and tested, though I'll likely immplement my own in the future to avoid the dependency (and because I don't need anywhere near the complexity of the Symfony classes).

These are used in the same way that Symfony uses them: the `Route::match` method accepts a `Request` object, returning either `false` or an array of the matched url variables. Typically, on match, an application will then call `Route::execute` with the varibles retrieved, which then returns a `Component`. The last step for an application is to wrap this `Component` in a `Response` and send it. 

## Installation

Eventually, this package is intended to be loaded as a composer package. For now, though, because this is still in very active development, I currently use it via a git submodule:

```bash
cd ~/my-website
git submodule add git@github.com:kael-shipman/skelphp-http-foundation.git app/dev-src/skelphp/http-foundation
```

This allows me to develop it together with the website I'm building with it. For more on the (somewhat awkward and complex) concept of git submodules, see [this page](https://git-scm.com/book/en/v2/Git-Tools-Submodules).

