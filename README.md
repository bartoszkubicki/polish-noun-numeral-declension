# BKubicki Polish Nouns Numeral Declension

## Overview
This mini-library provides declesion of noun according to numeral used before, specifically for polish language.
[Rules are following](http://www.rjp.pan.pl/index.php?option=com_content&view=article&id=1011:skadnia-liczebnikow-70&catid=44&Itemid=145).
This library is port of [this awesome mini-library](https://github.com/mmiszy/polish-plurals) for php language.

3 forms of nouns are now supported:

* singular nominative
* plural nominative
* plural accusative

```
decle(1, "komentarz", "komentarze", "komentarzy"); // komentarz
decle(0, "komentarz", "komentarze", "komentarzy"); // komentarzy
decle(3, "komentarz", "komentarze", "komentarzy"); // komentarze
```

As its only mini-library, it doesn't support any exceptions from the rules.

## Prerequisites
* PHP 7.2/7.3


## Installation ###

To install the extension use the following commands:

```bash
 composer require bkubicki/polish-noun-numeral-declination
```


## Tests ##


### Unit ###
1. Run command
```
./vendor/bin/phpunit -c phpunit.xml --testsuite "Unit" --coverage-html coverage/coverage-html --colors=always
```

2. You can also use some alias:
  - `test-unit-coverage` - _`vendor/bin/phpunit -c phpunit.xml --testsuite "Unit" --coverage-html coverage/coverage-html --colors=always`_

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/bartoszkubicki/magento2-unit-tests-doubles/tags).


## Changelog

See changelog [here](CHANGELOG.md).


## Authors

* [Bartosz Kubicki](https://github.com/bartoszkubicki)


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.