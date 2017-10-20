<?php amp_header(); ?>
<div class="featured-image-big-post">
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
	<header class="header container">
	    <div class="header-part">
	        <div class="left-nav">
	           <?php amp_sidebar(['action'=>'open-button']); ?>
	        </div><!-- /.left-nav -->
	        <div class="logo-amp">
	            <?php amp_logo(); ?>
	        </div><!-- /.logo-amp -->
	        <div class="right-search">
	            <a class="lightbox" href="#goofy">
	               <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ1MSA0NTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ1MSA0NTE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQ3LjA1LDQyOGwtMTA5LjYtMTA5LjZjMjkuNC0zMy44LDQ3LjItNzcuOSw0Ny4yLTEyNi4xQzM4NC42NSw4Ni4yLDI5OC4zNSwwLDE5Mi4zNSwwQzg2LjI1LDAsMC4wNSw4Ni4zLDAuMDUsMTkyLjMgICBzODYuMywxOTIuMywxOTIuMywxOTIuM2M0OC4yLDAsOTIuMy0xNy44LDEyNi4xLTQ3LjJMNDI4LjA1LDQ0N2MyLjYsMi42LDYuMSw0LDkuNSw0czYuOS0xLjMsOS41LTQgICBDNDUyLjI1LDQ0MS44LDQ1Mi4yNSw0MzMuMiw0NDcuMDUsNDI4eiBNMjYuOTUsMTkyLjNjMC05MS4yLDc0LjItMTY1LjMsMTY1LjMtMTY1LjNjOTEuMiwwLDE2NS4zLDc0LjIsMTY1LjMsMTY1LjMgICBzLTc0LjEsMTY1LjQtMTY1LjMsMTY1LjRDMTAxLjE1LDM1Ny43LDI2Ljk1LDI4My41LDI2Ljk1LDE5Mi4zeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
	            </a>
	            <div class="light-box-button"> 
	                <div class="lightbox-target" id="goofy">
	                   <?php amp_search();?>
	                   <a class="lightbox-close" href="#"></a>
	                </div> 
	            </div>
	        </div><!-- /.search -->
	        
	        <div class="clearfix"></div>
	    </div>
	</header>

	<div class="amp-menu-sidebar">
	    <?php amp_sidebar(['action'=>'start',
	        'id'=>'sidebar',
	        'layout'=>'nodisplay',
	        'side'=>'right'
	    ] ); ?>
	    <div class="amp-close-btn">
	        <?php amp_sidebar(['action'=>'close-button']); ?>
	    </div>
	    <div class="amp-main-menu">
	        <?php amp_menu(); ?>
	    </div><!-- /.amp-menu -->
	    <?php amp_sidebar(['action'=>'end']); ?>
	</div>
	<?php endwhile;  amp_loop('end');  
	amp_reset_loop();
	}  ?>
</div><!-- /. featured-big-image -->

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