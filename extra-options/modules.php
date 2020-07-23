<?php 
/**
* Extra Theme Options
* Extra Theme Tabs Options
*/

/* Add Extra Social Icons Code Here
-------------------------------------------------------------- */
function dct_social_icons($dctpagenoptions) {
	global $themename, $shortname;
	$open_social_new_tab = array( "name" =>esc_html__( "Open Social URLs in New Tab", $themename ),
                   "id" => $shortname . "_show_in_newtab",
                   "type" => "checkbox",
                   "std" => "off",
                   "desc" =>esc_html__( "Set to ON to have social URLs open in new tab. ", $themename ) );	$replace_array_newtab = array ( $open_social_new_tab );	$srch_key = array_column($dctpagenoptions, 'id');	array_splice($dctpagenoptions, $key + 6, 0, $replace_array_newtab);	array_splice($dctpagenoptions, $key + 8, 0, $repl_array_opt);
	array_splice($dctpagenoptions, $key + 17, 0, $repl_array_url);
	return $dctpagenoptions;
}
/* End Extra Social Icons Code Here
-------------------------------------------------------------- */

/* Add Theme Options Panel Tabs Code Here
-------------------------------------------------------------- */
function dct_epanel_tabs(){
  dct_epanel_fields();
  ?>
<li><a href="#wrap-dct"><?php echo 'HERCOS Options'; ?></a></li>

<?php
}
/* End Theme Options Panel Tabs Code Here
-------------------------------------------------------------- */

