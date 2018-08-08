<?php
	/**
	 * cactus theme sample theme options file. This file is generated from Export feature in Option Tree.
	 *
	 * @package cactus
	 */

	/**
	 * Initialize the custom Theme Options.
	 */
	add_action( 'admin_init', 'custom_theme_options' );

	/**
	 * Build the custom settings & update OptionTree.
	 *
	 * @return    void
	 * @since     2.0
	 */
	function custom_theme_options() {

		/**
		 * Get a copy of the saved settings array.
		 */
		$saved_settings = get_option( ot_settings_id(), array() );

		/**
		 * Custom settings array that will eventually be
		 * passes to the OptionTree Settings API Class.
		 */
		$custom_settings = array(
			'contextual_help' => array(
				'content' => array(
					array(
						'id'      => 'general_help',
						'title'   => esc_html__( 'Misc', '17jbh' ),
						'content' => '<p>' . esc_html__( 'Help content goes here!', '17jbh' ) . '</p>'
					),
					array(
						'id'      => 'main_layout',
						'title'   => esc_html__( 'Main Layout', '17jbh' ),
						'content' => '<p>' . esc_html__( 'Help content goes here!', '17jbh' ) . '</p>'
					)
				),
				'misc'    => '<p>' . esc_html__( 'Sidebar content goes here!', '17jbh' ) . '</p>'
			),
			'sections'        => array(
				array(
					'id'    => 'general',
					'title' => esc_html__( 'General', '17jbh' )
				),
				array(
					'id'    => 'color_n_fonts',
					'title' => esc_html__( 'Color and Fonts', '17jbh' )
				),
				array(
					'id'    => 'theme_layout',
					'title' => esc_html__( 'Theme Layout', '17jbh' )
				),
				array(
					'id'    => 'blog',
					'title' => esc_html__( 'Archives', '17jbh' )
				),
				array(
					'id'    => 'single_post',
					'title' => esc_html__( 'Single Post', '17jbh' )
				),
				array(
					'id'    => 'single_page',
					'title' => esc_html__( 'Single page', '17jbh' )
				),
				array(
					'id'    => 'search',
					'title' => esc_html__( 'Search', '17jbh' )
				),
				array(
					'id'    => 'author',
					'title' => esc_html__( 'Author Page', '17jbh' )
				),
				array(
					'id'    => 'page_not_found',
					'title' => esc_html__( '404 - Page Not Found', '17jbh' )
				),
				array(
					'id'    => 'social_accounts',
					'title' => esc_html__( 'Social Accounts', '17jbh' )
				),
				array(
					'id'    => 'sharing_social',
					'title' => esc_html__( 'Social Sharing', '17jbh' )
				),
				array(
					'id'    => 'membership',
					'title' => esc_html__( 'Membership', '17jbh' )
				),
				array(
					'id'    => 'advertising',
					'title' => esc_html__( 'Advertising', '17jbh' )
				),
				array(
					'id'    => 'misc',
					'title' => esc_html__( 'Misc', '17jbh' ),
				)
			),
			'settings'        => array(
				array(
					'id'       => 'seo_meta_tags',
					'label'    => esc_html__( 'SEO - Echo Meta Tags', '17jbh' ),
					'desc'     => esc_html__( 'By default, The theme generates its own SEO meta tags (for example: Facebook Meta Tags). If you are using another SEO plugin like YOAST or a Facebook plugin, you can turn off this option', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'enable_breadcrumbs',
					'label'    => esc_html__( 'Breadcrumbs', '17jbh' ),
					'desc'     => esc_html__( 'Enable Breadcrumbs (Pathway)', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'enable_link_on_datetime',
					'label'    => esc_html__( 'Turn on/off Link on Date Time', '17jbh' ),
					'desc'     => '',
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'datetime_format',
					'label'    => esc_html__( 'DateTime Format', '17jbh' ),
					'desc'     => '',
					'std'      => 'default',
					'type'     => 'select',
					'section'  => 'general',
					'choices' => array(
						array(
							'value' => 'default',
							'label' => esc_html__( 'Site Setting', '17jbh' )
						),
						array(
							'value' => 'time_elapsed',
							'label' => esc_html__( 'Time Elapsed', '17jbh' )
						)
					)
				),
				array(
					'id'       => 'scroll_effect',
					'label'    => esc_html__( 'Scroll Effect', '17jbh' ),
					'desc'     => esc_html__( 'Enable Page Scroll effect', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'gototop',
					'label'    => esc_html__( 'Go To Top Button', '17jbh' ),
					'desc'     => esc_html__( 'Enable Go To Top Button', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'custom_css',
					'label'    => esc_html__( 'Custom CSS', '17jbh' ),
					'desc'     => esc_html__( 'Enter CSS code', '17jbh' ),
					'type'     => 'css',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'rtl',
					'label'    => esc_html__( 'RTL Mode', '17jbh' ),
					'desc'     => esc_html__( 'Support Right-to-Left language', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'lazyload',
					'label'    => esc_html__( 'LazyLoad Images', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'general',
					'operator' => 'and'
				),
				array(
					'id'       => 'copyright',
					'label'    => esc_html__( 'Copyright Text', '17jbh' ),
					'desc'     => esc_html__( 'Enter copyright text', '17jbh' ),
					'std'      => 'WordPress Theme by CactusThemes',
					'type'     => 'text',
					'section'  => 'general',
					'operator' => 'and'
				),

				// Color and font block
				array(
					'id'           => 'main_color',
					'label'        => esc_html__( 'Main Color 1', '17jbh' ),
					'desc'         => esc_html__( 'Choose main color 1 of theme', '17jbh' ),
					'std'          => '#d9251d',
					'type'         => 'colorpicker',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'       => 'main_color_2',
					'label'    => esc_html__( 'Main Color 2', '17jbh' ),
					'desc'     => esc_html__( 'Choose main color 2 of theme', '17jbh' ),
					'std'      => '#f5eb4e',
					'type'     => 'colorpicker',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'main_color_3',
					'label'    => esc_html__( 'Main Color 3', '17jbh' ),
					'desc'     => esc_html__( 'Choose main color 3 of theme', '17jbh' ),
					'std'      => '#19a612',
					'type'     => 'colorpicker',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'google_font',
					'label'    => esc_html__( 'Google Font', '17jbh' ),
					'desc'     => esc_html__( 'Use Google Fonts', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'main_font_family',
					'label'    => esc_html__( 'Main Font Family', '17jbh' ),
					'desc'     => wp_kses( __( 'Enter font-family name here. Google Fonts are supported. For example, if you choose "Source Code Pro" <a href="http://www.google.com/fonts/">Google Font</a> with font-weight 400,500,600, enter Source Code Pro: 400,500,600', '17jbh' ), array( 'a' => array( 'href' => array() ) ) ),
					'std'      => '',
					'type'     => 'text',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'           => 'main_font_size',
					'label'        => esc_html__( 'Main Font Size', '17jbh' ),
					'desc'         => esc_html__( 'Select base font size', '17jbh' ),
					'std'          => '14',
					'type'         => 'numeric-slider',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '12,20,1',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),

				array(
					'id'           => 'navigation_font_family',
					'label'        => esc_html__( 'Navigation Font Family', '17jbh' ),
					'desc'         => wp_kses( __( 'Enter font-family name here. Google Fonts are supported. For example, if you choose "Source Code Pro" <a href="http://www.google.com/fonts/">Google Font</a> with font-weight 400,500,600, enter Source Code Pro: 400,500,600', '17jbh' ), array( 'a' => array( 'href' => array() ) ) ),
					'std'          => '',
					'type'         => 'text',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'navigation_font_size',
					'label'        => esc_html__( 'Navigation Font Size', '17jbh' ),
					'desc'         => esc_html__( 'Select base font size', '17jbh' ),
					'std'          => '14',
					'type'         => 'numeric-slider',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '12,20,1',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'meta_font_family',
					'label'        => esc_html__( 'Meta Font Family', '17jbh' ),
					'desc'         => wp_kses( __( 'Enter font-family name here. Google Fonts are supported. For example, if you choose "Source Code Pro" <a href="http://www.google.com/fonts/">Google Font</a> with font-weight 400,500,600, enter Source Code Pro: 400,500,600', '17jbh' ), array( 'a' => array( 'href' => array() ) ) ),
					'std'          => '',
					'type'         => 'text',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'meta_font_size',
					'label'        => esc_html__( 'Meta Font Size', '17jbh' ),
					'desc'         => esc_html__( 'Select base font size', '17jbh' ),
					'std'          => '12',
					'type'         => 'numeric-slider',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '9,17,1',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'heading_font_family',
					'label'        => esc_html__( 'Heading Font Family', '17jbh' ),
					'desc'         => wp_kses( __( 'Enter font-family name here. Google Fonts are supported. For example, if you choose "Source Code Pro" <a href="http://www.google.com/fonts/">Google Font</a> with font-weight 400,500,600, enter Source Code Pro: 400,500,600', '17jbh' ), array( 'a' => array( 'href' => array() ) ) ),
					'std'          => '',
					'type'         => 'text',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'heading_font_size',
					'label'        => esc_html__( 'Heading Font Size', '17jbh' ),
					'desc'         => esc_html__( 'Select base font size', '17jbh' ),
					'std'          => '14',
					'type'         => 'numeric-slider',
					'section'      => 'color_n_fonts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '12,20,1',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),

				array(
					'id'       => 'custom_font_1A',
					'label'    => esc_html__( 'Custom Font 1 (woff)', '17jbh' ),
					'desc'     => esc_html__( 'Upload your own font and enter name "custom-font-1" in "Main Font Family", "Navigation Font Family" or "Heading Font Family" setting above.', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'custom_font_1',
					'label'    => esc_html__( 'Custom Font 1 (woff2)', '17jbh' ),
					'desc'     => '',
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),

				array(
					'id'       => 'custom_font_2A',
					'label'    => esc_html__( 'Custom Font 2 (woff)', '17jbh' ),
					'desc'     => esc_html__( 'Upload your own font and enter name "custom-font-2" in "Main Font Family", "Navigation Font Family" or "Heading Font Family" setting above.', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'custom_font_2',
					'label'    => esc_html__( 'Custom Font 2 (woff2)', '17jbh' ),
					'desc'     => '',
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),

				array(
					'id'       => 'custom_font_3A',
					'label'    => esc_html__( 'Custom Font 3 (woff)', '17jbh' ),
					'desc'     => esc_html__( 'Upload your own font and enter name "custom-font-3" in "Main Font Family", "Navigation Font Family" or "Heading Font Family" setting above.', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'custom_font_3',
					'label'    => esc_html__( 'Custom Font 3 (woff2)', '17jbh' ),
					'desc'     => '',
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),

				array(
					'id'       => 'custom_font_4A',
					'label'    => esc_html__( 'Custom Font 4 (woff)', '17jbh' ),
					'desc'     => esc_html__( 'Upload your own font and enter name "custom-font-4" in "Main Font Family", "Navigation Font Family" or "Heading Font Family" setting above.', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),
				array(
					'id'       => 'custom_font_4',
					'label'    => esc_html__( 'Custom Font 4 (woff2)', '17jbh' ),
					'desc'     => '',
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'color_n_fonts',
					'operator' => 'and'
				),

				//End Color and font block
				array(
					'id'       => 'logo_image',
					'label'    => esc_html__( 'Site Logo', '17jbh' ),
					'desc'     => esc_html__( 'Upload your logo image', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'theme_layout',
					'operator' => 'and'
				),

				array(
					'id'       => 'retina_logo',
					'label'    => esc_html__( 'Site Logo (Retina)', '17jbh' ),
					'desc'     => esc_html__( 'Retina logo should be two time bigger than the custom logo. Retina Logo is optional, use this setting if you want to strictly support retina devices.', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'theme_layout',
					'operator' => 'and'
				),

				array(
					'id'       => 'logo_image_sticky',
					'label'    => esc_html__( 'Logo Image For Sticky Menu', '17jbh' ),
					'desc'     => esc_html__( 'Upload your logo image for sticky menu', '17jbh' ),
					'std'      => '',
					'type'     => 'upload',
					'section'  => 'theme_layout',
					'operator' => 'and'
				),

				array(
					'id'      => 'main_layout',
					'label'   => esc_html__( 'Theme Layout', '17jbh' ),
					'desc'    => esc_html__( 'Select Theme Layout', '17jbh' ),
					'std'     => 'fullwidth',
					'type'    => 'radio-image',
					'section' => 'theme_layout',
					'choices' => array(
						array(
							'value' => 'fullwidth',
							'label' => esc_html__( 'Full-width', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/theme-layout-01-fullwidth.jpg'
						),
						array(
							'value' => 'boxed',
							'label' => esc_html__( 'Inbox', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/theme-layout-02-boxed.jpg'
						),
						array(
							'value' => 'wide',
							'label' => esc_html__( 'Wide', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/theme-layout-03-wide.jpg'
						),
					)
				),

				array(
					'id'      => 'body_schema',
					'label'   => esc_html__( 'Body Schema', '17jbh' ),
					'desc'    => esc_html__( 'Select Body Schema', '17jbh' ),
					'std'     => 'light',
					'type'    => 'select',
					'section' => 'theme_layout',
					'choices' => array(
						array(
							'value' => 'dark',
							'label' => esc_html__( 'Dark', '17jbh' )
						),
						array(
							'value' => 'light',
							'label' => esc_html__( 'White', '17jbh' )
						)
					)
				),
				array(
					'id'        => 'main_navi_width',
					'label'     => esc_html__( 'Main Navigation Width', '17jbh' ),
					'desc'      => esc_html__( 'Choose Main Navigation Width.', '17jbh' ),
					'std'       => 'full',
					'type'      => 'select',
					'section'   => 'theme_layout',
					'condition' => 'main_layout:not(boxed)',
					'choices'   => array(
						array(
							'value' => 'full',
							'label' => esc_html__( 'Full-width ', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'inbox',
							'label' => esc_html__( 'Inbox', '17jbh' ),
							'src'   => ''
						)
					)
				),
				array(
					'id'           => 'max_width',
					'label'        => esc_html__( 'Max Width', '17jbh' ),
					'desc'         => esc_html__( 'Select  theme\'s max width. Max Width is applied for Full-Width Layout. Examples: 75%, 95%, 100%, 1920px, 1600px, 90vw, 70vw ... - If Blank, default = 100% - Only customize for PC).', '17jbh' ),
					'std'          => '',
					'type'         => 'text',
					'section'      => 'theme_layout',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => 'main_layout:is(fullwidth)',
					'operator'     => 'and'
				),
				array(
					'id'      => 'header_schema',
					'label'   => esc_html__( 'Top Header Background Schema', '17jbh' ),
					'desc'    => esc_html__( 'Select Top Header Background Schema', '17jbh' ),
					'std'     => 'dark',
					'type'    => 'select',
					'section' => 'theme_layout',
					'choices' => array(
						array(
							'value' => 'dark',
							'label' => esc_html__( 'Dark', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'light',
							'label' => esc_html__( 'Light', '17jbh' ),
							'src'   => ''
						),
					)
				),
				array(
					'id'      => 'header_background',
					'label'   => esc_html__( 'Header Background', '17jbh' ),
					'desc'    => esc_html__( 'Set header background', '17jbh' ),
					'std'     => '',
					'type'    => 'background',
					'section' => 'theme_layout'
				),
				array(
					'id'      => 'main_navi_layout',
					'label'   => esc_html__( 'Main Navigation Layout', '17jbh' ),
					'desc'    => esc_html__( 'Select Navigation Layout', '17jbh' ),
					'std'     => 'separeted',
					'type'    => 'radio-image',
					'section' => 'theme_layout',
					'choices' => array(
						array(
							'value' => 'separeted',
							'label' => esc_html__( 'Separated', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout2.png'
						),
						array(
							'value' => 'inline',
							'label' => esc_html__( 'Inline', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/icon-videopro-nav-layout1.png'
						),
					)
				),
				array(
					'id'        => 'main_navi_schema',
					'label'     => esc_html__( 'Main Navigation Schema', '17jbh' ),
					'desc'      => esc_html__( 'Select background schema for Main Navigation', '17jbh' ),
					'std'       => 'dark',
					'type'      => 'select',
					'section'   => 'theme_layout',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'condition' => 'main_navi_layout:is(separeted)',
					'choices'   => array(
						array(
							'value' => 'dark',
							'label' => esc_html__( 'Dark', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'light',
							'label' => esc_html__( 'Light', '17jbh' ),
							'src'   => ''
						),
					)
				),
				array(
					'id'           => 'megamenu',
					'label'        => esc_html__( 'Mega Menu', '17jbh' ),
					'desc'         => esc_html__( 'Enable Mega Menu', '17jbh' ),
					'std'          => 'off',
					'type'         => 'on-off',
					'section'      => 'theme_layout',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_search',
					'label'        => esc_html__( 'Search Box on Header ', '17jbh' ),
					'desc'         => esc_html__( 'Enable search box on header. Custom Search Box can be set in Appearance > Sidebar > Search Box Sidebar', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'theme_layout',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'sticky_navigation',
					'label'        => esc_html__( 'Sticky Menu', '17jbh' ),
					'desc'         => esc_html__( 'Enable Sticky Menu', '17jbh' ),
					'std'          => 'off',
					'type'         => 'on-off',
					'section'      => 'theme_layout',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'        => 'sticky_up_down',
					'label'     => esc_html__( 'Select Sticky Menu Behavior', '17jbh' ),
					'std'       => 'down',
					'type'      => 'select',
					'section'   => 'theme_layout',
					'rows'      => '',
					'post_type' => '',
					'condition' => 'sticky_navigation:is(on)',
					'taxonomy'  => '',
					'class'     => '',
					'choices'   => array(
						array(
							'value' => 'up',
							'label' => esc_html__( 'Only appears when page is Scrolled Up', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'down',
							'label' => esc_html__( 'Always Sticky', '17jbh' ),
							'src'   => ''
						),
					)
				),

				array(
					'id'        => 'page_sidebar',
					'label'     => esc_html__( 'Sidebar', '17jbh' ),
					'desc'      => esc_html__( 'Select global sidebar setting. This setting can be overriden in Theme Options > Archives, Theme Options > Single Post, and in each page, post.', '17jbh' ),
					'std'       => 'both',
					'type'      => 'select',
					'section'   => 'theme_layout',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'condition' => '',
					'operator'  => 'and',
					'choices'   => array(
						array(
							'value' => 'right',
							'label' => esc_html__( 'Right', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'left',
							'label' => esc_html__( 'Left', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'both',
							'label' => esc_html__( 'Left & Right', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'full',
							'label' => esc_html__( 'Hidden', '17jbh' ),
							'src'   => ''
						)
					)
				),
				array(
					'id'       => 'background',
					'label'    => esc_html__( 'Background', '17jbh' ),
					'desc'     => esc_html__( 'Set theme background', '17jbh' ),
					'std'      => '',
					'type'     => 'background',
					'section'  => 'theme_layout',
					'operator' => 'and'
				),
				array(
					'id'      => 'blog_page_heading',
					'label'   => esc_html__( 'Blog Heading', '17jbh' ),
					'desc'    => esc_html__( 'Show/hide Blog Heading', '17jbh' ),
					'std'     => 'off',
					'type'    => 'on-off',
					'section' => 'blog'
				),
				array(
					'id'      => 'blog_sidebar',
					'label'   => esc_html__( 'Sidebar', '17jbh' ),
					'desc'    => esc_html__( 'This setting is applied for all archives pages such as Blog, Category, Tag, Author, Search, etc.... It will override global setting in Theme Options > Theme Layout.', '17jbh' ),
					'std'     => 'right',
					'type'    => 'select',
					'section' => 'blog',
					'choices' => array(
						array(
							'value' => 'right',
							'label' => esc_html__( 'Right', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'left',
							'label' => esc_html__( 'Left', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'both',
							'label' => esc_html__( 'Left & Right', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'full',
							'label' => esc_html__( 'Hidden', '17jbh' ),
							'src'   => ''
						)
					)
				),
				array(
					'id'      => 'blog_layout',
					'label'   => esc_html__( 'Default Layout', '17jbh' ),
					'desc'    => esc_html__( 'Select default layout for archives page', '17jbh' ),
					'std'     => 'layout_3',
					'type'    => 'radio-image',
					'section' => 'blog',
					'choices' => array(
						array(
							'value' => 'layout_1',
							'label' => esc_html__( 'One Column, Big Thumbnail ', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout1.png'
						),
						array(
							'value' => 'layout_2',
							'label' => esc_html__( 'One Column, Small Thumbnail ', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout3.png'
						),
						array(
							'value' => 'layout_3',
							'label' => esc_html__( 'Multiple Columns', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout2.png'
						),
					)
				),
				array(
					'id'       => 'enable_switcher_toolbar',
					'label'    => esc_html__( 'Layout Switcher Toolbar', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide "Layout Switcher Toolbar"', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'blog',
					'operator' => 'and'
				),
				array(
					'id'           => 'enable_order_select',
					'label'        => esc_html__( 'Posts Order Select Box', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide "Posts Order Select Box"', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_archive_excerpt',
					'label'        => esc_html__( 'Item\'s excerpt', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide post excerpt', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_archive_author',
					'label'        => esc_html__( 'Item\'s author', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide post author', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_archive_date',
					'label'        => esc_html__( 'Item\'s published date', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide post published date', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_archive_view',
					'label'        => esc_html__( 'Item\'s view count', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide post view count', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => 'enable_archive_cm',
					'label'        => esc_html__( 'Item\'s comment count', '17jbh' ),
					'desc'         => esc_html__( 'Show/hide post comment count', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'blog',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),

				array(
					'id'        => 'pagination',
					'label'     => esc_html__( 'Pagination', '17jbh' ),
					'desc'      => esc_html__( 'Choose type of navigation for blog and any listing page. For WP PageNavi, you will need to install WP PageNavi plugin', '17jbh' ),
					'std'       => 'def',
					'type'      => 'select',
					'section'   => 'blog',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'choices'   => array(
						array(
							'value' => 'def',
							'label' => esc_html__( 'Default', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'ajax',
							'label' => esc_html__( 'Ajax', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'wp_pagenavi',
							'label' => esc_html__( 'WP PageNavi', '17jbh' ),
							'src'   => ''
						)
					)
				),
				array(
					'id'      => 'author_page_enabled',
					'label'   => esc_html__( 'Enable Author Page', '17jbh' ),
					'desc'    => esc_html__( 'By enabling Author Page, it will enable link on author name in each post', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'author'
				),
				array(
					'id'      => 'author_base_slug',
					'label'   => esc_html__( 'Author Base Slug', '17jbh' ),
					'desc'    => esc_html__( 'Change Author\' base slug. By default, it is "author". Remember to save the permalink structure again in Settings > Permalinks', '17jbh' ),
					'type'    => 'text',
					'section' => 'author'
				),
				array(
					'id'      => 'author_page_email_contact',
					'label'   => esc_html__( 'Enable Email Contact', '17jbh' ),
					'desc'    => esc_html__( 'Enable Email Contact button', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'author'
				),
				array(
					'id'      => 'author_page_social_accounts',
					'label'   => esc_html__( 'Enable Social Accounts', '17jbh' ),
					'desc'    => esc_html__( 'Enable author\' social account buttons', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'author'
				),

				array(
					'id'        => 'post_layout',
					'label'     => esc_html__( 'Default Feature Image Position', '17jbh' ),
					'desc'      => esc_html__( 'Select default feature image position for standard posts', '17jbh' ),
					'std'       => '1',
					'type'      => 'select',
					'section'   => 'single_post',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'condition' => '',
					'operator'  => 'and',
					'choices'   => array(
						array(
							'value' => '1',
							'label' => esc_html__( 'In body ', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => '2',
							'label' => esc_html__( 'In header', '17jbh' ),
							'src'   => ''
						),
					)
				),

				array(
					'id'        => 'videopost_layout',
					'label'     => esc_html__( 'Default Video Player Position', '17jbh' ),
					'desc'      => esc_html__( 'Select default Video Player Position for video posts', '17jbh' ),
					'std'       => '2',
					'type'      => 'select',
					'section'   => 'single_post',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'condition' => '',
					'operator'  => 'and',
					'choices'   => array(
						array(
							'value' => '1',
							'label' => esc_html__( 'In body ', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => '2',
							'label' => esc_html__( 'In header', '17jbh' ),
							'src'   => ''
						),
					)
				),
				array(
					'id'        => 'post_sidebar',
					'label'     => esc_html__( 'Sidebar', '17jbh' ),
					'desc'      => '',
					'std'       => 'right',
					'type'      => 'select',
					'section'   => 'single_post',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'condition' => '',
					'operator'  => 'and',
					'choices'   => array(
						array(
							'value' => 'both',
							'label' => esc_html__( 'Both sidebar', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'right',
							'label' => esc_html__( 'Right', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'left',
							'label' => esc_html__( 'Left', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'full',
							'label' => esc_html__( 'Hidden', '17jbh' ),
							'src'   => ''
						)
					)
				),

				//404 - Page Not Found block
				array(
					'id'           => '404_page_title',
					'label'        => esc_html__( 'Page Title', '17jbh' ),
					'desc'         => esc_html__( 'Title of Page Not Found - 404 page', '17jbh' ),
					'std'          => 'Oops! 404',
					'type'         => 'text',
					'section'      => 'page_not_found',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'           => '404_page_content',
					'label'        => esc_html__( 'Page Content', '17jbh' ),
					'desc'         => esc_html__( 'Content of Page Not Found - 404 page', '17jbh' ),
					'std'          => 'The page you are looking for might have been removed	had its name changed or is temporarily unavailable',
					'type'         => 'textarea',
					'section'      => 'page_not_found',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				array(
					'id'      => '404_backhome',
					'label'   => esc_html__( 'Back to home button', '17jbh' ),
					'desc'    => esc_html__( 'Enable Back To Home button', '17jbh' ),
					'type'    => 'on-off',
					'section' => 'page_not_found',
					'std'     => 'on',
				),
				array(
					'id'           => '404_backhome_text',
					'label'        => esc_html__( '&quot;Back to home&quot; button&rsquo;s text', '17jbh' ),
					'desc'         => esc_html__( 'Text for "Back to Home" button', '17jbh' ),
					'std'          => 'BACK TO HOMEPAGE',
					'type'         => 'text',
					'section'      => 'page_not_found',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),

				array(
					'id'      => 'single_post_date',
					'label'   => esc_html__( 'Show Published Date', '17jbh' ),
					'desc'    => esc_html__( 'Show/hide Published Date', '17jbh' ),
					'type'    => 'on-off',
					'section' => 'single_post',
					'std'     => 'on',
				),
				array(
					'id'       => 'show_cat_single_post',
					'label'    => esc_html__( 'Show Post Categories', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Post Categories', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'       => 'show_author_single_post',
					'label'    => esc_html__( 'Show Post Author', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Post Author', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'       => 'show_cmcount_single_post',
					'label'    => esc_html__( 'Show Post Comments Count', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Comment Count', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),

				array(
					'id'      => 'single_post_show_views',
					'label'   => esc_html__( 'Show Post Views Count', '17jbh' ),
					'desc'    => esc_html__( 'Require Top10 - Popular posts plugin for WordPress installed. If VideoPro-Video Extension plugin is installed, Post View is enabled for video post format regardless of this setting', '17jbh' ),
					'std'     => 'off',
					'type'    => 'on-off',
					'section' => 'single_post',
				),

				array(
					'id'       => 'single_post_show_likes',
					'label'    => esc_html__( 'Show Post Likes Count', '17jbh' ),
					'desc'     => esc_html__( 'Require WTI Like Post plugin installed. If VideoPro-Video Extension plugin is installed, Post Like is enabled for video post format regardless of this setting', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),

				array(
					'id'       => 'show_tags_single_post',
					'label'    => esc_html__( 'Show Post Tags', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Post Tags', '17jbh' ),
					'std'      => '',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'       => 'show_share_button_social',
					'label'    => esc_html__( 'Show Social Sharing Buttons', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Social Sharing Buttons', '17jbh' ),
					'std'      => '',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'      => 'show_post_navi',
					'label'   => esc_html__( 'Show Post Navigation', '17jbh' ),
					'desc'    => esc_html__( 'Show/hide Post Navigation Buttons (Prev-Next buttons)', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'single_post',
				),
				array(
					'id'       => 'show_about_the_author',
					'label'    => esc_html__( 'Show About the Author', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide "About the Author" section in Single Post', '17jbh' ),
					'std'      => '',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'       => 'show_related_post',
					'label'    => esc_html__( 'Show Related Posts', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Related Posts section in single post page', '17jbh' ),
					'std'      => '',
					'type'     => 'on-off',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'      => 'related_title',
					'label'   => esc_html__( 'Related Post Title', '17jbh' ),
					'desc'    => esc_html__( 'Enter Title for Related Posts section', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'single_post',
				),
				array(
					'id'       => 'get_related_post_by',
					'label'    => esc_html__( 'Related Posts - Select', '17jbh' ),
					'desc'     => esc_html__( 'Get Related Posts by Categories or Tags, or using YARPP (Yet Another Related Post Plugin)', '17jbh' ),
					'std'      => 'cat',
					'type'     => 'select',
					'section'  => 'single_post',
					'choices'  => array(
						array(
							'value' => 'cat',
							'label' => esc_html__( 'Categories', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'tag',
							'label' => esc_html__( 'Tags', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'YARPP',
							'label' => esc_html__( 'YARPP', '17jbh' ),
							'src'   => ''
						)
					),
					'operator' => 'and'
				),

				array(
					'id'       => 'related_posts_count',
					'label'    => esc_html__( 'Related Posts - Count', '17jbh' ),
					'desc'     => esc_html__( 'Number of related posts', '17jbh' ),
					'std'      => '8',
					'type'     => 'text',
					'section'  => 'single_post',
					'operator' => 'and'
				),
				array(
					'id'       => 'related_posts_order_by',
					'label'    => esc_html__( 'Related Posts - Order By', '17jbh' ),
					'desc'     => esc_html__( 'Order related posts by Published Date or Randomly', '17jbh' ),
					'std'      => 'date',
					'type'     => 'select',
					'section'  => 'single_post',
					'choices'  => array(
						array(
							'value' => 'date',
							'label' => esc_html__( 'Date', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'rand',
							'label' => esc_html__( 'Random', '17jbh' ),
							'src'   => ''
						)
					),
					'operator' => 'and'
				),

				array(
					'id'           => 'show_comment',
					'label'        => esc_html__( 'Show Comment', '17jbh' ),
					'desc'         => esc_html__( 'Show/Hide Comment Section', '17jbh' ),
					'std'          => '',
					'type'         => 'on-off',
					'section'      => 'single_post',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),

				//Single page block
				array(
					'id'           => 'disable_comments',
					'label'        => esc_html__( 'Page Comments', '17jbh' ),
					'desc'         => esc_html__( 'Enable/Disable Page Comments', '17jbh' ),
					'std'          => 'on',
					'type'         => 'on-off',
					'section'      => 'single_page',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and'
				),
				//End single page block

				array(
					'id'        => 'search_layout',
					'label'     => esc_html__( 'Search Results Layout', '17jbh' ),
					'desc'      => esc_html__( 'Search layout for search results page', '17jbh' ),
					'std'       => 'layout_3',
					'type'      => 'radio-image',
					'section'   => 'search',
					'rows'      => '',
					'post_type' => '',
					'taxonomy'  => '',
					'class'     => '',
					'choices'   => array(
						array(
							'value' => 'layout_1',
							'label' => esc_html__( 'One Column, Big Thumbnail ', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout1.png'
						),
						array(
							'value' => 'layout_2',
							'label' => esc_html__( 'One Column, Small Thumbnail ', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout3.png'
						),
						array(
							'value' => 'layout_3',
							'label' => esc_html__( 'Multiple Columns', '17jbh' ),
							'src'   => get_template_directory_uri() . '/images/theme-options/layout2.png'
						),
					)
				),
				array(
					'id'       => 'search_thumbnails',
					'label'    => esc_html__( 'Thumbnails in Search Results', '17jbh' ),
					'desc'     => esc_html__( 'Hide post thumbnails in Search Results page', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'search',
					'operator' => 'and'
				),
				array(
					'id'       => 'search_strip_shortcode',
					'label'    => esc_html__( 'Strip shortcodes', '17jbh' ),
					'desc'     => esc_html__( 'Strip all content inside shortcodes', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'search',
					'operator' => 'and'
				),
				array(
					'id'       => 'search_exclude_page',
					'label'    => esc_html__( 'Exclude pages', '17jbh' ),
					'desc'     => esc_html__( 'Exclude pages from search results', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'search',
					'operator' => 'and'
				),
				array(
					'id'       => 'search_video_only',
					'label'    => esc_html__( 'Search Video Posts only', '17jbh' ),
					'desc'     => esc_html__( 'Only search Video Posts. This option will filter main search query so you should not use if there are other custom post types you want to search', '17jbh' ),
					'std'      => 'off',
					'type'     => 'on-off',
					'section'  => 'search',
					'operator' => 'and'
				),
				array(
					'id'      => 'search_pagination',
					'label'   => esc_html__( 'Pagination', '17jbh' ),
					'desc'    => esc_html__( 'Choose type of navigation for blog and any listing page. For WP PageNavi, you will need to install WP PageNavi plugin', '17jbh' ),
					'std'     => 'def',
					'type'    => 'select',
					'section' => 'search',
					'choices' => array(
						array(
							'value' => 'def',
							'label' => esc_html__( 'Default', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'ajax',
							'label' => esc_html__( 'Ajax', '17jbh' ),
							'src'   => ''
						),
						array(
							'value' => 'wp_pagenavi',
							'label' => esc_html__( 'WP PageNavi', '17jbh' ),
							'src'   => ''
						)
					)
				),

				array(
					'id'           => 'custom_social_account',
					'label'        => esc_html__( 'Custom Social Account', '17jbh' ),
					'desc'         => esc_html__( 'Add more social account using Font Awesome Icons', '17jbh' ),
					'std'          => '',
					'type'         => 'list-item',
					'section'      => 'social_accounts',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition'    => '',
					'operator'     => 'and',
					'settings'     => array(
						array(
							'id'           => 'icon_custom_social_account',
							'label'        => esc_html__( 'Font Awesome Icons', '17jbh' ),
							'desc'         => esc_html__( 'Enter Font Awesome class (ex: fa-instagram)', '17jbh' ),
							'std'          => '',
							'type'         => 'text',
							'post_type'    => '',
							'taxonomy'     => '',
							'min_max_step' => '',
							'class'        => '',
							'condition'    => '',
							'operator'     => 'and',
						),
						array(
							'id'           => 'url_custom_social_account',
							'label'        => esc_html__( 'URL', '17jbh' ),
							'desc'         => esc_html__( 'Enter full link to your social account (including http)', '17jbh' ),
							'std'          => '#',
							'type'         => 'text',
							'post_type'    => '',
							'taxonomy'     => '',
							'min_max_step' => '',
							'class'        => '',
							'condition'    => '',
							'operator'     => 'and'
						)
					)
				),
				array(
					'id'       => 'open_social_link_new_tab',
					'label'    => esc_html__( 'Open Social Link in new tab', '17jbh' ),
					'desc'     => esc_html__( 'Open link in new tab?', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'social_accounts',
					'operator' => 'and'
				),

				//membership
				array(
					'id'       => 'mebership_login',
					'label'    => esc_html__( 'Login Link', '17jbh' ),
					'desc'     => esc_html__( 'Show/hide Login Link on top of the page', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'membership',
					'operator' => 'and'
				),
				array(
					'id'      => 'mebership_login_text',
					'label'   => esc_html__( 'Login Link - Text', '17jbh' ),
					'desc'    => esc_html__( 'Enter title of the Login Link', '17jbh' ),
					'std'     => 'Login',
					'type'    => 'text',
					'section' => 'membership'
				),
				array(
					'id'      => 'mebership_login_link',
					'label'   => esc_html__( 'Login URL - Custom URL', '17jbh' ),
					'desc'    => esc_html__( 'If you want to use a custom login/register URL, enter it here. Leave it blank to use default WordPress Login URL', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'membership'
				),
				array(
					'id'      => 'login_redirect',
					'label'   => esc_html__( 'Redirect after Logged In', '17jbh' ),
					'desc'    => esc_html__( 'Choose where to redirect Logged In Users', '17jbh' ),
					'std'     => '',
					'type'    => 'select',
					'section' => 'membership',
					'choices' => array(
						array(
							'value' => '',
							'label' => esc_html__( 'Default', '17jbh' )
						),
						array(
							'value' => 'author',
							'label' => esc_html__( 'User Public Profile', '17jbh' )
						)
					),
				),
				array(
					'id'        => 'membership_register_link',
					'label'     => esc_html__( 'Register Link', '17jbh' ),
					'desc'      => esc_html__( 'Show/hide "Register Link" as a sub menu item of "Login Link"', '17jbh' ),
					'std'       => 'off',
					'type'      => 'on-off',
					'section'   => 'membership',
					'operator'  => 'and',
					'condition' => 'mebership_login:is(on)'
				),
				array(
					'id'        => 'membership_register_text',
					'label'     => esc_html__( 'Register Link - Text', '17jbh' ),
					'desc'      => esc_html__( 'Enter title of the "Register Link"', '17jbh' ),
					'std'       => 'Register',
					'type'      => 'text',
					'section'   => 'membership',
					'condition' => 'mebership_login:is(on)'
				),
				array(
					'id'        => 'membership_register_url',
					'label'     => esc_html__( 'Register Link - Custom URL', '17jbh' ),
					'desc'      => esc_html__( 'If you want to use a custom Register URL, enter it here. Leave it blank to use default WordPress Register URL', '17jbh' ),
					'std'       => '',
					'type'      => 'text',
					'section'   => 'membership',
					'condition' => 'mebership_login:is(on)'
				),
				array(
					'id'      => 'mebership_logged_display',
					'label'   => esc_html__( 'Logged-In Menu displays', '17jbh' ),
					'desc'    => esc_html__( 'Choose what to display on the Logged-in Menu. Go to Appearance > Menus to manage "Logged In User Menu" items', '17jbh' ),
					'std'     => 1,
					'type'    => 'select',
					'section' => 'membership',
					'choices' => array(
						array(
							'value' => 1,
							'label' => esc_html__( 'Nickname', '17jbh' )
						),
						array(
							'value' => 2,
							'label' => esc_html__( 'First Name', '17jbh' )
						),
						array(
							'value' => 3,
							'label' => esc_html__( 'First Name + Last Name', '17jbh' )
						)
					),
				),
				array(
					'id'       => 'mebership_logout',
					'label'    => esc_html__( 'Add "Log Out" menu item', '17jbh' ),
					'desc'     => esc_html__( 'Auto-add "Log Out" menu item to the "Logged In User Menu"', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'membership',
					'operator' => 'and'
				),
				array(
					'id'       => 'membership_profile_menu_item',
					'label'    => esc_html__( 'Add "Public Profile" menu item', '17jbh' ),
					'desc'     => esc_html__( 'Auto-add "Public Profile" menu item to the "Logged In User Menu"', '17jbh' ),
					'std'      => 'on',
					'type'     => 'on-off',
					'section'  => 'membership',
					'operator' => 'and'
				),

				//ads
				array(
					'id'      => 'adsense_id',
					'label'   => esc_html__( 'Google AdSense Publisher ID', '17jbh' ),
					'desc'    => esc_html__( 'Enter your Google AdSense Publisher ID', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'adsense_slot_ads_top_page',
					'label'   => esc_html__( 'Top Page Ads - AdSense Ads Slot ID', '17jbh' ),
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Top Page Ads - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_top_page',
					'label'   => esc_html__( 'Top Page Ads - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Top Page Ads', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),
				array(
					'id'      => 'adsense_slot_ads_top_ct',
					'label'   => esc_html__( 'Top Content Ads - AdSense Ads Slot ID', '17jbh' ),
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Top Content Ads - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_top_ct',
					'label'   => esc_html__( 'Top Content Ads - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Top Content Ads', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),
				array(
					'id'      => 'adsense_slot_ads_archives',
					'label'   => esc_html__( 'Archives Page Ads - AdSense Ads Slot ID', '17jbh' ),
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Archives Page Ads - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_archives',
					'label'   => esc_html__( 'Archives Page Ads - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Archives Page Ads', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),
				array(
					'id'      => 'adsense_slot_ads_single_1',
					'label'   => 'Single Post Ads 1 - AdSense Ads Slot ID',
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Single Post Ads 1 - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_single_1',
					'label'   => esc_html__( 'Single Post Ads 1 - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Single Post Ads 1', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),
				array(
					'id'      => 'adsense_slot_ads_single_2',
					'label'   => 'Single Post Ads 2 - AdSense Ads Slot ID',
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Single Post Ads 2 - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_single_2',
					'label'   => esc_html__( 'Single Post Ads 2 - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Single Post Ads 2', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),

				array(
					'id'      => 'adsense_slot_ads_bottom_ct',
					'label'   => 'Bottom Content Ads - AdSense Ads Slot ID',
					'desc'    => esc_html__( 'If you want to display Adsense in Top, enter Google AdSense Ad Slot ID here. If left empty, "Bottom Content Ads - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_bottom_ct',
					'label'   => esc_html__( 'Bottom Content Ads - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Bottom Content Ads', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),

				array(
					'id'      => 'adsense_slot_ads_bottom_page',
					'label'   => esc_html__( 'Bottom Page Ads - AdSense Ads Slot ID', '17jbh' ),
					'desc'    => esc_html__( 'If you want to display Adsense in Bottom, enter Google AdSense Ad Slot ID here. If left empty, "Bottom Page Ads - Custom Code" will be used.', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_bottom_page',
					'label'   => esc_html__( 'Bottom Page Ads - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Bottom Content Ads', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),

				array(
					'id'      => 'adsense_slot_ads_wall_left',
					'label'   => 'Wall Ads Left - AdSense Ads Slot ID',
					'desc'    => esc_html__( 'If you want to display Adsense at Bottom of Single Post, enter Google AdSense Ad Slot ID here. If left empty, "Wall Ads Left - Custom Code" will be used. Wall Ads should only be used in boxed layout', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_wall_left',
					'label'   => esc_html__( 'Wall Ads Left - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Wall Ads Left', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),

				array(
					'id'      => 'adsense_slot_ads_wall_right',
					'label'   => esc_html__( 'Wall Ads Right - AdSense Ads Slot ID', '17jbh' ),
					'desc'    => esc_html__( 'If you want to display Adsense at Bottom of Single Post, enter Google AdSense Ad Slot ID here. If left empty, "Wall Ads Right - Custom Code" will be used. Wall Ads should only be used in boxed layout', '17jbh' ),
					'std'     => '',
					'type'    => 'text',
					'section' => 'advertising'
				),
				array(
					'id'      => 'ads_wall_right',
					'label'   => esc_html__( 'Wall Ads Right - Custom Code', '17jbh' ),
					'desc'    => esc_html__( 'Enter custom code for Wall Ads Right', '17jbh' ),
					'std'     => '',
					'type'    => 'textarea-simple',
					'section' => 'advertising'
				),

				array(
					'id'      => 'misc_soundcloud_layout',
					'label'   => esc_html__( 'SoundCloud Player Layout', '17jbh' ),
					'desc'    => esc_html__( 'Choose layout for SoundCloud Player', '17jbh' ),
					'std'     => false,
					'type'    => 'select',
					'choices' => array(
						array(
							'value' => false,
							'label' => esc_html__( 'Classic Embed', '17jbh' )
						),
						array(
							'value' => true,
							'label' => esc_html__( 'Visual Embed', '17jbh' )
						),
					),
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_width',
					'label'   => esc_html__( 'SoundCloud Player - Width', '17jbh' ),
					'desc'    => esc_html__( 'Specify width for SoundCloud Player. Use percentage (ex. 100%) or number (ex. 160)', '17jbh' ),
					'std'     => '100%',
					'type'    => 'text',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_height',
					'label'   => esc_html__( 'SoundCloud Player - Height', '17jbh' ),
					'desc'    => esc_html__( 'Specify width for SoundCloud Player. Use number (ex. 160)', '17jbh' ),
					'std'     => '160',
					'type'    => 'text',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_autoplay',
					'label'   => esc_html__( 'SoundCloud Player - Autoplay', '17jbh' ),
					'desc'    => esc_html__( 'Enable autoplay for SoundCloud Player', '17jbh' ),
					'std'     => 'off',
					'type'    => 'on-off',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_hiderelated',
					'label'   => esc_html__( 'SoundCloud Player - Hide Related', '17jbh' ),
					'desc'    => esc_html__( 'Hide related Audios on the player', '17jbh' ),
					'std'     => 'off',
					'type'    => 'on-off',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_showcomments',
					'label'   => esc_html__( 'SoundCloud Player - Show Comments', '17jbh' ),
					'desc'    => esc_html__( 'Show comments on the player', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_showusers',
					'label'   => esc_html__( 'SoundCloud Player - Show Users', '17jbh' ),
					'desc'    => esc_html__( 'Show SoundCloud Users on the player', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'misc'
				),
				array(
					'id'      => 'misc_soundcloud_showreposts',
					'label'   => esc_html__( 'SoundCloud Player - Show Reposts', '17jbh' ),
					'desc'    => esc_html__( 'Show RePosts on the player', '17jbh' ),
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'misc'
				),
				array(
					'id'      => 'pre_loading',
					'label'   => esc_html__('Pre-loading Effect', 'colossal'),
					'desc'    => esc_html__('Enable Pre-loading Effect', 'colossal'),
					'std'     => '-1',
					'type'    => 'select',
					'section' => 'misc',
					'rows'    => '',
					'choices' => array(
						array(
							'value' => '-1',
							'label' => esc_html__('Disable All', 'colossal'),
							'src'   => ''
						),
						array(
							'value' => '1',
							'label' => esc_html__('Enable All', 'colossal'),
							'src'   => ''
						),
						array(
							'value' => '2',
							'label' => esc_html__('Front-page Only', 'colossal'),
							'src'   => ''
						)
					),
				),

				array(
					'id'      => 'pre_loading_logo',
					'label'   => esc_html__('Pre-loading Logo', 'colossal'),
					'desc'    => esc_html__('Preloading Logo. If not selected, Logo Image at Theme Options > General > Logo Image will be used', 'colossal'),
					'std'     => '',
					'type'    => 'upload',
					'section' => 'misc',
					'condition' => 'pre_loading:not(-1)'
				),

				array(
					'id'      => 'pre_loading_bg_color',
					'label'   => esc_html__('Pre-loading Background Color', 'colossal'),
					'desc'    => esc_html__('Default is Black', 'colossal'),
					'std'     => '',
					'type'    => 'colorpicker',
					'section' => 'misc',
					'condition' => 'pre_loading:not(-1)'
				),
				array(
					'id'      => 'pre_loading_icon_color',
					'label'   => esc_html__('Pre-loading Icon Color', 'colossal'),
					'desc'    => esc_html__('Default is White', 'colossal'),
					'std'     => '',
					'type'    => 'colorpicker',
					'section' => 'misc',
					'condition' => 'pre_loading:not(-1)'
				),
				array(
					'id'           => 'pre_loading_effect',
					'label'        => esc_html__('Pre-loading Effects', 'colossal'),
					'desc'         => '',
					'std'          => 'ball-grid-pulse',
					'type'         => 'radio-image',
					'section'      => 'misc',
					'rows'         => '',
					'post_type'    => '',
					'taxonomy'     => '',
					'min_max_step' => '',
					'class'        => '',
					'condition' => 'pre_loading:not(-1)',
					'choices'      => array(
						array(
							'value' => 'ball-pulse',
							'label' => esc_html__('Ball Pulse', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-pulse.gif'),
						),
						array(
							'value' => 'ball-grid-pulse',
							'label' => esc_html__('Ball Grid Pulse', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-grid-pulse.gif'),
						),
						array(
							'value' => 'ball-clip-rotate',
							'label' => esc_html__('Ball Clip Rotate', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-clip-rotate.gif'),
						),
						array(
							'value' => 'ball-clip-rotate-pulse',
							'label' => esc_html__('Ball Clip Rotate Pulse', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-clip-rotate-pulse.gif'),
						),
						array(
							'value' => 'square-spin',
							'label' => esc_html__('Square Spin', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/square-spin.gif'),
						),
						array(
							'value' => 'ball-clip-rotate-multiple',
							'label' => esc_html__('Ball Clip Rotate Multiple', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-clip-rotate-multiple.gif'),
						),
						array(
							'value' => 'ball-pulse-rise',
							'label' => esc_html__('Ball Pulse Rise', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-pulse-rise.gif'),
						),
						array(
							'value' => 'ball-rotate',
							'label' => esc_html__('Ball Rotate', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-rotate.gif'),
						),
						array(
							'value' => 'cube-transition',
							'label' => esc_html__('Cube Transition', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/cube-transition.gif'),
						),
						array(
							'value' => 'ball-zig-zag',
							'label' => esc_html__('Ball Zig Zag', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-zig-zag.gif'),
						),
						array(
							'value' => 'ball-zig-zag-deflect',
							'label' => esc_html__('Ball Zig Zag Deflect', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-zig-zag-deflect.gif'),
						),
						array(
							'value' => 'ball-triangle-path',
							'label' => esc_html__('Ball Triangle Path', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-triangle-path.gif'),
						),
						array(
							'value' => 'ball-scale',
							'label' => esc_html__('Ball Scale', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-scale.gif'),
						),
						array(
							'value' => 'line-scale',
							'label' => esc_html__('Line Scale', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/line-scale.gif'),
						),
						array(
							'value' => 'line-scale-party',
							'label' => esc_html__('Line Scale Party', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/line-scale-party.gif'),
						),
						array(
							'value' => 'ball-scale-multiple',
							'label' => esc_html__('Ball Scale Multiple', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-scale-multiple.gif'),
						),
						array(
							'value' => 'ball-pulse-sync',
							'label' => esc_html__('Ball Pulse Sync', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-pulse-sync.gif'),
						),
						array(
							'value' => 'ball-beat',
							'label' => esc_html__('Ball Beat', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-beat.gif'),
						),
						array(
							'value' => 'line-scale-pulse-out',
							'label' => esc_html__('Line Scale Pulse Out', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/line-scale-pulse-out.gif'),
						),
						array(
							'value' => 'line-scale-pulse-out-rapid',
							'label' => esc_html__('Line Scale Pulse Put Rapid', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/line-scale-pulse-out-rapid.gif'),
						),
						array(
							'value' => 'ball-scale-ripple',
							'label' => esc_html__('Ball Scale Ripple', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-scale-ripple.gif'),
						),
						array(
							'value' => 'ball-scale-ripple-multiple',
							'label' => esc_html__('Ball Scale Ripple Multiple', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-scale-ripple-multiple.gif'),
						),
						array(
							'value' => 'ball-spin-fade-loader',
							'label' => esc_html__('Ball Spin Fade Loader', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-spin-fade-loader.gif'),
						),
						array(
							'value' => 'line-spin-fade-loader',
							'label' => esc_html__('Line Spin Fade Loader', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/line-spin-fade-loader.gif'),
						),
						array(
							'value' => 'triangle-skew-spin',
							'label' => esc_html__('Triangle Skew Spin', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/triangle-skew-spin.gif'),
						),
						array(
							'value' => 'pacman',
							'label' => esc_html__('Pacman', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/pacman.gif'),
						),
						array(
							'value' => 'ball-grid-beat',
							'label' => esc_html__('Ball Grid Beat', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/ball-grid-beat.gif'),
						),
						array(
							'value' => 'semi-circle-spin',
							'label' => esc_html__('Semi Circle Spin', 'colossal'),
							'src'   => get_parent_theme_file_uri('/images/ajax-loading/semi-circle-spin.gif'),
						),

					),
				),
			)
		);

		/* Add settings panel for Thumb Sizes */
		$thumb_sizes = videopro_thumb_config::get_all();

		if ( is_array( $thumb_sizes ) ) {

			foreach ( $thumb_sizes as $size => $config ) {
				$custom_settings['settings'][] = array(
					'id'      => $size,
					'label'   => $config[3],
					'desc'    => $config[4],
					'std'     => 'on',
					'type'    => 'on-off',
					'section' => 'misc'
				);
			}

		}

		if ( class_exists( 'EasyTabShortcodes' ) ) {
			$custom_settings['settings'][] = array(
				'id'      => 'easy-tab-count',
				'label'   => esc_html__( 'Easy Widget Tab - Number of Tabs', '17jbh' ),
				'desc'    => esc_html__( 'Specify number of Tabs for Easy Widget Tab. Require "Easy Tab" plugin installed', '17jbh' ),
				'std'     => 2,
				'type'    => 'text',
				'section' => 'misc'
			);
		}

        $custom_settings['settings'][] = array(
            'id'      => 'use_sc_in_text_widget',
            'label'   => esc_html__( 'Using Shortcodes in Text Widget', '17jbh' ),
            'desc'    => esc_html__( 'For WordPress 4.8+: Allow using shortcodes in text widget like Posts Slider shortcode, Smart Content Box shortcode,...', '17jbh' ),
            'std'     => 'off',
            'type'    => 'on-off',
            'section' => 'misc'
        );

        if (is_plugin_active('buddypress/bp-loader.php')) {
            foreach ($custom_settings['settings'] as $key => $value) {
                if (isset($value['id']) && $value['id'] == 'login_redirect') {
                    $custom_settings['settings'][$key]['choices'][] = array(
                        'value' => 'buddypress_profile',
                        'label' => esc_html__('BuddyPress User Profile', '17jbh')
                    );
                }
            }
        }

		/* allow settings to be filtered before saving */
		$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

		/* settings are not the same update the DB */
		if ( $saved_settings !== $custom_settings ) {
			update_option( ot_settings_id(), $custom_settings );
		}

	}
