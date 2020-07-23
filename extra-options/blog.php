<style type="text/css">
	#dct-custom-header{
		padding-top:150px!important;
		background-blend-mode:overlay!important;
		background-image:url(<?php echo et_get_option( 'divi_DCT_blog_bg' ) ?>) !important;
		background-color:<?php echo et_get_option( 'divi_DCT_blog_bg_overlay_color' ) ?>!important;
		background-position:top <?php echo et_get_option( 'divi_DCT_blog_bg_position' ) ?>!important;
		background-size:<?php echo et_get_option( 'divi_DCT_blog_bg_size' ) ?>;
		padding-bottom:0px!important;
		background-repeat:no-repeat
	}
	#dct-custom-header h2 {
 		border-color:<?php echo et_get_option( 'divi_DCT_blog_title_bg_color' ) ?>!important;
		font-size: 45px;
        text-transform: uppercase;
        font-weight: 600;
 		padding-bottom: 15px;
		color:<?php echo et_get_option( 'divi_DCT_blog_title_color' ) ?>!important;}
	
	#dct-custom-header .et_pb_column{text-align: center !important;width: 100%;}
    .single .et_pb_post .entry-title {
		display: none !important;
	}
	.single #main-content .container{padding-top:30px !important;}			
@media  (max-width:480px){
	#dct-custom-header h2 {font-size: 25px;}
}
.single-post #page-container #contact {padding-top:0px !important;}
.single-post #page-container #contact .et_pb_row {width:80% !important;}
.single-post #page-container #contact .et_pb_row_fullwidth {width:100% !important;}
</style>