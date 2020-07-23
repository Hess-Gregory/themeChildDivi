<style type="text/css">
/***********************Type 1****************************************/
<?php if ( trim(et_get_option( 'divi_DCT_BackToTop_type' )) == 'one' ){ ?>
.et_pb_scroll_top:before {
		content: "\21";/*select icon*/
		font-family: ETmodules !important;
		color:#fff;
	} 
	.et_pb_scroll_top{
		right: 20px; /*right space*/
		bottom: 20px; /*bottom space*/
		border-radius: 0px;/*border radius*/
		background: <?php echo et_get_option( 'divi_DCT_BackToTop_bg_color' ) ?> !important;/*button background color*/
		padding: 20px;/*space around the icon*/
		font-size: 24px;/*icon size*/
		z-index: 9999999;
		position: fixed;
		cursor: pointer;
		transition: all .1s ease-in-out; /*add transition*/
		
	}
	.et_pb_scroll_top:hover {
		background: <?php echo et_get_option( 'divi_DCT_BackToTop_bg_hover_oolor' ) ?> !important;/*background color on hover*/
		transition: all .1s ease-in-out; /*add transition*/
		border:1px solid <?php echo et_get_option( 'divi_DCT_BackToTop_border_color' ) ?>!important;
		box-shadow: 0 0 20px <?php echo et_get_option( 'divi_DCT_BackToTop_hover_box_shadow_color' ) ?>;
	}
 	.et_pb_scroll_top:after {
	  content: '<?php echo et_get_option( 'divi_DCT_BackToTop_text' ) ?>';
	  display: inline-block;
	  color: #FFF;
	  font-size:15px;
	  font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif;
	}
	
	.et_pb_scroll_top.et-pb-icon {font-size:15px;padding: 10px !important}
	@media (max-width: 981px){.et_pb_scroll_top::after {content:""}
		.et_pb_scroll_top{padding:10px;line-height: 20px;}
		.et_pb_scroll_top::after {margin-left: 5px;}
	}
/***********************Type 2****************************************/
<?php }else if (et_get_option( 'divi_DCT_BackToTop_type' ) == 'two'){ ?> 
		
			.et_pb_scroll_top {
				z-index: 9999999;
				position: fixed;
				right: 20px;
				bottom: 20px;
				background: <?php echo et_get_option( 'divi_DCT_BackToTop_bg_color' ) ?> !important;
				height: 100px;
				box-shadow: 0 2px 4px rgba(108,46,185,0.2);
				-webkit-transition: all 0.2s ease,-webkit-transform 0.6s ease;
				transition: all 0.2s ease,-webkit-transform 0.6s ease;
				transition: all 0.2s ease,transform 0.6s ease;
				transition: all 0.2s ease,transform 0.6s ease,-webkit-transform 0.6s ease;
				cursor: pointer;
			}
			.et_pb_scroll_top:before {
			  display: none;
			}
			.et_pb_scroll_top:after {
				content: "\24";
				font-family: ETmodules !important;
				color: #fff;
				font-size: 16px;
				margin-left: 10px;
			}
			.et_pb_scroll_top, .et_pb_scroll_top.et-visible,.et_pb_scroll_top.et-hidden {
			  -webkit-animation: none !important;
					  animation: none !important;
			}
			.et_pb_scroll_top,.et_pb_scroll_top.et-hidden {
			  -webkit-transform: scale(0) rotate(0deg);
					  transform: scale(0) rotate(0deg);
			}
			.et_pb_scroll_top.et-visible {
			  -webkit-transform: scale(1) rotate(360deg);
					  transform: scale(1) rotate(360deg);
			}
			.et_pb_scroll_top .et-pb-icon {
				  position: absolute;
				  top: 50%;
			  	  left: 50%;
			  	  -webkit-transform: translate(-50%, -50%);
				 transform: translate(-50%, -50%);
			}
			.et_pb_scroll_top {
				width: auto;
				padding: 0 20px;
				line-height: 40px;
			}
			.et_pb_scroll_top:before {
			  content: '<?php echo et_get_option( 'divi_DCT_BackToTop_text' ) ?>';
			  display: inline-block;
			  color: #FFF;
			  font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif;
			}
			.et_pb_scroll_top.et-pb-icon { right: 40px;
			  bottom: 150px;font-size:15px;padding:0px 10px !important}
			.et_pb_scroll_top,.et_pb_scroll_top.et-hidden {
			  right: 40px;
			  bottom: 100px;
			  -webkit-transform-origin: right top;
					  transform-origin: right top;
			  -webkit-transform: scale(1) translate(100%, 0) rotate(-90deg);
					  transform: scale(1) translate(100%, 0) rotate(-90deg);
			}
			.et_pb_scroll_top.et-visible {
			  -webkit-transform: rotate(-90deg);
					  transform: rotate(-90deg);
			}
			.et_pb_scroll_top .et-pb-icon {
			  display: none;
			  
			}
			 .et_pb_scroll_top:hover {
					background:<?php echo et_get_option( 'divi_DCT_BackToTop_bg_hover_oolor' ) ?> !important;
					border:1px solid <?php echo et_get_option( 'divi_DCT_BackToTop_border_color' ) ?>  !important;
					transition: all .1s ease-in-out; 
					box-shadow: 0 0 20px <?php echo et_get_option( 'divi_DCT_BackToTop_hover_box_shadow_color' ) ?>;
				}
		
			@media (max-width: 981px){.et_pb_scroll_top::before {content:""}
				.et_pb_scroll_top{padding:10px;line-height: 20px;}
				.et_pb_scroll_top::after {margin-left: 5px;}
				.et_pb_scroll_top.et-pb-icon {padding: 10px 10px !important; }
			}
/***********************Type 3****************************************/			
<?php }else if (et_get_option( 'divi_DCT_BackToTop_type' ) == 'three'){ ?> 			
	.et_pb_scroll_top:after {
		content: "<?php echo et_get_option( 'divi_DCT_BackToTop_text' ) ?>";
		font-family: "Open Sans",Arial,sans-serif;
		
	} 
	.et_pb_scroll_top:before {
		content: "\21";
		font-family: ETmodules !important;
		
		margin-right: 5px;
	} 
	.et_pb_scroll_top.et-pb-icon {
		padding: 15px 20px 17px;
		right: 20px;
		bottom: 30px;
		border-radius: 100px !important;
		background: <?php echo et_get_option( 'divi_DCT_BackToTop_bg_color' ) ?> !important;
		box-shadow: 0 10px 20px  <?php echo et_get_option( 'divi_DCT_BackToTop_hover_box_shadow_color' ) ?> !important;
		transition: all .1s ease-in-out;
		color: <?php echo et_get_option( 'divi_DCT_BackToTop_text_color' ) ?> !important;
		z-index: 9999999;
			position: fixed;
			cursor: pointer;
			padding-right: 10px;
			font-size:15px;
	}
	.et_pb_scroll_top.et-pb-icon:hover {
		background:<?php echo et_get_option( 'divi_DCT_BackToTop_bg_hover_oolor' ) ?>  !important;
		border:1px solid <?php echo et_get_option( 'divi_DCT_BackToTop_border_color' ) ?> !important;
		transition: all .1s ease-in-out; 
		box-shadow: 0 0 20px <?php echo et_get_option( 'divi_DCT_BackToTop_hover_box_shadow_color' ) ?>  !important;
		
	}
	
	.et_pb_scroll_top.et-visible {
		-webkit-animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
		-moz-animation: fadeInBottom 2s 1 cubic-bezier(.50,0,.160,1);
		-o-animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
		animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
	}
	.et_pb_scroll_top.et-hidden {
		opacity: 0;
		-webkit-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-moz-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		-o-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
		animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
	}
	/* Scroll Top Button */
	@media (max-width: 980px){.et_pb_scroll_top::after{content: "";}
	.et_pb_scroll_top::before{font-size: 20px;margin-right: 0px;}
	.et_pb_scroll_top.et-pb-icon{padding: 0px 5px 10px;}
	}
/***********************Type 4****************************************/	
<?php }else if (et_get_option( 'divi_DCT_BackToTop_type' ) == 'four'){ ?> 			

.et_pb_scroll_top.et-pb-icon {
    right: 30px; /* space from right */
    bottom: 30px; /* space from bottom */
    padding: 8px; /*padding size*/
    border-radius: 30px; /* make the circle */
    background: rgb(0, 101, 253) /* button color */; 
    font-size: 32px; /* icon size */
    transition: all .1s ease-in-out; /* add transition */
}
/* Button Appearance on Mouseover */
.et_pb_scroll_top.et-pb-icon:hover {
    bottom: 32px /* space from bottom */;
    background: rgb(7, 69, 160) /*button hover color*/; 
    transition: all .1s ease-in-out; /*add transition*/
    box-shadow: 0 10px 15px #162c4e4a; /*box shadow on hover*/
}
/* Animation tweaks */
.et_pb_scroll_top.et-visible {
    -webkit-animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
    -moz-animation: fadeInBottom 2s 1 cubic-bezier(.50,0,.160,1);
    -o-animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
    animation: fadeInBottom 1s 1 cubic-bezier(.50,0,.160,1);
}
.et_pb_scroll_top.et-hidden {
    opacity: 0;
    -webkit-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
    -moz-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
    -o-animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
    animation: fadeOutBottom 1s 1 cubic-bezier(.77,0,.175,1);
}

.et_pb_scroll_top:before {
		content: "\21";/*select icon*/
		font-family: ETmodules !important;
		color:#fff;
		position: absolute;
right: 4px;
	} 
	
.et_pb_scroll_top{
		right: 20px; /*right space*/
		bottom: 20px; /*bottom space*/
		border-radius: 20px;
		font-size: 15px !important;
		background: <?php echo et_get_option( 'divi_DCT_BackToTop_bg_color' ) ?>;/*button background color*/
		padding: 20px;/*space around the icon*/
		font-size: 24px;/*icon size*/
		z-index: 9999999;
		position: fixed;
		cursor: pointer;
		transition: all .1s ease-in-out; /*add transition*/
	}	
	
	
	.et_pb_scroll_top:after {
    content: "<?php echo et_get_option( 'divi_DCT_BackToTop_text' ) ?>";
    font-family: "Open Sans",Arial,sans-serif;
	color:#fff;
    
} 
 
 .et_pb_scroll_top.et-pb-icon:hover {
    background:<?php echo et_get_option( 'divi_DCT_BackToTop_bg_hover_oolor' ) ?>  !important;
	border:1px solid <?php echo et_get_option( 'divi_DCT_BackToTop_border_color' ) ?> !important;
    transition: all .1s ease-in-out; 
	box-shadow: 0 0 20px <?php echo et_get_option( 'divi_DCT_BackToTop_hover_box_shadow_color' ) ?>  !important;
	
}
 
 @media (max-width: 980px){.et_pb_scroll_top::after{content: "";}
.et_pb_scroll_top::before{font-size: 20px;margin-right: 6px;line-height: 0;}
.et_pb_scroll_top.et-pb-icon{padding: 0px 5px 10px;}
}
<?php } ?>

</style>