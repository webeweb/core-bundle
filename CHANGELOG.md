CHANGELOG
=========

### [2.22.1](https://github.com/webeweb/core-bundle/tree/v2.22.1) (2021-04-02)

- Fix kernel shutdown before client creation

### [2.22.0](https://github.com/webeweb/core-bundle/tree/v2.22.0) (2021-03-30)

- Add Date date/time data transformer
- Add Date timestamp data transformer
- Add Default date/time data transformer
- Add Default timestamp data transformer
- Add Time date/time data transformer
- Add Time timestamp data transformer
- Fix jQuery asset path

### [2.21.1](https://github.com/webeweb/core-bundle/tree/v2.21.1) (2021-03-01)

- Improve code quality

### [2.21.0](https://github.com/webeweb/core-bundle/tree/v2.21.0) (2021-02-15)

- Update Font Awesome to 5.12.2
- Update jQuery to 3.5.1
- Update jQuery EasyAutocomplete to 1.3.5
- Update jQuery Select 2 to 4.0.13

### [2.20.6](https://github.com/webeweb/core-bundle/tree/v2.20.6) (2021-02-10)

- Add Test case helper
- Improve unit tests

### [2.20.5](https://github.com/webeweb/core-bundle/tree/v2.20.5) (2021-02-09)

- Improve unit tests

### [2.20.4](https://github.com/webeweb/core-bundle/tree/v2.20.4) (2021-02-08)

- Fix some class_alias uses

### [2.20.3](https://github.com/webeweb/core-bundle/tree/v2.20.3) (2021-02-05)

- Replace Class:: by static::

### [2.20.2](https://github.com/webeweb/core-bundle/tree/v2.20.2) (2021-02-04)

- Fix Theme manager issues

### [2.20.1](https://github.com/webeweb/core-bundle/tree/v2.20.1) (2021-02-03)

- Fix Kernel event listener issues
- Improve PHP doc
- Improve unit tests

### [2.20.0](https://github.com/webeweb/core-bundle/tree/v2.20.0) (2021-01-29)

> IMPORTANT NOTICE: The following Symfony versions are now not supported
> - Symfony 2.7
> - Symfony 2.8
> - Symfony 3.0
> - Symfony 3.1
> - Symfony 3.2
> - Symfony 3.3

> IMPORTANT NOTICE: The following PHP versions are now not supported
> - PHP 5.6
> - PHP 7.0

> IMPORTANT NOTICE: The following deprecated classes has been removed
> - WBW\Bundle\CoreBundle\Event\NotificationEvents
> - WBW\Bundle\CoreBundle\Helper\RepositoryHelper
> - WBW\Bundle\CoreBundle\Model\EnvironmentTrait
> - WBW\Bundle\CoreBundle\Model\OriginUrlTrait
> - WBW\Bundle\CoreBundle\Model\RedirectUrlTrait
> - WBW\Bundle\CoreBundle\Renderer\DateTimeRenderer
> - WBW\Bundle\CoreBundle\Tests\Form\Type\AbstractFormTypeTest
> - WBW\Bundle\CoreBundle\CoreInterface

- Improve PHP doc
- Improve unit tests
- Migrating from PHP 5.6 to PHP 7.1

### [2.19.2](https://github.com/webeweb/core-bundle/tree/v2.19.2) (2020-07-07)

- Fix gTag Twig function when id is null or empty

### [2.19.1](https://github.com/webeweb/core-bundle/tree/v2.19.1) (2020-06-30)

- Fix email templates
- Fix translations

### [2.19.0](https://github.com/webeweb/core-bundle/tree/v2.19.0) (2020-06-25)

- Add Javascript Twig extension
- Add Javascript Twig extension trait
- Fix translations
- Improve code quality
- Improve services configuration

### [2.18.0](https://github.com/webeweb/core-bundle/tree/v2.18.0) (2020-06-16)

- Add forwarded request support into Navigation tree helper
- Update Font Awesome to 5.13.0

### [2.17.0](https://github.com/webeweb/core-bundle/tree/v2.17.0) (2020-06-04)

- Improve unit tests
- Update default Navigation theme provider.

### [2.16.0](https://github.com/webeweb/core-bundle/tree/v2.16.0) (2020-03-11)

