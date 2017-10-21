<?php amp_header(); ?>
<div class="amp-single-page">
	<div class="single-featured-image">
		<?php amp_featured_image();?>
	</div><!-- /.single-featured-image -->
	<div class="container">
		<div class="single-post-title">
			<?php amp_title(); ?>
			<?php amp_loop_excerpt(); ?>
		</div><!-- /.single-post-title -->
		<!-- <div class="posted-author">
			<div class="posted-author-image">
				<amp-img src="http://1.gravatar.com/avatar/460b181868292ed774cedb16924b2837?s=70&amp;d=mm&amp;r=g"  class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-layout" style="width: 40px; height: 40px; border-radius:50%;"></amp-img>
			</div><!-- /.posted-author-image -->	
			<!-- <div class="posted-author-details">
				<span class="author-name">by<a href="#">Raju Jeelaga</a></span>
				<span class="posted-time">Octember 19, 2017 4.00 AM PDT</span>
			</div><!-- /.posted-author-details -->
		<!-- </div> --> <!-- /.posted-author --> 

		<div class="posted-author">
			<div class="posted-author-image">
			<?php 
			$args = array('avatar_width'=>40,'avatar_height'=>40,"author_description"=>false);
   			amp_author_box('', $args); ?>
   			</div>
		</div><!-- /.post-author -->
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
			<?php amp_related_posts(); ?>
		</div><!-- /.related-posts -->
	</div><!-- /.container -->
</div><!-- /.amp-single-page -->
<?php amp_footer()?>