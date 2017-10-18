<?php amp_header(); ?>
<div class="single-featured-image-post">
	<div class="single-featured-image">
		<?php amp_featured_image();?>
	</div><!-- /.single-featured-image -->
	<div class="single-post-title">
		<?php amp_title(); ?>
	</div><!-- /.single-post-title -->
</div><!-- /.single-featured-image-post -->
<div class="single-post-content">
	<?php amp_content(); ?>
</div><!-- /.single-post-content -->
<div class="post-author">
	<?php amp_author_box(); ?>
</div><!-- /.post-author -->
<div class="single-post-category-list">
	<?php amp_categories_list();?>
</div><!-- /.single-post-category-list -->
<?php amp_tags_list();?>
<?php amp_comments();?>
<?php amp_post_navigation();?>
<?php amp_related_posts(); ?>
<?php amp_footer()?>