- Update dependencies
- Update Font Awesome to 5.12.0

### [2.15.1](https://github.com/webeweb/core-bundle/tree/v2.15.1) (2020-01-06)

- Fix dependencies

### [2.15.0](https://github.com/webeweb/core-bundle/tree/v2.15.0) (2020-01-06)

> IMPORTANT NOTICE: The following classes has been deprecated
> - WBW\Bundle\CoreBundle\CoreInterface

- Add Action response
- Add string Environment trait
- Add string Origin URL trait
- Merge SyntaxHighlighter bundle
- Update dependencies
- Update PHPDoc

### [2.14.1](https://github.com/webeweb/core-bundle/tree/v2.14.1) (2019-10-15)

- Fix (deprecated) plug-ins Twig extension traits

### [2.14.0](https://github.com/webeweb/core-bundle/tree/v2.14.0) (2019-10-10)

- Improve Configuration

### [2.13.0](https://github.com/webeweb/core-bundle/tree/v2.13.0) (2019-10-09)

> IMPORTANT NOTICE: The following deprecated classes has been removed
> - WBW\Bundle\CoreBundle\Navigation\NavigationItem

> IMPORTANT NOTICE: The following classes has been deprecated
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtensionTrait
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtension
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtensionTrait
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignColorPaletteTwigExtension
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignColorPaletteTwigExtensionTrait
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtensionTrait
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension
> - WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtensionTrait

- Add Copy skeleton command
- Add Divider node
- Add Entity manager trait
- Add Header node
- Add Kernel helper
- Add Repository report
- Add Repository report helper
- Add Skeleton helper
- Add Skeleton provider interface
- Improve unit tests
- Move FontAwesome Twig extension
- Move FontAwesome Twig extension trait
- Move JQueryInputMask Twig extension
- Move JQueryInputMask Twig extension trait
- Move MaterialDesignColorPalette Twig extension
- Move MaterialDesignColorPalette Twig extension trait
- Move MaterialDesignIconicFont Twig extension
- Move MaterialDesignIconicFont Twig extension trait
- Move Meteocons Twig extension
- Move Meteocons Twig extensionTrait
- Update abstract Command
- Update abstract Navigation node
- Update Configuration helper
- Update FOSUser breadcrumb nodes
- Update PHPDoc

### [2.12.3](https://github.com/webeweb/core-bundle/tree/v2.12.3) (2019-09-04)

- Improve unit test

### [2.12.2](https://github.com/webeweb/core-bundle/tree/v2.12.2) (2019-08-26)

- Fix unit test tools

### [2.12.1](https://github.com/webeweb/core-bundle/tree/v2.12.1) (2019-08-22)

- Fix unit test tools

### [2.12.0](https://github.com/webeweb/core-bundle/tree/v2.12.0) (2019-08-19)

- Improve unit test tools

### [2.11.0](https://github.com/webeweb/core-bundle/tree/v2.11.0) (2019-08-15)

- Update Font Awesome to 5.10.1

### [2.10.0](https://github.com/webeweb/core-bundle/tree/v2.10.0) (2019-08-13)

- Improve unit test tools

### [2.9.1](https://github.com/webeweb/core-bundle/tree/v2.9.1) (2019-08-08)

- Fix logs

### [2.9.0](https://github.com/webeweb/core-bundle/tree/v2.9.0) (2019-08-07)

- Add Logger interface into Abstract manager

### [2.8.0](https://github.com/webeweb/core-bundle/tree/v2.8.0) (2019-08-06)

- Add Choice value interface

### [2.7.3](https://github.com/webeweb/core-bundle/tree/v2.7.3) (2019-07-22)

- Add PHP extensions into Composer

### [2.7.2](https://github.com/webeweb/core-bundle/tree/v2.7.2) (2019-07-08)

- Add remove() method into abstract form type test case
- Consolidate unit tests
- Update documentation

### [2.7.1](https://github.com/webeweb/core-bundle/tree/v2.7.1) (2019-07-03)

- Fix filename into World's wisdom quote provider

### [2.7.0](https://github.com/webeweb/core-bundle/tree/v2.7.0) (2019-07-03)

