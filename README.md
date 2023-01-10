core-bundle
===========

[![Build Status](https://img.shields.io/github/actions/workflow/status/webeweb/core-bundle/build.yml?style=flat-square)](https://github.com/webeweb/core-bundle/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/core-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/core-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/core-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/core-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/core-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-bundle)

Core bundle for Symfony 2 and more.

`core-bundle` provides some useful classes to build another bundles. We use it
into all our bundles and Symfony applications.

Includes:

- [Animate.css 3.7.0](https://github.com/animate-css/animate.css)
- [Chart.js 4.0.1](https://github.com/chartjs/Chart.js)
- [Clippy JS](https://github.com/clippyjs/clippy.js)
- [Font Awesome 5.15.2](https://github.com/FortAwesome/Font-Awesome)
- [FullCalendar 5.9.0](https://github.com/fullcalendar/fullcalendar)
- [jQuery 3.6.2](https://github.com/jquery/jquery)
- [jQuery contextMenu 2.9.2](https://github.com/swisnl/jQuery-contextMenu) (jQuery plug-in)
- [jQuery EasyAutocomplete 1.3.5](https://github.com/pawelczak/EasyAutocomplete) (jQuery plug-in)
- [jQuery FancyBox 3.5.7](https://github.com/fancyapps/fancybox) (jQuery plug-in)
- [jQuery InputMask 3.3.11](https://github.com/RobinHerbots/Inputmask) (jQuery plug-in)
- [jQuery Select2 4.0.13](https://github.com/select2/select2) (jQuery plug-in)
- [Leaflet 1.7.1](https://github.com/Leaflet/Leaflet)
- [Leaflet Color Markers 1.0.0](https://github.com/pointhi/leaflet-color-markers) (Leaflet plug-in)
- [Leaflet Marker Cluster 1.4.1](https://github.com/Leaflet/Leaflet.markercluster) (Leaflet plug-in)
- [lightGallery 2.7.0](https://github.com/sachinchoolur/lightGallery)
- [Material Design Color Palette 1.1.0](https://github.com/zavoloklom/material-design-color-palette)
- [Material Design Hierarchical Display 1.0.1](https://github.com/zavoloklom/material-design-hierarchical-display)
- [Material Design Iconic Font 2.2.0](https://github.com/zavoloklom/material-design-iconic-font)
- [Meteocons](https://www.alessioatzeni.com/meteocons)
- [SimpleMDE Markdown Editor 1.11.2](https://github.com/sparksuite/simplemde-markdown-editor)
- [SweetAlert2 11.3.1](https://github.com/sweetalert2/sweetalert2)
- [SyntaxHighlighter 3.0.83](https://github.com/syntaxhighlighter/syntaxhighlighter)
- [twemoji 14.0.2](https://github.com/twitter/twemoji)
- [typed.js 2.0.12](https://github.com/mattboldt/typed.js)
- [waitMe 1.19](https://github.com/vadimsva/waitMe) (jQuery plug-in)

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
