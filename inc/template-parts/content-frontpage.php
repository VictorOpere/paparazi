<div class="col-md-12">
	<div class="blog-entry ftco-animate d-md-flex">
		<a href="<?php the_permalink();?>" class="img img-2" style="background-image: url(<?php the_post_thumbnail_url();?>);"></a>
			<div class="text text-2 pl-md-4">
				<h3 class="mb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				   <div class="meta-wrap">
						<p class="meta">
				            <span><i class="icon-calendar mr-2"></i><?php the_date();?></span>
				            <span><i class="icon-folder-o mr-2"></i>Travel</span>
				            <span><i class="icon-comment2 mr-2"></i><?php echo esc_html(get_comments_number()).' Commments';?></span>
				        </p>
			    	</div>
				<p class="mb-4"><?php the_excerpt();?></p>
				<p><a href="<?php the_permalink();?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
			</div>
	</div>
</div>