- Add Core events
- Add Toast event
- Add Toast event listener
- Add Toast event listener trait
- Add Toast factory
- Add Toast interface
- Add Danger toast
- Add Default toast
- Add Info toast
- Add Security event listener into Dependency injection configuration
- Add Success toast
- Add Warning toast
- Add World's wisdom quote provider into Dependency injection configuration

### [2.6.0](https://github.com/webeweb/core-bundle/tree/v2.6.0) (2019-06-24)

- Add ASSETS_RELATIVE_DIRECTORY constant
- Add Clippy.js
- Add Security event listener
- Rename TAG_NAME constants into ColorProviderInterface and QuoteProviderInterface (to avoid same constants into a class that implements both provider types)

### [2.5.0](https://github.com/webeweb/core-bundle/tree/v2.5.0) (2019-06-19)

- Add newSymfonyStyle() into Command helper
- Improve unit tests

### [2.4.1](https://github.com/webeweb/core-bundle/tree/v2.4.1) (2019-05-11)

- Fix Symfony event dispatcher support

### [2.4.0](https://github.com/webeweb/core-bundle/tree/v2.4.0) (2019-05-08)

- Add dispatchEvent() method to support Symfony changes
- Add Base event (alias of Symfony event)
- Fix deprecated root() call into Configuration

### [2.3.0](https://github.com/webeweb/core-bundle/tree/v2.3.0) (2019-05-08)

- Change license
- Update Composer (according to Composer schema)
- Update Travis-CI configuration (Symfony 4.3)

### [2.2.0](https://github.com/webeweb/core-bundle/tree/v2.2.0) (2019-05-24)

- Add Configuration class

### [2.1.1](https://github.com/webeweb/core-bundle/tree/v2.1.1) (2019-05-20)

- Update $id visibility into Test user

### [2.1.0](https://github.com/webeweb/core-bundle/tree/v2.1.0) (2019-05-17)

- Add Test user
- Fix email layout translations
- Split Resources/config/services.yml (commands.yml, listeners.yml, twig.yml)
- Update dependencies

### [2.0.0](https://github.com/webeweb/core-bundle/tree/v2.0.0) (2019-05-11)

> IMPORTANT NOTICE: The following deprecated classes has been removed
> - WBW\Bundle\CoreBundle\Color\AmberColorProvider
> - WBW\Bundle\CoreBundle\Color\AmberColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BlueColorProvider
> - WBW\Bundle\CoreBundle\Color\BlueColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BlueGreyColorProvider
> - WBW\Bundle\CoreBundle\Color\BlueGreyColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BrownColorProvider
> - WBW\Bundle\CoreBundle\Color\BrownColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\CyanColorProvider
> - WBW\Bundle\CoreBundle\Color\ColorInterface
> - WBW\Bundle\CoreBundle\Color\CyanColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\DeepOrangeColorProvider
> - WBW\Bundle\CoreBundle\Color\DeepOrangeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\DeepPurpleColorProvider
> - WBW\Bundle\CoreBundle\Color\DeepPurpleColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\GreenColorProvider
> - WBW\Bundle\CoreBundle\Color\GreenColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\GreyColorProvider
> - WBW\Bundle\CoreBundle\Color\GreyColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\IndigoColorProvider
> - WBW\Bundle\CoreBundle\Color\IndigoColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\LightBlueColorProvider
> - WBW\Bundle\CoreBundle\Color\LightBlueProviderTrait
> - WBW\Bundle\CoreBundle\Color\LightGreenProvider
> - WBW\Bundle\CoreBundle\Color\LightGreenColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\LimeColorProvider
> - WBW\Bundle\CoreBundle\Color\LimeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\OrangeColorProvider
> - WBW\Bundle\CoreBundle\Color\OrangeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\PinkColorProvider
> - WBW\Bundle\CoreBundle\Color\PinkColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\PurpleColorProvider
> - WBW\Bundle\CoreBundle\Color\PurpleColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\RedColorProvider
> - WBW\Bundle\CoreBundle\Color\RedColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\TealColorProvider
> - WBW\Bundle\CoreBundle\Color\TealColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\YellowColorProvider
> - WBW\Bundle\CoreBundle\Color\YellowColorProviderTrait
> - WBW\Bundle\CoreBundle\Factory\NotificationFactory
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIcon
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconEnumerator
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconInterface
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconRenderer
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIcon
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconEnumerator
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconInterface
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconRenderer

