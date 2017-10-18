<?php while(amp_loop('start')): ?>
<div class="loop-post">
	<div class="featured-image">
    	<?php amp_loop_image(); ?>
    </div><!-- /featured-image -->
    <div class="featured-image-post-content">
    	<?php amp_loop_category(); ?>
   		<?php amp_loop_title(); ?>
   	</div><!-- /.amp-post-category -->
</div>
<?php endwhile; amp_loop('end');  ?>
<?php amp_pagination(); ?>