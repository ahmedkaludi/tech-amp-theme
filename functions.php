<?php 
// Loading the Components
//Search
add_amp_theme_support('AMP-search');
//Logo
add_amp_theme_support('AMP-logo');
//Social Icons
add_amp_theme_support('AMP-social-icons');
//Menu
add_amp_theme_support('AMP-menu');
//Call Now
add_amp_theme_support('AMP-call-now');
//Sidebar
add_amp_theme_support('AMP-sidebar');
// Featured Image
add_amp_theme_support('AMP-featured-image');
//Author box
add_amp_theme_support('AMP-author-box');
//Loop
add_amp_theme_support('AMP-loop');
// Categories and Tags list
add_amp_theme_support('AMP-categories-tags');
// Comments
add_amp_theme_support('AMP-comments');
//Post Navigation
add_amp_theme_support('AMP-post-navigation');
// Related Posts
add_amp_theme_support('AMP-related-posts');
// Post Pagination
add_amp_theme_support('AMP-post-pagination');

function headerbody_classes(){
if (get_query_var( 'paged' ) ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var( 'page' ) ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
} 
if( $paged ==1 && (is_home() || is_front_page()) ) {
    $args = array('post_to_show'=>1);
        while(amp_loop('start',$args)): 
            if(! has_post_thumbnail() ){
            add_filter("ampforwp_body_class",'my_custom_class_withoutimage');
            }
         endwhile;  amp_loop('end');  
        amp_reset_loop();
}
if( $paged >1 && is_home() || is_front_page()){
    add_filter("ampforwp_body_class",'my_custom_class_next_pages');
}
if(is_search()){
add_filter("ampforwp_body_class",'my_custom_class_search');
}
if(is_single()){
     if(! has_post_thumbnail() ){
        add_filter("ampforwp_body_class",'my_custom_class_single_img');
    }
}

}
function my_custom_class_next_pages($previousClaases){

    $previousClaases[] = 'home_newpage';
    return  $previousClaases;
}
function my_custom_class_search($previousClaases){
    $previousClaases[] = 'search_page';
    return  $previousClaases;
}
function my_custom_class_single_img($previousClaases){
    $previousClaases[] = 'without_image';
    return  $previousClaases;
}
function my_custom_class_withoutimage($previousClaases){
    $previousClaases[] = 'without_image';
    return  $previousClaases;
}

amp_font('https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600|Source+Sans+Pro:400,700|Open+Sans:300,400,600,700');