> IMPORTANT NOTICE: The following constants has been removed
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_DANGER
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_INFO
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_SUCCESS
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_WARNING

- Better support of Symfony's bundle recommendations
- Update SERVICE_NAME constants

### [1.13.0](https://github.com/webeweb/core-bundle/tree/v1.13.0) (2019-05-11)

- Add Font Awesome Twig extension trait
- Add jQuery InputMask Twig extension trait
- Add Quote interface
- Add Quote manager
- Add Quote manager trait
- Add Quote provider interface
- Add Quote Twig extension
- Add Quote Twig extension trait
- Add Material Design color palette Twig extension trait
- Add Material Design Iconic font Twig extension trait
- Add Meteocons Twig extension trait
- Add Yaml Quote provider
- Fix null argument into fmtString() Twig function
- Improve PHPDoc
- Improve unit tests
- Update Color manager
- Update jQuery to 3.4.1

### [1.12.0](https://github.com/webeweb/core-bundle/tree/v1.12.0) (2019-04-04)

- Add fmtDate() alias into Utility Twig extension
- Add formatString() Twig function (and Twig filter) into Utility Twig extension
- Upgrade Animate.css to 3.7.0
- Upgrade Font Awesome to 5.8.1

### [1.11.2](https://github.com/webeweb/core-bundle/tree/v1.11.2) (2019-03-28)

- Add Stylesheet Twig extension
- Add Stylesheet Twig extension trait
- Fix deprecated Twig classes
- Improve PHPDoc
- Update returned values into Notification event listener

### [1.11.1](https://github.com/webeweb/core-bundle/tree/v1.11.1) (2019-02-25)

- Add Utility Twig extension trait
- Fix Unzip assets command visibility into Symfony 4

### [1.11.0](https://github.com/webeweb/core-bundle/tree/v1.11.0) (2019-02-19)

> IMPORTANT NOTICE: The following constants has been deprecated
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_DANGER
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_INFO
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_SUCCESS
> - WBW\Bundle\CoreBundle\CoreBundle::CORE_WARNING

- Add Black color provider
- Add Black color provider trait
- Add Core interface
- Add FOSUser breadcrumb nodes
- Add preconfigured FOSUser routing file
- Add White color provider
- Add White color provider trait

### [1.10.1](https://github.com/webeweb/core-bundle/tree/v1.10.1) (2019-02-15)

- Remove all unnecessary Twig extension constructors

### [1.10.0](https://github.com/webeweb/core-bundle/tree/v1.10.0) (2019-02-14)

- Add Font Awesome Twig filters aliases
- Add Material Design Color Palette Twig functions aliases
- Add Material Design Iconic Font Twig filters aliases
- Add calcAge() Twig function (and Twig filter) to get an age with a birth date
- Update Font Awesome to 5.7.2
- Update jQuery to 3.3.1
- Update SweetAlert to 2.1.2

### [1.9.0](https://github.com/webeweb/core-bundle/tree/v1.9.0) (2019-01-29)

- Replace IllegalArgumentException by InvalidArgumentException

### [1.8.3](https://github.com/webeweb/core-bundle/tree/v1.8.9) (2019-01-28)

- Add COLOR_DOMAIN into Material Design Color Palette interface
- Clean up comments
- Fix Material Design Color Palette interface unit tests
- Improve PHPDoc
- Improve unit tests

### [1.8.2](https://github.com/webeweb/core-bundle/tree/v1.8.2) (2019-01-25)

- Clean the cache to avoid issues due to cache files during functional tests
- Correct Unzip assets command help

### [1.8.1](https://github.com/webeweb/core-bundle/tree/v1.8.1) (2019-01-23)

- Fix checkCollection() issue into Form helper
- Replace deprecated classes into Icon factory

### [1.8.0](https://github.com/webeweb/core-bundle/tree/v1.8.0) (2019-01-21)

