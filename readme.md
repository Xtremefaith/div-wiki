# Div Child Theme (1.0)

## Description
This is a child them that *must* be installed with the [Div Starter Theme](https://bitbucket.org/nworth/div-starter). As a child theme feel free to make modifications as needed, using and of the resources packaged within the parent starter theme.

As with the starter theme, this was forked from the [Plus 1 Child Theme](https://bitbucket.org/betsela/plus1-child-theme), credit for the development belongs to [Positive Element](http://positiveelement.com)

## Requirements
+ **Requires**: 3.5.1 (WordPress)
+ **Tested up to**: 3.6
+ **License**: GPLv2 or later
+ **License URI**: http://www.gnu.org/licenses/gpl-2.0.html
+ **Tags**: custom post type, modules, features, bones, mobile first
+ **Modules (to be developed)**: 
	+ Events
	+ Books
	+ Hotels
	+ Quotes
	+ More to come...

## Instructions
Install [Div Starter Theme](https://bitbucket.org/nworth/div-starter) with this Child theme, then with both themes are installed simply activate the child theme. _This Child theme is currently in development and will be changed_ so any changes you wish to make should tracked incase you ever attempt to upgrade the theme (**which is not recommended**). As with the Starter theme, the `functions.php` represent the control panel for the theme, so when investigating something it is the place to start

## Developer Overview

#### Features
*Features are additional functions included with the theme, at the child level most of the scripts are commented out as placeholders with instructions on how to develop as needed*
![Div Truth Options](http://divtruth.com/screenshots/div-truth-options.png "Div Truth Options")


+ **ACF Fields** 
	+ `acf-fields.php`
	+ [ACF Fields](http://www.advancedcustomfields.com/resources/) exported fields to PHP to be packaged within your the theme
+ **Custom Post Type Modules**
	+ `modules.php`
	+ Control Panel for turning on/off CPT modules used on theme
+ **Documentation**
	+ `documentation.php`
	+ Preset template page for Plus1 Documentation page (includes auto populating videos from Plus1 server)
+ **Shortcodes**
	+ `shortcodes.php`
	+ All theme specific shortcodes can be placed here
+ **Sidebars**
	+ `sidebars.php`
	+ Any sidebars that need to be registered for this theme can be done here
+ **Theme Support**
	+ `theme-support.php`
	+ Any theme support options, such as registering new image sizes can be done here per theme

#### Modules
*Modules are developed individually for any custom post type use. These function a lot like plugins but from the theme level (keep this in mind when scoping vars)*

+ **Events**
	+ Event CPT module equipped with widgets, shortcodes, and a calendar page to make adding events to your theme simple and easy to customize for each project
+ **Books**
	+ Selling books, or listing books, this module provides the ground work for theme-ing book custom post types into your theme
+ **Insert your module here**
	+ Use the custom module template to make you're own to reuse like a plugin built into your theme


## Contributors
+ [Nick Worth](mailto:nick@divtruth.com)] - ([@Xtremefaith](http://twitter.com/Xtremefaith))
+ [Betsy Cohen](mailto:betsy@positiveelement.com)] - ([@Betsela](http://twitter.com/betsela))