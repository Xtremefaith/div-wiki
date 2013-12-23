## Div Starter Module Overview: Custom
Contributors: Nick Worth
Version 0.1
Requires: ACF 4.0+ (included in theme)

#### Description
This module registers the "custom" custom post type and initializes ACF custom fields to be used throughout theme development

#### Includes
+ *fields.php* - All ACF fields
+ *column.php* - Custom column layout when viewing all customs
+ *shortcode.php* - Shortcodes for customs module
	+ [shortcode]
+ *page-customs.php* - Used for the 'customs' page
+ *single-custom.php* - Used for the 'custom' single page

#### Change Log
+ Setup dynamic template for initiating CPT

#### Todo List
+ Setup a useful Custom Page Template (page-customs.php)
+ Setup a useful Single Custom Template (single-custom.php)
+ Setup a fields (fields.php) - using ACF interface, then export PHP
+ Setup a columns (columns.php)
+ Create some customs shortcodes [shortcodes.php]
+ Create some customs widgets [widgets.php]