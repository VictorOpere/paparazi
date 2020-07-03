<?php 

/***
 * Header file for our WordPress Theme
 * 
 * @package paparazi
 * @since 1.0.0 
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head();?>

</head>
<body <?php body_class();?>>

<?php 

/****
 * For compability with WordPress 5.2.0 and onwards
 */


if (!function_exists('wp_body_open')) {
    # code...
    wp_body_open();

}


?>

<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<?php
				
					wp_nav_menu( [

						'menu' => 'primary_menu',
						'theme_location' => 'primary_menu',
						'container'=> '',
						'container_id'=>'',
						'container_class'=>'',
						'menu_id'=>false,
						'menu_class'=>'',
						'depth' => '',
						'fallback_cb'=>'',
						'walker'=>'',


					] );

				?>
			</nav>

			<div class="colorlib-footer">
				<div id="colorlib-logo" class="mb-4">
					<?php

						if ( function_exists('the_custom_logo')) {
							# code...
							the_custom_logo( );
						}

					?>
				</div>
				<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<?php echo esc_html( date('Y') );?> All rights reserved | Developed By <a href="https://karavic.com">Certified Vic</a>  | FrontEnd made By <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
<div id="colorlib-main">
    
