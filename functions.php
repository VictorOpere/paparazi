<?php 

/***
 * Functions.php file for our WordPress Theme
 * 
 * @package paparazi
 * @since 1.0.0 
 * 
 */


 /***
  * Table Of Contents:
  * Theme Support
  * Register Styles
  * Register Scripts
  *
  */


  /***
   * This sets up theme defaults and registers support for various WordPress features
   * 
   */


   function paparazi_theme_support()
   {
       # code...

    //    lets add theme support for the various post formats

    add_theme_support( 'post-formats',
    
        array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'

        )
    
   

    );


    // lets add support for post thumbnails alias featured images on posts and pages

    add_theme_support( 'post-thumbnails' );

    // add default posts posts and comments RSS feed links to the head

    add_theme_support( 'automatic-feed-links');


    // lets add theme support for menus
    add_theme_support( 'menus');

    
    // lets add theme support for custom background color

    add_theme_support( 'custom-background');

    // lets add theme support for title tag option
    add_theme_support( 'title-tag' );

    // lets add theme support for custom logo

    add_theme_support( 'custom-logo' );

    // lets add theme support for customize select refresh

    add_theme_support( 'customize-selective-refresh-widgets');

    // lets add theme support for custom headers

    add_theme_support( 'custom-header' );

    // enabling theme support for align and full align option for the block gutenberg editor

    add_theme_support( 'align-wide' );

    // switch default core markup for the search form, comment form and comments to output valid HTML5

    add_theme_support( 'html5',
    
        array(
            'search-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
    
        )

    );

    
   }

   add_action( 'init', 'paparazi_theme_support');



   function paparazi_theme_scripts()
   {
       # code...
    //    lets add our css to our theme

    wp_enqueue_style( 'mypoppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mylora', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myabril', 'https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap', array(), '1.0.0', 'all' );


    wp_enqueue_style( 'myopenionic', get_template_directory_uri().'/css/open-iconic-bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myanimate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myowl', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mythemeowl', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mymagnific', get_template_directory_uri().'/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myaos', get_template_directory_uri().'/css/aos.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myioni', get_template_directory_uri().'/css/ionicons.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mybtdtpckr', get_template_directory_uri().'/css/bootstrap-datepicker.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myjqtmpckr', get_template_directory_uri().'/css/jquery.timepicker.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myfltcon', get_template_directory_uri().'/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myicomoon', get_template_directory_uri().'/css/icomoon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mybase', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );
  


    // lets add the js to our theme
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'mypopper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'mybtjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myjqeas', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myjqway', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myjqstella', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myowljs', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myjqmagnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myaosjs', get_template_directory_uri().'/js/aos.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myjqanimate', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myscrollmax', get_template_directory_uri().'/js/scrollax.min.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'mymap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'myggmap', get_template_directory_uri().'/js/google-map.js', array('jquery'), '1.0.0', True);
    wp_enqueue_script( 'mymain', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', True);







   }

   add_action( 'wp_enqueue_scripts', 'paparazi_theme_scripts');



?>