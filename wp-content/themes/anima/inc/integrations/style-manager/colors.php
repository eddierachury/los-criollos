<?php

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add colors section and options to the Style Manager config
add_filter( 'style_manager/filter_fields', 'pixelgrade_add_colors_section_to_style_manager_config', 50, 1 );

// Prepend theme color palette to the default color palettes list
// add_filter( 'style_manager/get_color_palettes', 'pixelgrade_add_default_color_palettes' );

function pixelgrade_add_colors_section_to_style_manager_config( $config ) {

	if ( ! function_exists( 'sm_get_color_switch_dark_config' ) ||
	     ! function_exists( 'sm_get_color_switch_darker_config' ) ) {
		return $config;
	}

	if ( empty( $config['sections'] ) ) {
		$config['sections'] = [];
	}

	if ( ! isset( $config['sections']['colors_section'] ) ) {
		$config['sections']['colors_section'] = [];
	}

	// The section might be already defined, thus we merge, not replace the entire section config.
	$config['sections']['colors_section'] = \Pixelgrade\StyleManager\Utils\ArrayHelpers::array_merge_recursive_distinct( $config['sections']['colors_section'], [
		'title'   => esc_html__( 'Elements coloration', 'anima' ),
		'options' => [
			'sm-description_colorize_elements_intro' => [
				'type' => 'html',
				'html' => sprintf(
					/* translators: %s: Open and close for the anchor to the documentation.  */
					esc_html__( 'Apply color to %scertain elements%s from your site you wish to get more attention.', 'anima' ),
				'<a href="https://pixelgrade.com/docs/design-and-style/color-system/#change-elements-color-one-by-one" target="_blank">',
				'</a>' ),
			],

			'main_content_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Main Content', 'anima' ) . '</span>',
			],

			'page_title' => sm_get_color_switch_dark_config( esc_html__( 'Page title', 'anima' ), '.page-title, .entry-title', false, 2 ),
			'body_color' => sm_get_color_switch_dark_config( esc_html__( 'Body text', 'anima' ), 'html, [class*="sm-variation-"]', false, 0 ),
			'links_color' => sm_get_color_switch_dark_config( esc_html__( 'Body links', 'anima' ), 'a', true, 1, '--theme-links-color' ),
			'heading_links_color' => sm_get_color_switch_dark_config( esc_html__( 'Heading links', 'anima' ), 'h1 a, h2 a, h3 a, h4 a, h5 a, h6 a', false, 2, '--theme-links-color' ),

			'sm-group-separator-1' => [ 'type' => 'html', 'html' => '' ],

			'colors_header_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Header', 'anima' ) . '</span>',
			],

			'menu_item_color' => sm_get_color_switch_dark_config( esc_html__( 'Navigation links', 'anima' ), '.nb-navigation', false, 1, [ 'color', '--theme-navigation-links-color' ] ),
			'menu_active_item_color' => sm_get_color_switch_dark_config( esc_html__( 'Navigation active link', 'anima' ), '.nb-navigation > ul > li[class*="current"]', true, 3 ),

			'sm-group-separator-2' => [ 'type' => 'html', 'html' => '' ],

			'colors_headings_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Headings', 'anima' ) . '</span>',
			],

			'super_display_color' => sm_get_color_switch_darker_config( esc_html__( 'Super Display', 'anima' ), '*', false, 1, [ '--theme-super-display-color' ] ),
			'display_color'       => sm_get_color_switch_darker_config( esc_html__( 'Display', 'anima' ), '*', false, 1, [ '--theme-display-color' ] ),
			'heading_1_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 1', 'anima' ), '*', false, 1, [ '--theme-heading-1-color' ] ),
			'heading_2_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 2', 'anima' ), '*', false, 1, [ '--theme-heading-2-color' ] ),
			'heading_3_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 3', 'anima' ), '*', false, 2, [ '--theme-heading-3-color' ] ),
			'heading_4_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 4', 'anima' ), '*', false, 2, [ '--theme-heading-4-color' ] ),
			'heading_5_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 5', 'anima' ), '*', false, 3, [ '--theme-heading-5-color' ] ),
			'heading_6_color'     => sm_get_color_switch_darker_config( esc_html__( 'Heading 6', 'anima' ), '*', false, 3, [ '--theme-heading-6-color' ] ),

			'sm-group-separator-3' => [ 'type' => 'html', 'html' => '' ],

			'colors_buttons_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Buttons', 'anima' ) . '</span>',
			],

			'solid_button' => sm_get_color_switch_dark_config( 'Buttons', '*', false, 3, '--sm-button-background-color' ),

			'sm-group-separator-4' => [ 'type' => 'html', 'html' => '' ],

			'colors_novablocks_headline_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Headline Block', 'anima' ) . '</span>',
			],

			'novablocks_headline_primary' => sm_get_color_switch_darker_config( esc_html__( 'Headline primary', 'anima' ), '.c-headline__primary', false, 2 ),
			'novablocks_headline_secondary' => sm_get_color_switch_darker_config( esc_html__( 'Headline secondary', 'anima' ), '.c-headline__secondary, :is(h1, h2, h3, h4, h5, h6) em', true, 3 ),

			'colors_novablocks_card_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Card Block', 'anima' ) . '</span>',
			],

			'novablocks_card_meta_first' => sm_get_color_switch_darker_config( esc_html__( 'Meta', 'anima' ), '.nb-card__meta--primary', false, 2 ),
			'novablocks_card_title' => sm_get_color_switch_darker_config( esc_html__( 'Title', 'anima' ), '.nb-card__title a', false, 2 ),

			'colors_post_meta_section_title' => [
				'type' => 'html',
				'html' => '<span class="sm-group__title">' . esc_html__( 'Post Meta', 'anima' ) . '</span>',
			],
			'colors_post_meta_author' => sm_get_color_switch_dark_config( esc_html__( 'Author', 'anima' ), '.c-meta-author__body .author a', true, 1 ),

			'sm-description_colorize_elements_outro' => [
				'type' => 'html',
				'html' => sprintf(
					/* translators: %s: Open and close for the anchor to the documentation.  */
					esc_html__( 'For elements that are not available in this list,  you can %schange their coloration%s by using CSS code snippets.', 'anima' ),
				'<a href="https://pixelgrade.com/docs/advanced-customizations/using-custom-css-editor/" target="_blank">',
				'</a>' ),
			],

		],
	] );

	return $config;
}

