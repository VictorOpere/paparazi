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



?>
    
