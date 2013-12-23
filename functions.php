<?php
/*
Author: Div Truth LLC
*/
  
/************************************
 * Load active features
 ************************************/
function theme_active_features(){
    require_once(THEME_FEATURES_DIR.'/acf-fields.php');                         #FEATURE: ACF Fields
    require_once(THEME_FEATURES_DIR.'/theme-support.php');                      #FEATURE: Theme Support Options
    require_once(THEME_FEATURES_DIR.'/sidebars.php');                           #FEATURE: Sidebars

    // require_once( THEME_MODULES_DIR .'/Events/_init.php');
    // do_action('div_init_modules');
}
add_action('after_setup_theme', 'theme_active_features');