/* Add Theme Options Panel Tabs Options Code Here
*  Top Notification Bar
*  Preloader
*  Mobile Menu
*  Blog
*  Back To Top
*  404-Page
*  Woocommerce
*  Slider
-------------------------------------------------------------- */
function dct_epanel_fields(){  global $epanelMainTabs, $themename, $shortname, $options ;

		$options[] = array(
			"name" => "wrap-dct",
			"type" => "contenttab-wrapstart",);

			$options[] = array(
				"type" => "subnavtab-start",);				$options[] = array(
					"name" => "dct-1",
					"type" => "subnav-tab",
					"desc" => esc_html__("General", $themename)
				);
				$options[] = array(
					"name" => "dct-5",
					"type" => "subnav-tab",
					"desc" => esc_html__("Back To Top", $themename)

				);
			$options[] = array(
					"type" => "subnavtab-end",);	

			$options[] = array(
					"name" => "dct-1",
					"type" => "subcontent-start",);

			$options[] = array( 
				"name" =>esc_html__( 'Roulette de couleur personnalisé', $themename ),
				"id" => $shortname . "_DCT_show_color_option",
				"type" => "checkbox2",
				"std" => "off",
				"desc" =>esc_html__( "Définir la palette de couleurs par défaut pour les sélecteurs de couleurs dans le Divi Builder.", $themename ),
			);
			$options[] = array( "name"         => esc_html__( "Couleur primaire par défaut", $themename ),
					"id"           => $shortname . "_DCT_color_palette_01",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Définir la palette de couleurs par défaut pour les sélecteurs de couleurs dans le Divi Builder.", $themename ),
					);

					$options[] = array( "name"         => esc_html__( "Couleur secondaire par défaut", $themename ),
					"id"           => $shortname . "_DCT_color_palette_02",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Définir la palette de couleurs par défaut pour les sélecteurs de couleurs dans le Divi Builder.", $themename ),
					);					

				

				
					/*

					$options[] = array(

						'name' => esc_html__('Fixed Header Logo', $themename),

						'id' => $shortname . "_DCT_fix_logo_url",

						'desc' => '',

						'std' => get_stylesheet_directory_uri() . '/images/logo.png',

						"type" => "upload"

					  );

					*/
				

			$options[] = array(
				"name" => "dct-1",
				"type" => "subcontent-end",);

				//**************************Pre-Loader Options Start Here******************************************//	

			$options[] = array(

					"name" => "dct-2",

					"type" => "subcontent-start",);

				
				   
					/*
				   

					$options[] = array(

					'name' => esc_html__('Preloader Image Size', $themename),

					'id' => $shortname . "_DCT_preloader_image_size",

					'desc' => esc_html__('Preloader Image Size', $themename),

					'std' => '70px',

					"type" => "select",

					"options" => array(

					  '70px' => esc_html__('Regular', $themename),

					  '100px' => esc_html__('Large', $themename),

					),

					'et_save_values' => true,

				  );
					*/
				  
				  

				  
					/*
				   $options[] = array(

					'name' => esc_html__('Preloader body Opacity', $themename),

					'type' => 'text',

					'id' => $shortname . "_DCT_preloader_body_opacity",

					'desc' => esc_html__('Please put Opacity, only use number. Default value is 1. Example: .8 You can learn more about opacity', $themename),

					'std' => '1',

				  );
					*/
				  

				

			$options[] = array(
				"name" => "dct-2",
				"type" => "subcontent-end",);				///***************************Back To Top Options Start Here*****************************************//	

			$options[] = array(

				"name" => "dct-5",

				"type" => "subcontent-start",);	

				

				$options[] = array( 

				   "name" =>esc_html__( 'Option de retour en haut personnalisée', $themename ),

				   "id" => $shortname . "_DCT_BackToTop_option",

				   "type" => "checkbox2",

				   "std" => "on",

				   "desc" =>esc_html__( "Change Deafault Back To Top Option.", $themename ),

				);					$options[] = array( "name" => esc_html__( "Type de Retour En Haut", $themename ),
				   "id" => $shortname . "_DCT_BackToTop_type",
				   "type" => "select",
				   "std" => "asc",
				   "desc" => esc_html__( "", $themename ),
				   "options" => array("one", "two","three"));

			$options[] = array(
					'name' => esc_html__('Texte de Retour En Haut', $themename),
					'type' => 'text',
					'id' => $shortname . "_DCT_BackToTop_text",
					'desc' => 'Back To Top',
					'std' => 'Back To Top',
				);

			$options[] = array( "name"         => esc_html__( "Texte Couleur du Retour En Haut", $themename ),

					"id"           => $shortname . "_DCT_BackToTop_text_color",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Background Color", $themename ),
				);		

			$options[] = array( "name"         => esc_html__( "Background Color", $themename ),

					"id"           => $shortname . "_DCT_BackToTop_bg_color",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Background Color", $themename ),
				);

			$options[] = array( "name"         => esc_html__( "Couleur de survol d'arrière-plan", $themename ),

					"id"           => $shortname . "_DCT_BackToTop_bg_hover_oolor",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Background Hover Color", $themename ),
				);		

			$options[] = array( "name"         => esc_html__( "Border Color", $themename ),
					"id"           => $shortname . "_DCT_BackToTop_border_color",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "Border Color", $themename ),
				);

			$options[] = array( "name"         => esc_html__( "Sur la couleur de l'ombre de la zone de survol", $themename ),
					"id"           => $shortname . "_DCT_BackToTop_hover_box_shadow_color",
					"type"         => "et_color_palette",
					"items_amount" => 1,
					"std"          => '#000000',
					"desc"         => esc_html__( "On Hover Change Box Shadow Color", $themename ),
				);			

			$options[] = array(
				"name" => "dct-5",
				"type" => "subcontent-end",);				///***************************Mobile Menu Options  End Here*****************************************//		
			$options[] = array(
					"name" => "dct-6",
					"type" => "subcontent-start",);			$options[] = array(
				"name" => "dct-6",
				"type" => "subcontent-end",);	
			///***************************Particle Ground Options Start Here*****************************************//			

			$options[] = array(

				"name" => "dct-7",

				"type" => "subcontent-start",);

			  $options[] = array(

				"name" => "dct-7",

				"type" => "subcontent-end",);		

///***************************Particle Ground Options End Here*****************************************//						
				$options[] = array( 
					"name" => "wrap-dct",
					"type" => "contenttab-wrapend",);

}
/* End Theme Options Panel Tabs Options Code Here
-------------------------------------------------------------- */

