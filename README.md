core-bundle
===========

[![Build Status](https://img.shields.io/travis/com/webeweb/core-bundle/master.svg?style=flat-square)](https://travis-ci.com/webeweb/core-bundle)
[![Coverage Status](https://img.shields.io/coveralls/webeweb/core-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/core-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/core-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/core-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)

Core bundle for Symfony 2 and more.

`core-bundle` provides some useful classes to build another bundles. We use it
into all our bundles and Symfony applications.

Includes:

- [Animate.css 3.7.0](https://daneden.github.io/animate.css/)
- [Font Awesome 5.8.1](https://fontawesome.com/)
- [jQuery 3.4.1](http://jquery.com/)
- [jQuery EasyAutocomplete 1.3.4](http://www.easyautocomplete.com/) (jQuery plug-in)
- [jQuery InputMask 3.3.11](https://robinherbots.github.io/Inputmask/) (jQuery plug-in)
- [jQuery Select2 4.0.5](https://select2.org/) (jQuery plug-in)
- [Material Design Color Palette 1.1.0](http://zavoloklom.github.io/material-design-color-palette/)
- [Material Design Hierarchical Display 1.0.1](http://zavoloklom.github.io/material-design-hierarchical-display/)
- [Material Design Iconic Font 2.2.0](http://zavoloklom.github.io/material-design-iconic-font/)
- [Meteocons](http://www.alessioatzeni.com/meteocons/)
- [SweetAlert 2.1.2](https://sweetalert.js.org/)
- [waitMe 1.19](http://vadimsva.github.io/waitMe/) (jQuery plug-in)

---

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/core-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E2.7%7C%5E3.0%7C%5E4.0-brightness.svg?style=flat-square)](https://symfony.com)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/core-bundle "^2.0"
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
    public function registerBundles() {
        $bundles = [
            // ...
            new WBW\Bundle\CoreBundle\WBWCoreBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console wbw:core:unzip-assets
$ php bin/console assets:install
```

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/core-bundle.git
$ cd core-bundle
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## License

`core-bundle` is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.