> IMPORTANT NOTICE: The following classes has been deprecated
> - WBW\Bundle\CoreBundle\Color\AmberColorProvider
> - WBW\Bundle\CoreBundle\Color\AmberColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BlueColorProvider
> - WBW\Bundle\CoreBundle\Color\BlueColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BlueGreyColorProvider
> - WBW\Bundle\CoreBundle\Color\BlueGreyColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\BrownColorProvider
> - WBW\Bundle\CoreBundle\Color\BrownColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\CyanColorProvider
> - WBW\Bundle\CoreBundle\Color\ColorInterface
> - WBW\Bundle\CoreBundle\Color\CyanColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\DeepOrangeColorProvider
> - WBW\Bundle\CoreBundle\Color\DeepOrangeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\DeepPurpleColorProvider
> - WBW\Bundle\CoreBundle\Color\DeepPurpleColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\GreenColorProvider
> - WBW\Bundle\CoreBundle\Color\GreenColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\GreyColorProvider
> - WBW\Bundle\CoreBundle\Color\GreyColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\IndigoColorProvider
> - WBW\Bundle\CoreBundle\Color\IndigoColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\LightBlueColorProvider
> - WBW\Bundle\CoreBundle\Color\LightBlueProviderTrait
> - WBW\Bundle\CoreBundle\Color\LightGreenProvider
> - WBW\Bundle\CoreBundle\Color\LightGreenColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\LimeColorProvider
> - WBW\Bundle\CoreBundle\Color\LimeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\OrangeColorProvider
> - WBW\Bundle\CoreBundle\Color\OrangeColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\PinkColorProvider
> - WBW\Bundle\CoreBundle\Color\PinkColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\PurpleColorProvider
> - WBW\Bundle\CoreBundle\Color\PurpleColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\RedColorProvider
> - WBW\Bundle\CoreBundle\Color\RedColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\TealColorProvider
> - WBW\Bundle\CoreBundle\Color\TealColorProviderTrait
> - WBW\Bundle\CoreBundle\Color\YellowColorProvider
> - WBW\Bundle\CoreBundle\Color\YellowColorProviderTrait
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIcon
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconEnumerator
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconInterface
> - WBW\Bundle\CoreBundle\Icon\FontAwesomeIconRenderer
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIcon
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconEnumerator
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconInterface
> - WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconRenderer

- Add Utility Twig extension
- Improve code checkstyle
- Improve PHPDoc
- Move Amber color provider classes
- Move Blue color provider classes
- Move Blue grey color provider classes
- Move Brown color provider classes
- Move Cyan color provider classes
- Move Deep orange color provider classes
- Move Deep purple color provider classes
- Move Font Awesome classes
- Move Green color provider classes
- Move Grey color provider classes
- Move Indigo color provider classes
- Move Light blue color provider classes
- Move Light green color provider classes
- Move Lime color provider classes
- Move Material Design Iconic Font classes
- Move Orange color provider classes
- Move Pink color provider classes
- Move Purple color provider classes
- Move Red color provider classes
- Move Teal color provider classes
- Move Yellow color provider classes

### [1.7.0](https://github.com/webeweb/core-bundle/tree/v1.7.0) (2019-01-14)

- Add Date/time renderer
- Add formatDateFilter() into Renderer Twig extension
- Allow null into Container trait
- Improve unit tests

### [1.6.0](https://github.com/webeweb/core-bundle/tree/v1.6.0) (2019-01-10)

> IMPORTANT NOTICE: The following classes has been deprecated
> - WBW\Bundle\CoreBundle\Factory\NotificationFactory

