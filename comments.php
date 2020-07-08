<?php 

/****
 * @package paparazi
 * This is the template file for our WordPress Theme
 * 
 */

 if ( post_password_required()) {

    return;
     # code...
 }

 ?>

<div class="pt-5 mt-5">


    <?php 
    
        if( have_comments()):
        // we have comments
        
    ?>

        <h3 class="mb-5 font-weight-bold">

            <?php 

                printf(
                    esc_html(  _nx('One Comment on &ldquo;%2$s&rdquo;','%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(),'comments title','paparazi')),
                    esc_html( number_format_i18n( get_comments_number() )),
                    esc_html( get_the_title() )
                );

            ?>

        </h3>


        <?php

            $args = array();

            wp_list_comments($args);

        ?>

        <?php 

            if( !comments_open() && get_comments_number()):
        ?>

            <p><?php esc_html_e( 'Comments are Closed', 'paparazi' );?></p>


        <?php 

            endif;

        ?>



        <?php comment_form();?>









    <?php 

        endif;

    ?>



</div>

