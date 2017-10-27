<?php 
headerbody_classes();
amp_header_core(); ?>
<div class="featured-image-wrapper">
<div class="without-image-bg">
 <header class="header container">
    <div class="header-part">
        <div class="left-nav">
           <?php amp_sidebar(['action'=>'open-button']); ?>
        </div><!-- /.left-nav -->
        <div class="logo-amp">
            <?php amp_logo(); ?>
        </div><!-- /.logo-amp -->
        <div class="right-search">
            <a class="lightbox" href="#ovelay">
                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU2Ljk2NiA1Ni45NjYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU2Ljk2NiA1Ni45NjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPHBhdGggZD0iTTU1LjE0Niw1MS44ODdMNDEuNTg4LDM3Ljc4NmMzLjQ4Ni00LjE0NCw1LjM5Ni05LjM1OCw1LjM5Ni0xNC43ODZjMC0xMi42ODItMTAuMzE4LTIzLTIzLTIzcy0yMywxMC4zMTgtMjMsMjMgIHMxMC4zMTgsMjMsMjMsMjNjNC43NjEsMCw5LjI5OC0xLjQzNiwxMy4xNzctNC4xNjJsMTMuNjYxLDE0LjIwOGMwLjU3MSwwLjU5MywxLjMzOSwwLjkyLDIuMTYyLDAuOTIgIGMwLjc3OSwwLDEuNTE4LTAuMjk3LDIuMDc5LTAuODM3QzU2LjI1NSw1NC45ODIsNTYuMjkzLDUzLjA4LDU1LjE0Niw1MS44ODd6IE0yMy45ODQsNmM5LjM3NCwwLDE3LDcuNjI2LDE3LDE3cy03LjYyNiwxNy0xNywxNyAgcy0xNy03LjYyNi0xNy0xN1MxNC42MSw2LDIzLjk4NCw2eiIgZmlsbD0iI0ZGRkZGRiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>                
            </a>
            <div class="light-box-button"> 
                <div class="lightbox-target" id="ovelay">
                   <?php amp_search();?>
                   <a class="lightbox-close" href="#"></a>
                </div> 
            </div>
        </div><!-- /.search -->
        
        <div class="clearfix"></div>
    </div>
</header>
</div><!-- /.without-image-bg -->

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

<?php
    if(is_home() || is_front_page()){
?>
<div class="home-background">
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
            $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'large', 'responsive'=> true); ?>
            <?php if ( has_post_thumbnail()): ?>
            <div class="featured-image">
                <?php amp_loop_image($args); ?>
            </div><!-- /.featured-image -->
            <div class="featured-image-post-content">
                <?php amp_loop_category(); ?>
                <?php amp_loop_title(); ?>
                    <?php 
                        $args = array(
                        "author_description"=>false,
                        'show_author_image'=>false,
                        );
                    amp_loop_author($args); ?>
            </div><!-- /.featured-image-post-content -->
            <?php else: ?>
            <div class="featured-without-image-post-content">
                <?php amp_loop_category(); ?>
                <?php amp_loop_title(); ?>
                    <?php 
                        $args = array(
                        "author_description"=>false,
                        'show_author_image'=>false,
                        );
                    amp_loop_author($args); ?>
            </div><!-- /.featured-image-post-content -->
            <?php endif; ?>
        </div>
    <?php endwhile;  amp_loop('end');  
        amp_reset_loop();
        }  ?>
    </div><!-- /.featured-image-big-post -->
</div><!-- /.home-background -->
<?php } ?>
</div><!-- /.featured-image-wrapper -->
<div class="content-wrapper">