function et_dct_cta_desc_option(){

  echo "<p>Add below Class on Menu Link</strong></p><br/>";
  echo "<p><strong>Class</strong> : 'menu-btn'</p>";

}function et_dct_particles_desc_option(){

  echo "<p>Add below ID on Section module</strong></p><br/>";
  echo "<p><strong>ID</strong> : 'dct-particles-js'</p>";
}
function et_hamburger_option(){

	// Store layouts views in array

		$hamburger_images = array(

			'hamburger_images1' => array(

				'value' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger1.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger1.gif'

			),

			'hamburger_images2' => array(

				'value' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger2.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger2.gif'

			),

			'hamburger_images3' => array(

				'value' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger3.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger3.gif'

			),

			'hamburger_images4' => array(

				'value' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger4.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/hamburger/hamburger4.gif'

			),

	);
	$gt_hamburger_images = get_option( 'divi_DCT_hamburger_images' ) ;

	foreach( $hamburger_images as $activate ) : ?>

<div style="margin-right:50px; display: inline-block; line-height: 70px;">

  <input type="radio"  name="divi_DCT_hamburger_images"    value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $gt_hamburger_images, $activate['value'] ); ?> class="dct-hamburger-radio"/>

  <label for="<?php echo $activate['value']; ?>"> <img src="<?php echo $activate['img']; ?>"  width="70" alt="hamburger" /> </label>

</div>

<?php endforeach;

}
/* Adding Preloader Options Code Here
-------------------------------------------------------------- */
function DCT_custom_preloader_option_css(){

	if( et_get_option('divi_DCT_preloader_option') != '' ){

		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');

	}else{

		$divi_DCT_preloader_option = 'on';

	}

	if( $divi_DCT_preloader_option == 'on' ){

		$divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');

		$divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');

		$divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');

		$divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects');

		$divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time');

		$divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time');		 ?><?php
	}
}

/* Adding Preloader Options Section
-------------------------------------------------------------- */
function DCT_preloader_option_section(){ 	if( et_get_option('divi_DCT_preloader_option') != '' ){

		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');	}else{		$divi_DCT_preloader_option = 'on';	}	$is_et_fb_enabled = function_exists( 'et_fb_enabled' ) && et_fb_enabled();

	if( $divi_DCT_preloader_option == 'on' && !$is_et_fb_enabled){	  			?>

		<!-- PRE LOADER -->

		<div class="preloader">

		  <div class="status">

			<?php

						$divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');

						$divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');

						if($divi_DCT_preloader_custom_image != '' &&  et_get_option('divi_DCT_preloader_custom_image_option') == 'on' ){

							?>

			<img src="<?php echo $divi_DCT_preloader_custom_image; ?>" alt="<?php echo get_bloginfo(); ?>" />

			<?php	

						} else { 

							if ( $divi_DCT_preloader_images!= '' ){

									require_once( get_stylesheet_directory().'/extra-options/preloader/'.str_replace("gif","php",end(explode('/',  esc_attr(get_option("divi_DCT_preloader_images", '/preloader1.gif' ))))));

							 }else{

									require_once( get_stylesheet_directory().'/extra-options/preloader/preloader1.php' );

							 }

						}

					?>

		  </div>

		</div>

		<!-- .preloader -->

		<?php 
	}
}/* Adding Preloader Active jQuery
-------------------------------------------------------------- */
function DCT_preloader_js(){ 
	if( et_get_option('divi_DCT_preloader_option') != '' ){
		$divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');
	}else{
		$divi_DCT_preloader_option = 'on';
	}
	if( $divi_DCT_preloader_option == 'on' ){	
		 $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');
		 $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');
		 $divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');
		 $divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects','fadeOut');
		 $divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time',350);
		 $divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time',350);
		/*
		 $divi_DCT_preloader_body_opacity = et_get_option('divi_DCT_preloader_body_opacity',1);
		*/

?>

<script type="text/javascript">
            jQuery(window).load(function(){	

                jQuery('.home').delay(<?php echo $divi_DCT_preloader_body_delay_time; ?>).css({'overflow':'visible'});
            })
        </script>

<?php

	}
}/* Adding Preloader Options jQuery
-------------------------------------------------------------- */
function et_preloader_option(){
	// Store layouts views in array
		$preloader_images = array(
			'preloader_images1' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif'
			),

			'preloader_images2' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif'
			),	

			'preloader_images3' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif'
			),	

			'preloader_images4' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif'
			),	

			'preloader_images5' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif'
			),	

			'preloader_images6' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif'
			),	

			'preloader_images7' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif'
			),	

			'preloader_images8' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif'
			),	

			'preloader_images9' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif'
			),	

			'preloader_images10' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif'
			),	

			'preloader_images11' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif'
			),	

			'preloader_images12' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif'
			),	

			'preloader_images13' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif'
			),	

			'preloader_images14' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif'
			),	

			'preloader_images15' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif'
			),	

			'preloader_images16' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif'
			),	

			'preloader_images17' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif'
			),	

			'preloader_images18' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif'
			),	

			'preloader_images19' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif'
			),	

			'preloader_images20' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif'
			),	

			'preloader_images21' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif'
			),	

			'preloader_images22' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif'
			),	

			'preloader_images23' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif'
			),	

			'preloader_images24' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif'
			),	

			'preloader_images25' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif'
			),	

			'preloader_images26' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif'
			),	

			'preloader_images27' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif'
			),	

			'preloader_images28' => array(
				'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif',
				'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif'
			)
	);

	$gt_preloader_images = get_option( 'divi_DCT_preloader_images' ) ;

	foreach( $preloader_images as $activate ) : ?>

