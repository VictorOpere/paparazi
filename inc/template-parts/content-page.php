<div class="col-md-6 d-flex">
	<div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url(<?php the_post_thumbnail_url();?>);">
	</div>
</div>
<div class="col-md-6 d-flex align-items-center">
    <div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
		<h2 class="mb-4"><?php the_title();?></h2>
        <?php the_content();?>
</div>
</div>