- Add Amber color provider
- Add Amber color provider interface
- Add Amber color provider trait
- Add Application theme provider trait
- Add Blue color provider
- Add Blue color provider interface
- Add Blue color provider trait
- Add Blue grey color provider
- Add Blue grey color provider interface
- Add Blue grey color provider trait
- Add Breadcrumbs theme provider trait
- Add Brown color provider
- Add Brown color provider interface
- Add Brown color provider trait
- Add Color helper
- Add Color interface
- Add Color manager
- Add Color provider compiler pass
- Add Cyan color provider
- Add Cyan color provider interface
- Add Cyan color provider trait
- Add Deep orange color provider
- Add Deep orange color provider interface
- Add Deep orange color provider trait
- Add Deep purple color provider
- Add Deep purple color provider interface
- Add Deep purple color provider trait
- Add Font Awesome icon
- Add Font Awesome icon enumerator
- Add Font Awesome icon interface
- Add Font Awesome icon renderer
- Add Font Awesome Twig extension aliases
- Add Footer theme provider trait
- Add Green color provider
- Add Green color provider interface
- Add Green color provider trait
- Add Grey color provider
- Add Grey color provider interface
- Add Grey color provider trait
- Add Hook drop down theme provider trait
- Add Icon factory
- Add Icon interface
- Add Indigo color provider
- Add Indigo color provider interface
- Add Indigo color provider trait
- Add Light blue color provider
- Add Light blue color provider interface
- Add Light blue color provider trait
- Add Light green color provider
- Add Light green color provider interface
- Add Light green color provider trait
- Add Lime color provider
- Add Lime color provider interface
- Add Lime color provider trait
- Add Material Design Color Palette Twig extension
- Add Material Design Iconic Font icon
- Add Material Design Iconic Font icon enumerator
- Add Material Design Iconic Font icon interface
- Add Material Design Iconic Font icon renderer
- Add Material Design Iconic Font Twig extension aliases
- Add methods contains() and indexOf() into abstract manager
- Add Navigation theme provider trait
- Add Notifications drop down theme provider trait
- Add Orange color provider
- Add Orange color provider interface
- Add Orange color provider trait
- Add PhantomJS helper
- Add Pink color provider
- Add Pink color provider interface
- Add Pink color provider trait
- Add Purple color provider
- Add Purple color provider interface
- Add Purple color provider trait
- Add Red color provider
- Add Red color provider interface
- Add Red color provider trait
- Add Search theme provider trait
- Add Tasks drop down theme provider trait
- Add Teal color provider
- Add Teal color provider interface
- Add Teal color provider trait
- Add User info theme provider trait
- Add Yellow color provider
- Add Yellow color provider interface
- Add Yellow color provider trait
- Fix OS helper unit tests
- Improve PHPDoc
- Improve unit tests
- Move Notification factory
- Refactoring Font Awesome Twig extension
- Refactoring Material Design Iconic Font Twig extension
- Set Form helper as a service

### [1.5.0](https://github.com/webeweb/core-bundle/tree/v1.5.0) (2018-12-19)

- Add OS helper (to determines the operating system)

### [1.4.3](https://github.com/webeweb/core-bundle/tree/v1.4.3) (2018-12-19)

- Fix find() method into WikiView model

### [1.4.2](https://github.com/webeweb/core-bundle/tree/v1.4.2) (2018-12-19)

- Fix unclosed script tag into layout templates

### [1.4.1](https://github.com/webeweb/core-bundle/tree/v1.4.1) (2018-12-13)

- Improve unit tests

### [1.4.0](https://github.com/webeweb/core-bundle/tree/v1.4.0) (2018-12-13)

- Add Renderer Twig extension trait

### [1.3.0](https://github.com/webeweb/core-bundle/tree/v1.3.0) (2018-12-13)

- Add find() and getView() into WikiView model
- Add removeProvider() into Manager interface
- Add size() into Manager interface
- Improve unit tests
- Remove registerProvider() into Manager interface

### [1.2.0](https://github.com/webeweb/core-bundle/tree/v1.2.0) (2018-12-08)

- Improve layout functional tests
- Reorganize views

### [1.1.0](https://github.com/webeweb/core-bundle/tree/v1.1.0) (2018-12-01)

- Add Assets helper
- Add Command helper
- Add Environment trait
- Add Event dispatcher trait
- Add Kernel event listener trait
- Add Navigation nodes with predefined icons (Font Awesome and Material Design Iconic font)
- Add Notification event listener trait
- Add Notification factory
- Add Request trait
- Add Swift mailer trait
- Add Theme manager trait
- Add Unzip assets command
- Allow null into service traits (Logger, Object manager, Router, Session, Token storage, Translator, Twig environment, ...)
- Fix namespaces
- Improve unit tests
- Move public resources
- Remove Symfony 2.6 support
- Rename $route into $uri in Navigation classes

### [1.0.1](https://github.com/webeweb/core-bundle/tree/v1.0.1) (2018-11-19)

- Fix email layout block names
- Fix resource paths

### [1.0.0](https://github.com/webeweb/core-bundle/tree/v1.0.0) (2018-11-17)

- Initial release