function pixelgrade_add_default_color_palettes( $color_palettes ) {

	return array_merge( [
		'default' => [
			'id'           => 0,
			'label'        => esc_html__( 'Theme Default', 'anima' ),
			'description'  => esc_html__( 'Anima is to colors what wisdom is to knowledge.', 'anima' ),
			'preview'      => [
				'background_image_url' => '//cloud.pixelgrade.com/wp-content/uploads/2018/07/rosa-palette.jpg',
			],
			'color_groups' => [
				[
					'_uid'    => 'color_group_1',
					'sources' => [
						[
							'_uid'  => 'color_11',
							'label' => esc_html__( 'Brand Primary', 'anima' ),
							'color' => '#ddaa61'
						]
					]
				],
				[
					'_uid'    => 'color_group_2',
					'sources' => [
						[
							'_uid'  => 'color_21',
							'label' => esc_html__( 'Secondary', 'anima' ),
							'color' => '#39497C'
						]
					]
				],
				[
					'_uid'    => 'color_group_3',
					'sources' => [
						[
							'_uid'  => 'color_31',
							'label' => esc_html__( 'Tertiary', 'anima' ),
							'color' => '#B12C4A'
						]
					]
				]
			],
			'tags'         => [],
			'hashid'       => 'default',
		],
	], $color_palettes );
}
