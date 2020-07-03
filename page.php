<?php get_header();?>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	    	<div class="container-fluid px-0">
	    		<div class="row d-flex">
	    			
                    
						<?php if ( have_posts()):?>

                            <?php while (have_posts()) : the_post();?>

                                    <?php get_template_part( '/inc/template-parts/content-page', get_post_format());?>

                            <?php endwhile;?>

                        <?php endif;?>

	        </div>
	    	</div>
</section>

<?php get_footer();?>

