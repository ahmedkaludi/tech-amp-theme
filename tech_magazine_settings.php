<?php
if ( ! function_exists( 'ampforwp_tech_theme_settings' ) ) {
	function ampforwp_tech_theme_settings($sections){
                
		$sections[] = array(
		      'title'      => __( 'Tech Magazine', 'amptechtheme' ),
		      'icon'       => 'el el-idea',
			  'id'         => 'ampforwp-tech-theme-subsection',
		      'desc'       => " ",
							);
        $sections[] = array(
              'title'      => __( 'Settings', 'amptechtheme' ),
              'desc'       => __( '', 'amptechtheme'),
              'id'         => 'ampforwp-tech-theme-settings',
              'subsection' => true,
              'fields'      => array(
                    //header section
                array(
                        'id'     => 'header',
                       'type'   => 'section',
                       'title'  => __('Header', 'amptechtheme'),
                       'indent' => true,
                ),
                array(
                        'id'    => 'header-type',
                       'title'  => __('Header Type', 'amptechtheme'),
                       'type'   => 'select',
                       'options'=> array(
                            '1' =>  'Header with Image',
                            '2' =>  'Header Bar'
                        ),
                       'default'=> '1',
                ),
                 //Color Scheme section
                array(
                      
                       'id'     => 'global-color-scheme',
                       'type'   => 'section',
                       'title'  => __('Color Scheme', 'amptechtheme'),
                       'indent' => true,
                ),
                array(
                        'id'        => 'tech-color-scheme',
                        'title'     => __('Global Color Scheme', 'amptechtheme'),
                        'subtitle'  => __('Choose the color for title, anchor link','amptechtheme'),
                        'type'      => 'color_rgba',
                        'default'   => array(
                             'color'     => '#ed1c24',
                         ),
                ),
                array(
                        'id'        => 'tech-taxonomy-color-scheme',
                        'title'     => __('Taxonomy Tags Color', 'amptechtheme'),
                        'subtitle'  => __('Choose the color for Category & Tags','amptechtheme'),
                        'type'      => 'color_rgba',
                        'default'   => array(
                             'color'     => '#ed1634',
                         ),
                ),

                //Single Options
                array(
                      
                       'id'     => 'tech-single',
                       'type'   => 'section',
                       'title'  => __('Single', 'amptechtheme'),
                       'indent' => true,
                ),
                array(
                        'id'    => 'tech-excerpt',
                        'type'  => 'switch',
                        'title' => __('Excerpt', 'amptechtheme'),
                        'subtitle'  => __('Enable to show excerpt', 'amptechtheme'),
                        'default'   => 1
                ),
                 array(
                        'id'    => 'tech-author-box',
                        'type'  => 'switch',
                        'title' => __('Author Box', 'amptechtheme'),
                        'subtitle'  => __('Switch to show/hide author box', 'amptechtheme'),
                        'default'   => 1
                ),
                  array(
                        'id'    => 'tech-post-pagination',
                        'type'  => 'switch',
                        'title' => __('Post Pagination', 'amptechtheme'),
                        'subtitle'  => __('Eswitch to show/hide Pagination', 'amptechtheme'),
                        'default'   => 1
                ),
                   array(
                        'id'    => 'tech-taxonomy',
                        'type'  => 'switch',
                        'title' => __('Taxonomy Tags', 'amptechtheme'),
                        'subtitle'  => __('switch to show/hide taxonomy tags', 'amptechtheme'),
                        'default'   => 1
                ),

            ),
          );

        return $sections;
    }
}
add_filter("redux/options/redux_builder_amp/sections", 'ampforwp_tech_theme_settings');