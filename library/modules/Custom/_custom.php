<?php 
/*
Module Name:    Custom Module
Developer URI:  http://www.DivTruth.com
Description:    Module for adding/managing {module-name} custom post types
Version:        1.0
Author:         Nick Worth
Author URI:     http://www.nickworth.com
Dependencies: 
	# ACF: http://wordpress.org/extend/plugins/advanced-custom-fields/
INSTRUCTIONS:
	1) Set init function - must be init_{module-slug}_module() format
	2) Set required includes
	3) Set {cpt}_page_template & {cpt}_single_template
*/


function init_custom_module(){ #STEP 1
  # Register Module
  $module = basename(dirname(__FILE__));
  $slug = CUSTOM::slugify($module);
  $single = CUSTOM::singularize($module);
  $cpt = CUSTOM::singularize_slug($slug);

  if(get_field($slug.'_module','options') == "Enable"){
    $module_labels = array(
    	'menu_name'          => $module,
      'add_new'            => 'Add New '.$single,
    );
    $module_args = array(
        'supports'          => array('title','editor'),
        'menu_position'     => 5,
        'public'            => true, #allow permalinks
        'show_ui'           => true,  #allow in dashboard
        'menu_icon'         => THEME_MODULES_URL.'/'.$module.'/icon.svg'
    );
    $CPT = New CPT($cpt,$module_args,$module_labels);
  }

  #STEP 2
  // require_once( dirname(__FILE__).'/classes/'.$single.'.php');  #Module class

  /*********** Set Review Template ************/
   add_filter( 'page_template', 'custom_page_template' ); #STEP 3
   function custom_page_template( $page_template ){
       if ( is_page( CUSTOM::slugify(basename(dirname(__FILE__))))) {
           $page_template = dirname(__FILE__).'/page-'.CUSTOM::slugify(basename(dirname(__FILE__))).'.php';
       }
       return $page_template;
   };
  /********** Set Single Template ***********/
  add_filter( 'single_template', 'custom_single_template' ); #STEP 3 (continued)
  function custom_single_template( $single_template  ){
      if (is_singular( CUSTOM::singularize_slug(basename(dirname(__FILE__))))){
          $single_template = dirname(__FILE__).'/single-'.CUSTOM::singularize_slug(basename(dirname(__FILE__))).'.php';
      }
      return $single_template;
  };

}
add_action( 'init', 'init_'.$slug.'_module' );

?>