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
  *Theme Support
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





?>