<?php amp_header(); ?>
<div class="amp-single-page">
	<div class="single-featured-image">
		<?php amp_featured_image();?>
	</div><!-- /.single-featured-image -->
	<div class="container">
		<div class="single-post-title">
			<?php amp_title(); ?>
			<?php amp_excerpt(); ?>
		</div><!-- /.single-post-title -->
		<?php 
		$args = array('avatar_width'=>40,
					  'avatar_height'=>40,
					  "author_description"=>false,
					  'show_author_image'=>true,
					  'author_image_wrapper'=>'posted-author-image',
					  'author_wrapper_class'=>'posted-author-details',
					);
		amp_author_box($args); 
		?>
		<div class="single-post-content">
			<?php amp_content(); ?>
		</div><!-- /.single-post-content -->
		
		<div class="single-post-category-list">
			<?php amp_categories_list();?>
		</div><!-- /.single-post-category-list -->
		<div class="single-post-tags-list">
		<?php amp_tags_list();?>
		</div><!-- /.single-post-tags-list -->
		<div class="comments-part">
			<?php amp_comments();?>
		</div><!-- /.comments-part -->
			<?php amp_post_navigation();?>
		<div class="single-related-posts">
			<?php 
			$argsRelatedPosts = array(
									'show_excerpt'=>false,
									'show_author' => true,
									'author_args' => array(
													  "author_description"=>false,
													  'show_author_image'=>false,
													  'author_wrapper_class'=>'posted-author-details',
													)
									);
			amp_related_posts($argsRelatedPosts); ?>
		</div><!-- /.related-posts -->
	</div><!-- /.container -->
</div><!-- /.amp-single-page -->
<?php amp_footer()?>