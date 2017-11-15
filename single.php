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
			<?php amp_title();
			global $redux_builder_amp;
			if(isset($redux_builder_amp['tech-excerpt']) && $redux_builder_amp['tech-excerpt']==1){ amp_excerpt();} ?>
		</div><!-- /.single-post-title -->
		<?php 
		global $redux_builder_amp;
		if(isset($redux_builder_amp['tech-author-box']) && $redux_builder_amp['tech-author-box']==1){?> 
		<div class="post-author-info">
			<?php 
			$args = array('avatar'=>true,
						  'avatar_size'=>40,
						  "author_description"=>false,
						  'author_prefix'=>'by',
						  'author_image_wrapper'=>'posted-author-image',
						  'author_wrapper_class'=>'posted-author-details',
						  'show_date'=>true,
						  'show_time'=>true
						);
			amp_author_box($args); 
			?>
		</div>
		<?php }?>
		<div class="single-content">
			<?php amp_content(); ?>
		</div><!-- /.single-post-content -->
		<?php 
				global $redux_builder_amp;
				if(isset($redux_builder_amp['tech-post-pagination']) && $redux_builder_amp['tech-post-pagination']==1){
					
				}?>
		<?php 
				global $redux_builder_amp;
				if(isset($redux_builder_amp['tech-taxonomy']) && $redux_builder_amp['tech-taxonomy']==1){?>
		
			<?php amp_categories_list();?>

			<?php amp_tags_list();?>
		
		<?php }?>
		<div class="single-rlp">
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
		<div class="cmts">
			<?php amp_comments();?>
		</div><!-- /.comments-part -->	
		<?php //amp_post_navigation();?>
	</div><!-- /.container -->
</div><!-- /.amp-single-page -->
<?php amp_footer()?>