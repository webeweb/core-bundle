core-bundle
===========

[![Build Status](https://img.shields.io/github/workflow/status/webeweb/core-bundle/build?style=flat-square)](https://github.com/webeweb/core-bundle/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/core-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/core-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/core-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/core-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)

Core bundle for Symfony 2 and more.

`core-bundle` provides some useful classes to build another bundles. We use it
into all our bundles and Symfony applications.

Includes:

- [Animate.css 3.7.0](https://daneden.github.io/animate.css)
- [Clippy JS](https://www.smore.com/clippy-js)
- [Font Awesome 5.15.2](https://fontawesome.com)
- [FullCalendar 5.9.0](https://fullcalendar.io/)
- [jQuery 3.5.1](http://jquery.com)
- [jQuery contextMenu 2.9.2](http://swisnl.github.io/jQuery-contextMenu/docs.html) (jQuery plug-in)
- [jQuery EasyAutocomplete 1.3.5](http://www.easyautocomplete.com) (jQuery plug-in)
- [jQuery FancyBox 3.5.7](http://fancybox.net/) (jQuery plug-in)
- [jQuery InputMask 3.3.11](https://robinherbots.github.io/Inputmask) (jQuery plug-in)
- [jQuery Select2 4.0.13](https://select2.org) (jQuery plug-in)
- [Leaflet 1.7.1](https://leafletjs.com)
- [Leaflet Color Markers1.0.0](https://github.com/pointhi/leaflet-color-markers) (Leaflet plug-in)
- [Leaflet Marker Cluster 1.4.1](http://leaflet.github.io/Leaflet.markercluster) (Leaflet plug-in)
- [Material Design Color Palette 1.1.0](http://zavoloklom.github.io/material-design-color-palette)
- [Material Design Hierarchical Display 1.0.1](http://zavoloklom.github.io/material-design-hierarchical-display)
- [Material Design Iconic Font 2.2.0](http://zavoloklom.github.io/material-design-iconic-font)
- [Meteocons](http://www.alessioatzeni.com/meteocons)
- [SweetAlert 2.1.2](https://sweetalert.js.org)
- [SweetAlert2 11.3.1](https://sweetalert2.github.io)
- [SyntaxHighlighter 3.0.83](http://alexgorbatchev.com/SyntaxHighlighter)
- [typed.js 2.0.6](https://github.com/mattboldt/typed.js)
- [waitMe 1.19](http://vadimsva.github.io/waitMe) (jQuery plug-in)

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/core-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E4.4%7C%5E5.0-brightness.svg?style=flat-square)](https://symfony.com)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/core-bundle
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

## Usage

Read the [documentation](Resources/doc/index.md) (redaction in progress).

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

## License

`core-bundle` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
