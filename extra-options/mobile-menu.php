	<style type="text/css">
	@media only screen and (max-width: 980px){
	/*Change Mobile Fix header Background Color Here*/
	.et_fixed_nav #main-header.et-fixed-header{ background: <?php echo et_get_option( 'divi_DCT_mobile_menu_fixed_background_color' ) ?>!important;}
	/*Change Mobile Header Background Color Here*/
	#main-header, #main-header .nav li ul, .et-search-form, #main-header .et_mobile_menu {background-color:<?php echo et_get_option( 'divi_DCT_mobile_menu_background_color' ) ?>!important; }
	/*Mobile Menu List Active Menu Color Change Here*/
	.mobile_nav ul#mobile_menu .current_page_item > a{color:<?php echo et_get_option( 'divi_DCT_mobile_menu_active_link_text_color' ) ?>!important;}
	/*Mobile Menu List Color Change Here*/
	.et_mobile_menu li a{color:<?php echo et_get_option( 'divi_DCT_mobile_menu_text_color' ) ?> !important;}
	/*Mobile Menu Bar Color Change Here*/
	.mobile_menu_bar:before{color:<?php echo et_get_option( 'divi_DCT_mobile_menu_bar_color' ) ?>!important;}
	/*Mobile Menu List Active Menu Color Change Here*/
	.mobile_nav.opened .mobile_menu_bar:before{color:<?php echo et_get_option( 'divi_DCT_mobile_menu_close_bar_color' ) ?> !important}
	.et_header_style_split #main-header {padding:0px 0px;}
	.et_header_style_split #main-header .mobile_nav {background-color: transparent;}
	.et_header_style_split #et_mobile_nav_menu {margin-top:0px;}

	/*Change Mobile Header Background Color Here*/
	#main-header, #main-header .nav li ul, .et-search-form, #main-header .et_mobile_menu {z-index: 999999;}
	.et_header_style_split #et_top_search, .et_vertical_nav.et_header_style_split #main-header #et_top_search {display:block !important;position:absolute;right:0px;color:#000 !important;margin-top:10px;}
	#main-header .container.clearfix.et_menu_container{width:100%;padding:10px 0}
	#mobile_menu{display:block!important;min-height:100vh;height:100%;top:0;left:-100%;position:fixed;z-index:9998;overflow:scroll;border-top:none;padding-top:20px!important}
	.mobile_menu_bar {z-index: 999999999;}
	.menu-btn {background:transparent !important; }
	.menu-btn a {color:#fff !important;border:0px solid;}
	#et-top-navigation .select_page{display:none;} 
	/*Mobile Menu List Color Change Here*/
	.et_mobile_menu li a{width:100%;float:left;text-align:left;border-bottom:1px solid #222 ;margin:5px;transition:.2s;text-transform:uppercase;padding: 10px 10%;}
	/*Mobile Menu List Active Menu Color Change Here*/
	.mobile_nav ul#mobile_menu .current_page_item > a{padding:10px 12%;}
	/*Mobile Menu List Active Menu Color Change Here*/
	.mobile_nav.opened .mobile_menu_bar:before{content:"\4d";}
	.mobile_nav.closed #mobile_menu{-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%);-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transition:-webkit-transform .4s 0s;-moz-transition:-moz-transform .4s 0s;transition:transform .4s 0s;}
	.mobile_nav.opened #mobile_menu{-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);-o-transform:translateX(100%);transform:translateX(100%);-webkit-overflow-scrolling:touch;-webkit-transition:-webkit-transform .4s 0s;-moz-transition:-moz-transform .4s 0s;transition:transform .4s 0s}
	<?php //Set Mobile Menu
	if ( 'on' === et_get_option( 'divi_DCT_mobile_menu_sticky_option', 'on' )) {
	?>
		.et_fixed_nav #main-header.et-fixed-header{position:fixed;top:0px!important;}
		.et_header_style_left .et-fixed-header #et-top-navigation{padding-top:5px}
		.et_fixed_nav #et-top-navigation{-webkit-transition:none;-moz-transition:none;transition:none}
	<?php } ?>
		.et_header_style_left #logo,.et_header_style_split #logo{display:block;margin:auto}
		.et_header_style_split .mobile_menu_bar, .et_header_style_left .mobile_menu_bar {   z-index: 99999999;width:40px; }
		.et_header_style_split .mobile_menu_bar {position: absolute;top: 0px;left: 10px;}
		#et-top-navigation {   padding-right: 5px;  }
	/* make search icon visible */
	.et_header_style_centered #et_top_search, 
	.et_vertical_nav.et_header_style_centered #main-header #et_top_search,
	.et_header_style_split #et_top_search, 
	.et_vertical_nav.et_header_style_split #main-header #et_top_search {display: block !important;float: right;z-index: 99999;}
	/* align search icon for Centered header */
	.et_header_style_centered #et_search_icon:before {top: 7px;left: -3px;}
	/* align search icon for Centered Inline Logo header*/
	.et_header_style_split #et_search_icon:before {margin-top: 0;left: -3px;color:#000 !important;}
	
	/* make search field visible */
	.et_header_style_centered .et_search_outer, 
	.et_header_style_split .et_search_outer {display: block;}
	
	/* set max-width for search form container */
	.et_header_style_centered .container.et_search_form_container,
	.et_header_style_split .container.et_search_form_container.et_pb_search_visible,
	.et_header_style_split .container.et_search_form_container.et_pb_search_form_hidden {max-width: 100% !important;	}
	
	/* apply in-animation for search form container */
	.et_header_style_centered .container.et_search_form_container.et_pb_search_visible,
	.et_header_style_split .container.et_search_form_container.et_pb_search_visible {
		z-index: 999;
		-webkit-animation: fadeInTop 1s 1 cubic-bezier(.77,0,.175,1);
		-moz-animation: fadeInTop 1s 1 cubic-bezier(.77,0,.175,1);
		-o-animation: fadeInTop 1s 1 cubic-bezier(.77,0,.175,1);
		animation: fadeInTop 1s 1 cubic-bezier(.77,0,.175,1);
	}
	/* apply out-animation for menu bar elements */
	.et_header_style_centered .et_pb_menu_hidden #et_search_icon:before, 
	.et_header_style_centered .et_pb_menu_hidden .mobile_menu_bar,
	.et_header_style_centered .et_pb_menu_hidden .select_page,
	.et_header_style_split .et_pb_menu_hidden #et_search_icon:before, 
	.et_header_style_split .et_pb_menu_hidden .mobile_menu_bar,
	.et_header_style_split .et_pb_menu_hidden .select_page {
		opacity: 0;
		-webkit-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-moz-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-o-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
	}
	/* apply in-animation for "Select Page" container */
	.et_header_style_centered .et_pb_menu_visible .select_page,
	.et_header_style_split .et_pb_menu_visible .select_page {
		opacity: 1;
		-webkit-animation: fadeInBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-moz-animation: fadeInBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-o-animation: fadeInBottom 1s 1 cubic-bezier(.77,0,.175,1);
		animation: fadeInBottom 1s 1 cubic-bezier(.77,0,.175,1);
	}
	/* adjust close search icon horizontal positioning */
	.et_header_style_centered span.et_close_search_field,
	.et_header_style_split span.et_close_search_field {
		right: 5px;
	}
	/* adjust search form input horizontal positioning */
	.et_header_style_centered .et-search-form input,
	.et_header_style_split .et-search-form input {
		left: 10px;
		right: auto;
	}
	/* adjust search form input and close icon vertical positioning */
	.et_header_style_centered .et-search-form input, 
	.et_header_style_centered span.et_close_search_field,
	.et_vertical_nav.et_header_style_centered .et-search-form input, 
	.et_vertical_nav.et_header_style_centered span.et_close_search_field,
	.et_header_style_split .et-search-form input, 
	.et_header_style_split span.et_close_search_field  {
		line-height: 2em;
		color: #000;
	}
	.et_header_style_centered span.et_close_search_field,
	.et_header_style_split span.et_close_search_field  {
		bottom: 20px;
	}
	/* set width values for search form */
	.et_header_style_centered .et-search-form,
	.et_header_style_split .et-search-form {
		width: 100% !important;
		max-width: 100% !important;
		bottom: 0px;
		background: #fff !important;
	}
	/* adjust close search icon top margin */
	.et_header_style_centered .et_close_search_field:after,
	.et_header_style_split .et_close_search_field:after {
		margin-top: 10px;
		color: #000;
	}
	.et_header_style_split #et_search_icon::before {margin-top:-10px !important;left:20px;}
	.et_header_style_left .mobile_menu_bar, .et_header_style_split .mobile_menu_bar {padding-bottom:0px !important;}
	.et_header_style_left #et-top-navigation, .et_header_style_left .et-fixed-header #et-top-navigation {padding-top:0px !important;}
	#et_mobile_nav_menu {
		float: none;
		position: absolute;
		left: 10px;
	}
	.mobile_menu_bar::before {
		position: relative;
		top: 0;
		left: 0;
	}
	#main-header {height:50px !important;}
	.et_header_style_left .logo_container {position: absolute;width: 100%;height: 60px;}
	#et_search_icon:before {left:20px;}
	.container.et_search_form_container {left:20px !important;}
	#et_store_icon::before {
		position: absolute;
		top: -3px;
		left: 0;
		font-size: 17px;
		content: "\56";
	}
	.box {
		margin-bottom: -10px;
	}
	.et_mobile_menu li a:hover ,
	.mobile_nav ul#mobile_menu .current_page_item > a:hover{background:rgba(255,255,255,0.8) !important;opacity:1 !important;color:#000 !important; }
	span.logo_helper {display:inline;}
	<?php if ('on' == et_get_option('divi_DCT_mobile_menu_cta' ) ) { ?>
	.et_mobile_menu li.menu-btn a {
		background: <?php echo esc_attr( et_get_option( 'divi_DCT_mobile_menu_cta_bg_color', ' #000' ))  ?> !important;
		padding: 10px !important;
		color:  <?php echo esc_attr( et_get_option( 'divi_DCT_mobile_menu_cta_text_color', '#fff' ))  ?> !important;
		text-align: center !important;
	}
	.et_mobile_menu li.menu-btn a:hover {
		background: <?php echo esc_attr( et_get_option( 'divi_DCT_mobile_menu_cta_hover_bg_color', ' #fff' ))  ?> !important;
		color: <?php echo esc_attr( et_get_option( 'divi_DCT_mobile_menu_cta_hover_text_color', '#000' ))  ?>!important;
	}
	<?php }?>
	}
	@media only screen and  (min-width: 481px) {
		#mobile_menu { width: 340px;margin-left: calc(100% - 340px);  }
	}
	@media only screen and (max-width: 480px)  {
		#mobile_menu {  width: 260px;margin-left: calc(100% - 260px);   }
	}
	@media only screen and  (max-width: 340px) {
		#mobile_menu { width: 100%;margin-left: 0;  }
	}
	html #wpadminbar {position:fixed;}
	.et-fixed-header #logo {max-height: 50%;
		position: relative;}
	
		<?php 
		//Set Mobile Menu
    	if ( 'on' === et_get_option( 'divi_DCT_mobile_menu_collapsible_submenus_option', 'on' )) {
		?>
        <style type="text/css">
			#main-header .et_mobile_menu .menu-item-has-children > a { background-color: transparent; position: relative; }
			#main-header .et_mobile_menu .menu-item-has-children > a:after { font-family: 'ETmodules'; text-align: center; speak: none; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; position: absolute; }
			#main-header .et_mobile_menu .menu-item-has-children > a:after { font-size: 16px; content: '\33'; top: 13px; right: 10px; }
			#main-header .et_mobile_menu .menu-item-has-children.visible > a:after { content: '\34'; }
			#main-header .et_mobile_menu ul.sub-menu { display: none !important; visibility: hidden !important;  transition: all 1.5s ease-in-out;}
			#main-header .et_mobile_menu .visible > ul.sub-menu { display: block !important; visibility: visible !important; }
        
	   	<?php	} ?>
		</style>
        <script type="text/javascript"> 
		<?php
	
		//Set Mobile Menu
		if ( 'on' === et_get_option( 'divi_DCT_mobile_menu_outsite_close_option', 'on' )) {
			?>
       
			(function($) {
				$(document).click(function(event) { 
					if(!$(event.target).closest('#mobile_menu').length) {
						if($('#mobile_menu').is(":visible")) {
							$('.mobile_nav').removeClass("opened").addClass("closed"); 
						}
					}        
				});
			})(jQuery);
			
        <?php } //if ( 'on' === et_get_option( 'divi_DCT_mobile_menu_outsite_close_option', 'on' )) ?>
       
			(function($) {
				function setup_collapsible_submenus() {
					var $menu = $('#mobile_menu'),
						top_level_link = '#mobile_menu .menu-item-has-children > a';
						$menu.find('a').each(function() {
						$(this).off('click');
						if ( $(this).is(top_level_link) ) {
							$(this).attr('href', '#');
						}
						if ( ! $(this).siblings('.sub-menu').length ) {
							$(this).on('click', function(event) {
								$(this).parents('.mobile_nav').trigger('click');
							});
						} else {
							$(this).on('click', function(event) {
								event.preventDefault();
								$(this).parent().toggleClass('visible');
							});
						}
					});
				}
				$(window).load(function() {
					setTimeout(function() {
						setup_collapsible_submenus();
					}, 700);
				});
			})(jQuery);
		</script>