<?php amp_header(); ?>
<?php if (get_query_var( 'paged' ) ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var( 'page' ) ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
} ?>
<div class="cntr">
	<div class="featured-sp">
		<?php 
		$args = array();
		  if($paged<=1){
		  $args = array('offset'=>1);
		  }
		while(amp_loop('start',$args)): ?>
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
		<?php endwhile; amp_loop('end');  
				$args = array(
		         'previous_text'=> 'PREVIOUS',
		         'next_text' => 'NEXT'
		           );
		amp_pagination($args); ?>
	</div><!-- /.featured-small-posts -->
</div><!-- /.container -->
<?php amp_footer(); ?>