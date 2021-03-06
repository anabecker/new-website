# Prickly Pear Theme for the CMS Grav

![License](https://img.shields.io/badge/License-MIT-blue.svg) [![Join the chat at https://gitter.im/CaribThemes/grav-theme-pricklypear](https://badges.gitter.im/CaribThemes/grav-theme-pricklypear.svg)](https://gitter.im/CaribThemes/grav-theme-pricklypear?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

> **Prickly Pear** is a **FREE** simple single page responsive theme ported by [**CaribThemes**](https://github.com/CaribThemes) for the [**Grav**](http://getgrav.org) CMS and based on Fractal by HTML5up.

![PricklyPear](assets/readme_1.png)

##### Table of Contents:

* [Demo](#demo)
* [Features](#features)
* [Views](#supported-page-templates)
* [Installation](#installation)
* [Updating](#updating)
* [Setup](#setup)
* [Support & Bugs](#support--bugs)
* [Credits](#credits)

## Demo

See the **PricklyPear** Template live [here](http://demo.caribthemes.io/pricklypear)

## Features
* OnePage template
* Fully Responsive
* Custom collapsing menu
* HTML5 and CSS3
* Fontawesome icon support 4.5.0 (CDN) [See the list here.](http://fortawesome.github.io/Font-Awesome/icons)
* Back to top
* Contact Form - __ToDo__ (v1.1.0)

## Supported Page Templates
* <code>home.html.twig</code> view (NOTE: if you use a Grav starter kit, please change the <code>default.md</code> file in ~user/pages/01.home to <code>modular.md</code>)
* <code>error.html.twig</code> view -

## Installation
Installing the **Prickly Pear** Theme can be done in one of two ways. Via GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.

#### GPM Installation

The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line). From the root of your Grav install type:

    bin/gpm install pricklypear

This will install the PricklyPear Theme into your `/user/themes` directory within Grav. Its files can be found under `/your/site/grav/user/themes/pricklypear`

>> **NOTE:** for the Skeleton version, please see: [Skeleton](https://github.com/CaribThemes/grav-skeleton-pricklypear) 

#### Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/site/grav/user/themes`. Then, rename the folder to `pricklypear`. You can find these files on [GitHub](https://github.com/CaribThemes/grav-theme-pricklypear).

You should now have all the theme files under

    /your/site/grav/user/themes/pricklypear

>> NOTE: This theme is a modular component for Grav which requires the [Grav](http://github.com/getgrav/grav), [Error](https://github.com/getgrav/grav-theme-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins.

## Updating
As development for the PricklyPear Theme continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating Grav is easy and can be done through Grav's GPM system, as well as manually.

#### GPM Update (Preferred)

The simplest way to update this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update pricklypear

This command will check your Grav install to see if your PricklyPear Theme is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The theme will automatically update and clear Grav's cache.

#### Manual Update

Manually updating Agency is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/themes/pricklypear` directory.
* Download the new version of the Bootstrap Theme on [GitHub](https://github.com/CaribThemes/grav-theme-pricklypear).
* Unzip the zip file in `your/site/user/themes` and rename the resulting folder to `pricklypear`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

## Setup
If you want to set PricklyPear as the default theme, you can do so by following these steps:

* Navigate to `/your/site/grav/user/config`.
* Open the **system.yaml** file.
* Change the `theme:` setting to `theme: pricklypear`.
* Save your changes.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in Terminal and typing `bin/grav clear-cache`.

Once this is done, you should be able to see the new theme on the frontend. Keep in mind any customizations made to the previous theme will not be reflected as all of the theme and templating information is now being pulled from the **pricklypear** folder.

<!--#### Contact Form Configuration
For contact form configuration instructions please refer to [official documentation](http://learn.getgrav.org/advanced/contact-form). Make sure you installed Email and Form plugin though.-->

## Support & Bugs
* If you need a support please go to the dedicated [![Join the chat at https://gitter.im/CaribThemes/grav-theme-pricklypear](https://badges.gitter.im/CaribThemes/grav-theme-pricklypear.svg)](https://gitter.im/CaribThemes/grav-theme-pricklypear?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
* If you find bugs, please report them on [here](https://github.com/CaribThemes/grav-theme-pricklypear/issues)

## Credits
* [Grav](http://getgrav.org) by [RocketTheme](http://www.rockettheme.com). Licensed under [MIT](https://github.com/CaribThemes/grav-theme-pricklypear/master/LICENSE.md)
* Photos by MATsxm for [IDIM<em>web</em>.com](http://idimweb.com). Licensed under __WTFPL__ (see LICENSE)
* Inspired by the template Fractal by [HTML5 up](http://html5up.net/)
* [Back To Top](https://github.com/CodyHouse/back-to-top) feature by [CodyHouse](https://github.com/CodyHouse)

>> __DISCLAIMER__

>>Note that @Sandra97 has never been involved in the CSS excepted for having killed few _!important;_ :stuck_out_tongue:

[CaribThemes](https://caribthemes.io) free web ressources is proudly brought to you by [IDIM<em>web</em>.com](http://idimweb.com)
