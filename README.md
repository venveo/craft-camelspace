# Camel Space Craft CMS Plugin

Easily convert camel spaced strings to strings with spaces. So this 'camelSpacedStringThatNeedsSpaces' would be converted to this 'camel Spaced String That Needs Spaces'.

## Installation

To install Camel Space, follow these steps:

1. Download & unzip the file and place the `camelspace` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/venveo/camelspace.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require venveo/camelspace`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `camelspace` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Camel Space works on Craft 2.4.x and Craft 2.5.x.

## Using Camel Space

Take a string that is camel cased, such as an entry type or handle, and apply the filter or function.

`{{ camelSpace('camelCasedString') }}`

`{{ 'camelCasedString' | camelSpace }}`

Both will output `camel Cased String`. You can then add additional filters to apply, such as title, like this: `{{ camelSpace('camelCasedString') | title }}` to output `Camel Cased String`.

## Camel Space Changelog

### 1.0.0 -- 2016.11.16

* Initial release

## Credits

* [Jason McCallister](https://github.com/themccallister)
* [Mitchell Harris](https://github.com/mitchwh)

## About Venveo

Venveo is a Digital Marketing Agency for Building Materials Companies in Blacksburg, VA. Learn more about us on [our website](https://www.venveo.com).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
