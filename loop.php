<div class="featured-sp">
	<?php amp_archive_title(); ?>
	<?php 
	$args = array();
	while(amp_loop('start')): ?>
	<div class="loop-post sp-list">
	    <?php 
		//array('thumbnail', 'medium', 'medium_large', 'large');
		$args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'thumbnail', 'responsive'=> true); ?>
		<div class="featured-img-sp">
			<?php amp_loop_image($args); ?>
		</div><!-- /.featured-image-small-posts -->
		<div class="featured-img-sp-cnt">
			<?php amp_loop_category(); ?>
		    <?php amp_loop_title(); ?>
				<?php 
					$args = array(
					"author_description"=>false,
					'show_author_image'=>false,
					);
				amp_loop_author($args); ?>
	    </div><!-- /.featured-image-small-post-content -->
	</div>
	<?php endwhile; amp_loop('end');  amp_pagination(); ?>
</div><!-- /.featured-small-posts -->
