<?php the_title( '<h1 class="mb-3">', '</h1>');?>
    <?php the_content();?>
		           
    <div class="tag-widget post-tag-container mb-5 mt-5">
		<div class="tagcloud">
            <?php the_tags();?>
		</div>
	</div>
		            
    <div class="about-author d-flex p-4 bg-light">
		<div class="bio mr-5">
		    <?php echo get_avatar( get_the_author_meta('email'), '100' );?>
		</div>
		<div class="desc">
		    <h3><?php the_author();?></h3>
		    <p><?php the_author_meta('description');?></p>
		</div>
	</div>		            