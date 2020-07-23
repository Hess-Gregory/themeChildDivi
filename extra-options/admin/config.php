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
define('dct_demo_url','http://divibusiness.divi-childthemes.com/agency/web/');
// Set Latest Product URL
define('dct_docs_url','http://www.divi-childthemes.com/divi-web-agency-one-page-multipurpose-child-theme-documentation-for-dct-option/');
// Set Latest Product URL
define('dct_video_url','https://www.youtube.com/watch?v=XLKhafy53j0&list=PL8IxLwAak39597UUFT_K047nlT3aeQ9Ly');
// Set Theme Option Json File Name 
define('dct_theme_options_file_name','diviwebagency_theme_options.json');
// Set Theme Option Json File URL 
define('dct_theme_options_url','https://divi-professional.com/DCT/diviagency/diviwebagency/diviwebagency_theme_options.json');
// Set customizer_settings Json File Name 
define('dct_customizer_settings_file_name','diviwebagency_customizer_settings.json');
// Set customizer_settings Json File URL 
define('dct_customizer_settings_url','https://divi-professional.com/DCT/diviagency/diviwebagency/diviwebagency_customizer_settings.json');
// Set Latest Product URL
define('dct_video_url','https://www.youtube.com/watch?v=XLKhafy53j0&list=PL8IxLwAak39597UUFT_K047nlT3aeQ9Ly');
// Docs Folder
define('dct_docs_folder_name','https://www.youtube.com/watch?v=XLKhafy53j0&list=PL8IxLwAak39597UUFT_K047nlT3aeQ9Ly');
// Docs File Name
define('dct_docs_file_name','https://www.youtube.com/watch?v=XLKhafy53j0&list=PL8IxLwAak39597UUFT_K047nlT3aeQ9Ly');

// Pramary Menu Name
define('main_menu','main_menu');
// Secondary Menu
define('secondary_menu','');
// Footer Menu
define('footer_menu','');
// Front Page
define('front_page','Home');

?>