<?php

/**
 * Initialize the meta boxes. See /option-tree/assets/theme-mode/demo-meta-boxes.php for reference
 *
 * @package cactus
 */
add_action( 'admin_init', 'videopro_meta_boxes' );

if ( ! function_exists( 'videopro_meta_boxes' ) ){
	function videopro_meta_boxes() {
		  $post_layout_meta = array('id'        => 'post_meta_box_layout',
			'title'     => esc_html__('Post Layout','17jbh'),
			'desc'      => '',
			'pages'     => array( 'post' ),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => array(
				array(
					  'id'          => 'main_navi_layout',
					  'label'       => esc_html__('Main Navigation Layout','17jbh'),
					  'desc'        => esc_html__('Choose layout for Main Navigation of this post. Select "Default" to use settings in Theme Options > Theme Layout > Main Navigation Layout','17jbh'),
					  'std'         => '',
					  'type'        => 'radio-image',
					  'choices'     => array(
						  array(
							'value'       => '',
							'label'       => esc_html__('Default','17jbh'),
							'src'         => get_template_directory_uri() . '/images/theme-options/default-layout.jpg'
						  ),
						  array(
							'value'       => 'separeted',
							'label'       => esc_html__('Separated', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout2.png'
						  ),
						  array(
							'value'       => 'inline',
							'label'       => esc_html__('Inline', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout1.png'
						  ),
					  )
				),
				array(
		  			  'id'          => 'main_navi_width',
		  			  'label'       => esc_html__('Main Navigation Width','17jbh'),
		  			  'desc'        => esc_html__('Choose Main Navigation Width.  Select "Default" to use settings in Theme Options > Theme Layout > Main Navigation Width','17jbh'),
		  			  'std'         => '',
		  			  'type'        => 'select',
					  'condition'   => 'main_layout:not(boxed)',
		  			  'choices'     => array(
		  			    array(
		  			      'value'       => '',
		  			      'label'       => esc_html__( 'Default', '17jbh' ),
		  			      'src'         => ''
		  			    ),
		  			  	array(
		  			      'value'       => 'full',
		  			      'label'       => esc_html__( 'Full-width ', '17jbh' ),
		  			      'src'         => ''
		  			    ),
						array(
		  			      'value'       => 'inbox',
		  			      'label'       => esc_html__( 'Inbox', '17jbh' ),
		  			      'src'         => ''
		  			    )
		  			  )
		  		),			
				array(
		  			  'id'          => 'main_layout',
		  			  'label'       => esc_html__('Layout','17jbh'),
		  			  'desc'        => esc_html__('Choose layout for this post. Select "Default" to use settings in Theme Options > Theme Layout > Theme Layout','17jbh'),
		  			  'std'         => '',
		  			  'type'        => 'radio-image',
		  			  'choices'     => array(
		  			  	array(
							'value'       => '',
							'label'       => esc_html__('Default','17jbh'),
							'src'         => get_template_directory_uri() . '/images/theme-options/default-layout.jpg'
						  ),
						  array(
							'value'       => 'fullwidth',
							'label'       => esc_html__('Full-width','17jbh'),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-01-fullwidth.jpg'
						  ),
						  array(
							'value'       => 'boxed',
							'label'       => esc_html__('Inbox','17jbh'),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-02-boxed.jpg'
						  ),
						  array(
							'value'       => 'wide',
							'label'       => esc_html__('Wide','17jbh'),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-03-wide.jpg'
						  ),
		  			  )
		  		),
				array(
		  			  'id'          => 'post_sidebar',
		  			  'label'       => esc_html__('Sidebar','17jbh'),
		  			  'desc'        => esc_html__('Select "Default" to use settings in Theme Options','17jbh'),
		  			  'std'         => '',
		  			  'type'        => 'select',
		  			  'choices'     => array(
		  			  	array(
							'value'       => 0,
							'label'       => esc_html__('Default','17jbh'),
							'src'         => ''
						  ),
						  array(
							'value'       => 'both',
							'label'       => esc_html__('Both sidebar','17jbh'),
							'src'         => ''
						  ),
						  array(
							'value'       => 'left',
							'label'       => esc_html__('Left','17jbh'),
							'src'         => ''
						  ),
						  array(
							'value'       => 'right',
							'label'       => esc_html__('Right','17jbh'),
							'src'         => ''
						  ),
						  array(
							'value'       => 'full',
							'label'       => esc_html__('Hidden','17jbh'),
							'src'         => ''
						  )
		  			  )
		  		),
				array(
		  			  'id'          => 'post_layout',
		  			  'label'       => esc_html__('Feature Image-Gallery Position','17jbh'),
		  			  'desc'        => esc_html__('Select "Default" to use settings in Theme Options > Single Post > Default Feature Image Position','17jbh'),
		  			  'std'         => '',
		  			  'type'        => 'select',
		  			  'choices'     => array(
		  			    array(
		  			      'value'       => '',
		  			      'label'       => esc_html__( 'Default', '17jbh' ),
		  			      'src'         => ''
		  			    ),
		  			  	array(
		  			      'value'       => '1',
		  			      'label'       => esc_html__( 'In body', '17jbh' ),
		  			      'src'         => ''
		  			    ),
						array(
		  			      'value'       => '2',
		  			      'label'       => esc_html__( 'In header', '17jbh' ),
		  			      'src'         => ''
		  			    )
		  			  )
		  		),
				array(
		  			  'id'          => 'post_video_layout',
		  			  'label'       => esc_html__('Video Player Position','17jbh'),
		  			  'desc'        => esc_html__('Select "Default" to use settings in Theme Options > Single Post > Default Video Player Position','17jbh'),
		  			  'std'         => '',
		  			  'type'        => 'select',
		  			  'choices'     => array(
		  			    array(
		  			      'value'       => '',
		  			      'label'       => esc_html__( 'Default', '17jbh' ),
		  			      'src'         => get_template_directory_uri() . '/images/theme-options/default.png'
		  			    ),
		  			  	array(
		  			      'value'       => '1',
		  			      'label'       => esc_html__( 'In body ', '17jbh' ),
		  			      'src'         => get_template_directory_uri() . '/images/theme-options/Video-post-01.png'
		  			    ),
						array(
		  			      'value'       => '2',
		  			      'label'       => esc_html__( 'In header', '17jbh' ),
		  			      'src'         => get_template_directory_uri() . '/images/theme-options/Video-post-03.png'
		  			    )
		  			  )
		  		),
				array(
					'id'          => 'enable_live_video',
					'label'       => esc_html__('Live Video','17jbh'),
					'desc'        => esc_html__('Turn on Live Video layout.','17jbh'),
					'std'         => 'off',
					'type'        => 'on-off',
					'condition'   => 'post_video_layout:is(1)',
					'operator'    => 'and'
				),
			 ));
			 if(class_exists('Cactus_video')){
				$post_layout_meta['fields'][] = array(
					'id'          => 'video_appearance_bg',
					'label'       => esc_html__('Player Background', '17jbh' ),
					'desc'        => '',
					'std'         => '',
					'type'        => 'background',
					'class'       => '',
					'choices'     => array()
				);
			}

	  ot_register_meta_box( $post_layout_meta );
	}
}

/*Page Metabox*/
add_action( 'admin_init', 'videopro_page_meta_boxes' );
if ( ! function_exists( 'videopro_page_meta_boxes' ) ){
	function videopro_page_meta_boxes() {
		$page_meta_boxes = array();

		$page_meta_boxes = array(
			'id'        => 'post_meta_box',
			'title'     => esc_html__('Layout settings','17jbh'),
			'desc'      => '',
			'pages'     => array( 'page' ),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => array(
				array(
				  'id'          => 'page_sidebar',
				  'label'       => esc_html__('Sidebar','17jbh'),
				  'desc'        => esc_html__('Select "Default" to use settings in Theme Options','17jbh'),
				  'std'         => '',
				  'type'        => 'select',
				  'class'       => '',
				  'choices'     => array(
					  array(
						'value'       => 0,
						'label'       => esc_html__('Default','17jbh'),
						'src'         => ''
					  ),
					  array(
						'value'       => 'left',
						'label'       => esc_html__('Left','17jbh'),
						'src'         => ''
					  ),
					  array(
						'value'       => 'right',
						'label'       => esc_html__('Right','17jbh'),
						'src'         => ''
					  ),
					  array(
						'value'       => 'both',
						'label'       => esc_html__('Left & Right','17jbh'),
						'src'         => ''
					  ),
					  array(
						'value'       => 'full',
						'label'       => esc_html__('Hidden','17jbh'),
						'src'         => ''
					  )
				   )
				),
			)
		);
		ot_register_meta_box( $page_meta_boxes );

	  $front_page = array(
			'id'        => 'front_page',
			'title'     => esc_html__('Front Page Settings','17jbh'),
			'desc'      => esc_html__('These settings apply for Front Page template','17jbh'),
			'pages'     => array( 'page' ),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => array(
				array(
					'id'          => 'front_page_logo',
					'label'       => esc_html__('Site Logo', '17jbh' ),
					'desc'        => esc_html__('Upload your logo image','17jbh'),
					'std'         => '',
					'type'        => 'upload',
					'class'       => '',
					'choices'     => array()
				),
				array(
					'id'          => 'front_page_logo_retina',
					'label'       => esc_html__('Site Logo (Retina)', '17jbh' ),
					'desc'        => esc_html__('Retina logo should be two time bigger than the custom logo. Retina Logo is optional, use this setting if you want to strictly support retina devices.','17jbh'),
					'std'         => '',
					'type'        => 'upload',
					'class'       => '',
					'choices'     => array()
				),
				array(
					'id'          => 'front_page_logo_sticky',
					'label'       => esc_html__('Logo Image For Sticky Menu', '17jbh' ),
					'desc'        => esc_html__('Upload your logo image for sticky menu','17jbh'),
					'std'         => '',
					'type'        => 'upload',
					'class'       => '',
					'choices'     => array()
				),
				array(
					'id'          => 'front_page_bg',
					'label'       => esc_html__('Site Background', '17jbh' ),
					'desc'        => esc_html__('Set background for this page','17jbh'),
					'std'         => '',
					'type'        => 'background',
					'class'       => '',
					'choices'     => array()
				),
				array(
					  'id'          => 'main_layout',
					  'label'       => esc_html__('Theme Layout','17jbh'),
					  'desc'        => esc_html__('Select Theme Layout','17jbh'),
					  'std'         => 'fullwidth',
					  'type'        => 'radio-image',
					  'choices'     => array(
						  array(
							'value'       => 'fullwidth',
							'label'       => esc_html__('Full-width', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-01-fullwidth.jpg'
						  ),
						  array(
							'value'       => 'boxed',
							'label'       => esc_html__('Inbox', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-02-boxed.jpg'
						  ),
						  array(
							'value'       => 'wide',
							'label'       => esc_html__('Wide', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/theme-layout-03-wide.jpg'
						  ),
					  )
				),
                
                array(
					  'id'          => 'body_schema',
					  'label'       => esc_html__('Body Background Schema','17jbh'),
					  'desc'        => esc_html__('Select Body Background Schema','17jbh'),
					  'std'         => '',
					  'type'        => 'select',
					  'choices'     => array(
                        array(
							'value'       => '',
							'label'       => esc_html__('Default', '17jbh' )),
						  array(
							'value'       => 'dark',
							'label'       => esc_html__('Dark', '17jbh' ),
							'src'         => ''
						  ),
						  array(
							'value'       => 'light',
							'label'       => esc_html__('Light', '17jbh' ),
							'src'         => ''
						  )
					  )
				),

				array(
					  'id'          => 'header_schema',
					  'label'       => esc_html__('Top Header Background Schema','17jbh'),
					  'desc'        => esc_html__('Select Top Header Background Schema','17jbh'),
					  'std'         => 'dark',
					  'type'        => 'select',
					  'choices'     => array(
						  array(
							'value'       => 'dark',
							'label'       => esc_html__('Dark', '17jbh' ),
							'src'         => ''
						  ),
						  array(
							'value'       => 'light',
							'label'       => esc_html__('Light', '17jbh' ),
							'src'         => ''
						  ),
					  )
				),
				array(
					'id'          => 'header_background',
					'label'       => esc_html__('Header Background', '17jbh' ),
					'desc'        => esc_html__('Set header background','17jbh'),
					'std'         => '',
					'type'        => 'background',
					'class'       => '',
					'choices'     => array()
				),
				array(
					  'id'          => 'main_navi_layout',
					  'label'       => esc_html__('Main Navigation Layout','17jbh'),
					  'desc'        => esc_html__('Select Navigation Layout','17jbh'),
					  'std'         => 'separeted',
					  'type'        => 'radio-image',
					  'choices'     => array(
						  array(
							'value'       => 'separeted',
							'label'       => esc_html__('Separated', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout2.png'
						  ),
						  array(
							'value'       => 'inline',
							'label'       => esc_html__('Inline', '17jbh' ),
							'src'         => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout1.png'
						  ),
					  )
				),
				array(
		  			  'id'          => 'main_navi_width',
		  			  'label'       => esc_html__('Main Navigation Width','17jbh'),
		  			  'desc'        => esc_html__('Choose Main Navigation Width.','17jbh'),
		  			  'std'         => 'full',
		  			  'type'        => 'select',
					  'condition'   => 'main_layout:not(boxed)',
		  			  'choices'     => array(
		  			  	array(
		  			      'value'       => 'full',
		  			      'label'       => esc_html__( 'Full-width ', '17jbh' ),
		  			      'src'         => ''
		  			    ),
						array(
		  			      'value'       => 'inbox',
		  			      'label'       => esc_html__( 'Inbox', '17jbh' ),
		  			      'src'         => ''
		  			    )
		  			  )
		  		),		
				array(
					  'id'          => 'main_navi_schema',
					  'label'       => esc_html__('Main Navigation Schema','17jbh'),
					  'desc'        => esc_html__('Select background schema for Main Navigation','17jbh'),
					  'std'         => 'dark',
					  'type'        => 'select',
					  'condition'   => 'main_navi_layout:is(separeted)',
					  'choices'     => array(
						  array(
							'value'       => 'dark',
							'label'       => esc_html__('Dark', '17jbh' ),
							'src'         => ''
						  ),
						  array(
							'value'       => 'light',
							'label'       => esc_html__('Light', '17jbh' ),
							'src'         => ''
						  ),
					  )
				),				
			 )
			);
	  ot_register_meta_box( $front_page );
      
      $authors_listing_meta_fields = array(
				array(
					'id'          => 'authors_per_page',
					'label'       => esc_html__('Number of Items Per Page', '17jbh' ),
					'desc'        => esc_html__('Enter number of Items Per Page. Leave empty or use 0 to list all users','17jbh'),
					'std'         => '0',
					'type'        => 'text'
				),
                array(
					'id'          => 'authors_role',
					'label'       => esc_html__('User Role', '17jbh' ),
					'desc'        => esc_html__('Role of users to query','17jbh'),
					'std'         => 'author',
					'type'        => 'select',
                    'choices'     => array(
						  array(
							'value'       => 'author',
							'label'       => esc_html__('Only Authors', '17jbh' )
						  ),
                          array(
							'value'       => 'subscriber',
							'label'       => esc_html__('Only Subscribers', '17jbh' )
						  ),
						  array(
							'value'       => 'author_subscriber',
							'label'       => esc_html__('Authors and Subscribers', '17jbh' )
						  )
					  )
                    ),
                array(
					'id'          => 'authors_orderby',
					'label'       => esc_html__('Order By', '17jbh' ),
					'desc'        => esc_html__('How to order items','17jbh'),
					'std'         => 'display_name',
					'type'        => 'select',
                    'choices'     => array(
						  array(
							'value'       => 'display_name',
							'label'       => esc_html__('Display Name', '17jbh' )
						  ),
                          array(
							'value'       => 'post_count',
							'label'       => esc_html__('Posts Count', '17jbh' )
						  )
					  )
                    ),
				);
                
        if(class_exists('MS_Factory')){
            $authors_listing_meta_fields[] = array(
                                            'id'          => 'membership_id',
                                            'label'       => esc_html__('Filter by Membership', '17jbh' ),
                                            'desc'        => esc_html__('Enter ID of membership to filter authors. "User Role" and "Order By" options will not work.','17jbh'),
                                            'std'         => '',
                                            'type'        => 'text'
                                        );
        }
                
        $authors_page = array(
			'id'        => 'authors_page',
			'title'     => esc_html__('Authors Page Settings','17jbh'),
			'desc'      => esc_html__('These settings apply for Authors Page template','17jbh'),
			'pages'     => array( 'page' ),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => $authors_listing_meta_fields);
            
          ot_register_meta_box($authors_page);      
	}
}