<?php
//Get Current Theme Details 
$theme = wp_get_theme();
// set current theme version
define('dct_version',$theme->version);
// set current theme name
define('dct_themename',$theme->name); 
// set current theme version
define('dct_themedesc',$theme->description);
// Set Changelogs
define('dct_changelogs', get_stylesheet_directory_uri() .'/imports/changelog.txt');
// Set Latest Product URL 
define('dct_latest_products','http://divibusiness.divi-childthemes.com/latest-agency/');
// Set Support URL
define('dct_support_url','http://www.divi-childthemes.com/support/');
// Set Support Mail URL
define('dct_support_mail','divichildthemes@gmail.com');
// Set Demo Product URL
define('dct_demo_url','https://divifixer.com/dctchildthemes/onepage/diviweb/');
// Set Latest Product URL
define('dct_docs_url','http://divibusiness.divi-childthemes.com/divi-child-theme-installation-guide/');
// Set Latest Product URL
define('dct_video_url','https://www.youtube.com/watch?v=XLKhafy53j0&list=PL8IxLwAak39597UUFT_K047nlT3aeQ9Ly');
// Set Theme Option Json File Name 
define('dct_theme_options_file_name','diviwebagency_theme_options.json');
// Set Theme Option Json File URL 
define('dct_theme_options_url','https://divifixer.com/dcttheme/onepage/diviagency/diviwebagency/diviwebagency_theme_options.json');
// Set customizer_settings Json File Name 
define('dct_customizer_settings_file_name','diviwebagency_customizer_settings.json');
// Set customizer_settings Json File URL 
define('dct_customizer_settings_url','https://divifixer.com/dcttheme/onepage/diviagency/diviwebagency/diviwebagency_customizer_settings.json');
// Docs Folder
define('dct_docs_folder_name','diviagency/diviwebagency');
// Docs File Name
define('dct_docs_file_name','diviwebagency');
// Pramary Menu Name
define('main_menu','main_menu');
// Secondary Menu
define('secondary_menu','');
// Footer Menu
define('footer_menu','');
// Front Page
define('front_page','Home');
// One Click Tutorials
define('dct_one_click_url','https://www.youtube.com/watch?v=-GCHJEo49cI');
?>