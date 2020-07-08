<?php get_header();?>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-8 px-md-5 py-5">
	    				<div class="row pt-md-4">
	    					
						
						<?php if ( have_posts()):?>

							<?php while (have_posts()) : the_post();?>

									<?php get_template_part( '/inc/template-parts/content-single', get_post_format());?>

									<?php if( comments_open()):?>

											<?php comments_template();?>

									<?php endif;?>

							<?php endwhile;?>

						<?php endif;?>

			    		</div><!-- END-->
			    	</div>
	    			<div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
						<?php get_sidebar('primary');?>
	          		</div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>

        
<?php get_footer();?>