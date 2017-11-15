<?php amp_header(); ?>
<div class="amp-single">
	<div class="single-bg">
		<div class="amp-single-featured-img">
			<?php
			 if ( has_post_thumbnail()): ?>
				<div class="single-featured-img">
					<?php amp_featured_image(); ?>
				</div><!-- /.single-featured-image -->
			<?php endif; ?>
		</div>
	</div><!-- /.single-background -->
	<div class="cntr">
		<div class="single-title">
			<?php amp_title(); ?>
		</div><!-- /.single-post-title -->
		<div class="single-content">
			<?php amp_content(); ?>
		</div><!-- /.single-post-content -->
		<div class="cmts">
			<?php amp_comments();?>
		</div><!-- /.comments-part -->	
		<?php //amp_post_navigation();?>
	</div><!-- /.container -->
</div><!-- /.amp-single-page -->
<?php amp_footer()?>