<div style="margin-right:50px; display: inline-block; line-height: 70px;">

  <input type="radio"  name="divi_DCT_preloader_images" 
                value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $gt_preloader_images, $activate['value'] ); ?> 
                 class="dct-preloader-radio"/>

  <label for="<?php echo $activate['value']; ?>"> <img src="<?php echo $activate['img']; ?>"  width="70" alt="preloader" /> </label>

</div>

<?php endforeach; 
} 

/* Save Preloader Theme Options
-------------------------------------------------------------- */
function et_epanel_save_callback_new( $source ){
	update_option('divi_DCT_preloader_images',$_POST['divi_DCT_preloader_images']);
}
/* Add Blog Page Title
-------------------------------------------------------------- */
function dct_blog_page_title() {

	if ( 'on' === et_get_option( 'divi_DCT_blog_option', 'on' )) {

		if ( is_single() ){

			?>

				<div class="et_pb_section" id="dct-custom-header" >

				  <div class="et_pb_row">

					<div class="et_pb_column ">

						<h2>

							<?php the_title( ); ?>

						</h2>

					</div>

				  </div>

				</div>

		<?php

		}else if( is_category()){

			$categories = get_the_category();

			if ( ! empty( $categories ) ) {

				?>

			<div class="et_pb_section" id="dct-custom-header" >

			  <div class="et_pb_row">

				<div class="et_pb_column ">

				  <h2><?php echo esc_html( $categories[0]->name );   ?></h2>

				</div>

			  </div>

			</div>

			<?php
				}

		}	 

	} 

}function et_dct_library_layouts() {

	$libs = array();

	$args = array('post_type' => 'et_pb_layout', 'posts_per_page' => -1);

    $alllibrarys = get_posts($args);

    $all_ids = wp_list_pluck( $alllibrarys , 'post_title','post_title' );

	if(!empty($all_ids)){

	$libs += [null => 'None'];	

	foreach($all_ids as $key=>$val){

		$libs += [$key => esc_html__( $val, 'et_builder' )];

	}

	}else{

		$libs += [null => 'Sorry, Divi Library is empty. Create some layouts...'];

	}

	return $libs;    	

}


/* Add Hook For Add Extra Theme Options
-------------------------------------------------------------- */
add_action("epanel_render_maintabs", 'dct_epanel_tabs');
/* Add Hook For  Add Extra Theme Tabs Options
-------------------------------------------------------------- */
add_action("et_epanel_changing_options", 'dct_epanel_fields');
/* Add Preloader Theme Options
-------------------------------------------------------------- */
add_action( 'wp_ajax_save_epanel', 'et_epanel_save_callback_new' );
/* Blog Options
-------------------------------------------------------------- */
add_action('et_before_main_content', 'dct_blog_page_title');
