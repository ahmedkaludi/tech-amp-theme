<?php amp_header() ?>
<div class="amp-archive">
	<div class="container">
		<div class="featured-small-posts">
			<?php amp_archive_title(); ?>
			
			<?php 
			$args = array();
			while(amp_loop('start')): ?>
			<div class="loop-post small-post-list">
			    <?php 
				//array('thumbnail', 'medium', 'medium_large', 'large');
				$args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'thumbnail', 'responsive'=> true); ?>
				<div class="featured-image-small-posts">
					<?php amp_loop_image($args); ?>
				</div><!-- /.featured-image-small-posts -->
				<div class="featured-image-small-post-content">
					<?php amp_loop_category(); ?>
				    <?php amp_loop_title(); ?>
				    <div class="amp-author-info">
						<?php amp_loop_author(); ?>
					</div><!-- /.amp-author-info -->
			    </div><!-- /.featured-image-small-post-content -->
			</div>
			<?php endwhile; amp_loop('end');  amp_pagination(); ?>
		</div><!-- /.featured-small-posts -->
	</div><!-- /.container -->
</div><!-- /.amp-archive -->
<?php amp_footer()?>