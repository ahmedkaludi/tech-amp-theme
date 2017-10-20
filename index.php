<?php amp_header(); ?>

<?php
if (get_query_var( 'paged' ) ) {
	    $paged = get_query_var('paged');
	} elseif ( get_query_var( 'page' ) ) {
	    $paged = get_query_var('page');
	} else {
	    $paged = 1;
	} 
if($paged<=1){
$args = array('post_to_show'=>1);
while(amp_loop('start',$args)): ?>
<div class="loop-post">
    <?php 
	//array('thumbnail', 'medium', 'medium_large', 'large');
	$args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'medium', 'responsive'=> true); ?>
	<div class="featured-image">
		<?php amp_loop_image($args); ?>
	</div><!-- /.featured-image -->
	<div class="featured-image-post-content">
		<?php amp_loop_category(); ?>
	    <?php amp_loop_title(); ?>
	    <div class="amp-author-info">
			<?php amp_loop_author('by'); ?>
		</div><!-- /. amp-author-info -->
	</div><!-- /.featured-image-post-content -->
</div>
<?php endwhile;  amp_loop('end');  
}  ?>


<div class="featured-small-posts">
	<?php 
	$args = array('offset'=>1);
	while(amp_loop('start',$args)): ?>
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
<?php amp_footer(); ?>