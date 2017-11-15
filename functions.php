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


if ( empty( get_post_thumbnail_id(get_the_ID() ) ) ){
    add_filter("ampforwp_body_class",'my_custom_class_withoutimage');
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
if(ampforwp_is_front_page()){
    add_filter("ampforwp_body_class",'my_custom_class_single_frontpage');
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

function my_custom_class_single_frontpage($previousClaases){
    $previousClaases[] = 'blog_frontpage';
    return  $previousClaases;
}

