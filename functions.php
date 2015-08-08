<?php
/* CCJ Child Theme Functions File */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/* To replace the login Logo */
function my_login_logo() { ?>
    <style type="text/css">
               
		#login > h1 > a { width: 320px; height: 326px; }
        body.login #login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/sunnybiskits-login-image_320x326.png);  
			background-size: 320px 326px;
			background-repeat: no-repeat;
			padding-bottom: 10px;
        }
		
		.wp-core-ui .button-primary {
			background: none repeat scroll 0 0 #b2b2b2;
			border-color: #656565;
			box-shadow: 0 1px 0 rgba(101, 101, 101, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
			color: #000000;
		}
		
		.wp-core-ui .button-primary:link {
			background: none repeat scroll 0 0 #b2b2b2;
			border-color: #656565;
			box-shadow: 0 1px 0 rgba(101, 101, 101, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
			color: #000000;
		}
		
		
		.wp-core-ui .button-primary:visited {
			background: none repeat scroll 0 0 #b2b2b2;
			border-color: #656565;
			box-shadow: 0 1px 0 rgba(101, 101, 101, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
			color: #000000;
		}
		
		
		.wp-core-ui .button-primary:hover {
			background: none repeat scroll 0 0 #656565;
			border-color: #000000;
			box-shadow: 0 1px 0 rgba(178, 178, 178, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
			color: #F9A406;		
		}
		
		.wp-core-ui .button-primary:active {
			background: none repeat scroll 0 0 #656565;
			border-color: #000000;
			box-shadow: 0 1px 0 rgba(178, 178, 178, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
			color: #F9A406;		
		}
		
		
    </style>
<?php }

	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	 
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );

	function my_login_logo_url_title() {
		return 'SunnysBiskits';
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );


	/* ROMOVES THE WORDPRESS VERSION NUMBER FROM SOURCE CODE */
	remove_action('wp_head', 'wp_generator'); 
	
	
?>