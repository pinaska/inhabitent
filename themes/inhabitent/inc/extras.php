<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//add here the code for the custom login page for dashboard

function inhabitent_dynamic_css(){
	//make it is the baout page that loaded

	if (! is_page_template('page-templates/about.php')){
		return;
	}

	//get our backgroudn image from our custom field
	$image = CFS()->get('hero_image');

	//if we don't ahce an image in the field, return

	if (! $image){
		return;
	}

	//add our custom css
	$hero_css=" 
.entry-header{

	background:linear-gradient(to bottom, rgba(0,0,0,0.4)0%,rgba(0,0,0,0.4)100% ),
	url({$image}) no-repeat center bottom;
	background-size:cover, cover;
}";
	wp_add_inline_style( 'red-starter-style', $hero_css);
}



add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');
/**
 * 
 * login_head (action)
 * login_headerurl (filter)
 * login_headertitle (filter)
 * 
 */
add_action( 'login_head', 'inhabitent_login_logo');
function inhabitent_login_logo(){
	echo '<style>
	#login h1 a{
		background: url(' . get_template_directory_uri() .  '/img/inhabitent-logo-text-dark.svg) no-repeat !important;
		background-size: 300px 53px !important;
		width: 300px !important;
		height:53px !important;
	}
	#login .button.button-primary{
		background-color: #248A83;
	}
	</style>
	';
}


 add_filter( 'login_headerurl', 'inhabitent_login_logo_url');
 function inhabitent_login_logo_url($url){
	 return home_url();
 }

 add_filter( 'login_headertitle', 'inhabitent_login_title');
 function inhabitent_login_title(){
	 return 'inhabitent';
 }

 