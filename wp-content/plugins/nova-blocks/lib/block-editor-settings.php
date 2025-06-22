<?php
/**
 * Set up the NovaBlocks block editor settings array to be sent to the client-side.
 *
 * @since   2.0.0
 * @license GPL-2.0-or-later
 * @package NovaBlocks
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function novablocks_get_block_editor_settings(): array {

	$settings = [
		'debug'                        => defined( 'NOVABLOCKS_DEBUG' ) && NOVABLOCKS_DEBUG,
		'usePostMetaAttributes'        => defined( 'NOVABLOCKS_USE_POST_META_ATTRIBUTES' ) && NOVABLOCKS_USE_POST_META_ATTRIBUTES,
		'minimumHeightOptions'         => [
			[
				'label' => esc_html__( 'None', 'nova-blocks' ),
				'value' => 0,
			],
			[
				'label' => esc_html__( 'Half', 'nova-blocks' ),
				'value' => 50,
			],
			[
				'label' => esc_html__( 'Two Thirds', 'nova-blocks' ),
				'value' => 66,
			],
			[
				'label' => esc_html__( 'Three Quarters', 'nova-blocks' ),
				'value' => 75,
			],
			[
				'label' => esc_html__( 'Full', 'nova-blocks' ),
				'value' => 100,
			],
		],
		'contentPaddingOptions'        => [
			[
				'label' => esc_html__( 'Small', 'nova-blocks' ),
				'value' => 'small',
			],
			[
				'label' => esc_html__( 'Medium', 'nova-blocks' ),
				'value' => 'medium',
			],
			[
				'label' => esc_html__( 'Large', 'nova-blocks' ),
				'value' => 'large',
			],
			[
				'label' => esc_html__( 'Custom', 'nova-blocks' ),
				'value' => 'custom',
			],
		],
		'contentWidthOptions'          => [
			[
				'label' => esc_html__( 'Full', 'nova-blocks' ),
				'value' => 'full',
			],
			[
				'label' => esc_html__( 'Large', 'nova-blocks' ),
				'value' => 'large',
			],
			[
				'label' => esc_html__( 'Narrow', 'nova-blocks' ),
				'value' => 'narrow',
			],
			[
				'label' => esc_html__( 'Custom', 'nova-blocks' ),
				'value' => 'custom',
			],
		],
		'motionPresetOptions'          => [
			[
				'label'  => 'Standard Dynamic',
				'value'  => 'standard-dynamic',
				'preset' => [
					'focalPoint'             => [
						'x' => 0.5,
						'y' => 0,
					],
					'finalFocalPoint'        => [
						'x' => 0.5,
						'y' => 1,
					],
					'initialBackgroundScale' => 1.75,
					'finalBackgroundScale'   => 1,
					'followThroughStart'     => true,
					'followThroughEnd'       => true,
				],
			],
			[
				'label'  => 'Pull Focus',
				'value'  => 'pull-focus',
				'preset' => [
					'focalPoint'             => [
						'x' => 0.5,
						'y' => 0.5,
					],
					'finalFocalPoint'        => [
						'x' => 0.5,
						'y' => 1,
					],
					'initialBackgroundScale' => 1,
					'finalBackgroundScale'   => 1.75,
					'followThroughStart'     => true,
					'followThroughEnd'       => true,
				],
			],
			[
				'label'  => 'Static Reveal',
				'value'  => 'static-reveal',
				'preset' => [
					'focalPoint'             => [
						'x' => 0.5,
						'y' => 0.5,
					],
					'finalFocalPoint'        => [
						'x' => 0.5,
						'y' => 0.5,
					],
					'initialBackgroundScale' => 1.75,
					'finalBackgroundScale'   => 1,
					'followThroughStart'     => true,
					'followThroughEnd'       => true,
				],
			],
			[
				'label' => 'Custom',
				'value' => 'custom',
			],
		],
		'advancedGalleryPresetOptions' => novablocks_get_media_composition_markup_presets(),
		'blobPresetOptions'            => novablocks_get_blob_presets(),
		'scrollingEffectOptions'       => [
			[
				'label' => esc_html__( 'Static', 'nova-blocks' ),
				'value' => 'static',
			],
			[
				'label' => esc_html__( 'Parallax', 'nova-blocks' ),
				'value' => 'parallax',
			],
		],
		'separator'                    => [
			'markup' => '<hr />',
		],
		'theme_support'                => novablocks_get_theme_support(),
		'modules'                      => [],
	];

	$settings['modules']['spaceAndSizing'] = [
		'presetOptions'         => novablocks_get_space_and_sizing_presets(),
		'advancedPresetOptions' => novablocks_get_space_and_sizing_advanced_presets(),
	];

	$settings = apply_filters( 'novablocks/block_editor_initial_settings', $settings );
	$settings = apply_filters( 'novablocks_block_editor_settings', $settings );

	return $settings;
}

function novablocks_get_blob_presets(): array {
	return [
		[
			'label'  => 'Rectangle',
			'value'  => 'rectangle',
			'preset' => [
				'blobsEnableMask'       => false,
				'blobsEnableDecoration' => false,
			],
		],
		[
			'label'  => 'Ellipse',
			'value'  => 'ellipse',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 4,
				'blobMaskPatternSeed' => 1,
				'blobMaskComplexity'  => 0,
				'blobMaskSmoothness'  => 100,
				'blobMaskRotation'    => 0,

				'blobsEnableDecoration' => false,
			],
		],
		[
			'label'  => 'Diamond',
			'value'  => 'diamond',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 6,
				'blobMaskPatternSeed' => 1,
				'blobMaskComplexity'  => 0,
				'blobMaskSmoothness'  => 0,
				'blobMaskRotation'    => 0,

				'blobsEnableDecoration' => false,
			],
		],
		[
			'label'  => 'Seed',
			'value'  => 'seed',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 5,
				'blobMaskPatternSeed' => 70,
				'blobMaskComplexity'  => 100,
				'blobMaskSmoothness'  => 100,
				'blobMaskRotation'    => 0,

				'blobsEnableDecoration' => false,
			],
		],
		[
			'label'  => 'Blob',
			'value'  => 'blob',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 7,
				'blobMaskPatternSeed' => 50,
				'blobMaskComplexity'  => 100,
				'blobMaskSmoothness'  => 100,
				'blobMaskRotation'    => 0,

				'blobsEnableDecoration' => false,
			],
		],
		[
			'label'  => 'MX37: Stones',
			'value'  => 'stones-37',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 3,
				'blobMaskPatternSeed' => 30,
				'blobMaskComplexity'  => 100,
				'blobMaskSmoothness'  => 60,
				'blobMaskRotation'    => 70,

				'blobsEnableDecoration' => true,
				'blobSides'             => 4,
				'blobPatternSeed'       => 30,
				'blobComplexity'        => 90,
				'blobSmoothness'        => 100,
				'blobRotation'          => 70,

				'blobsHorizontalDisplacement' => 80,
				'blobsVerticalDisplacement'   => 60,
				'blobsSizeBalance'            => 60,
			],
		],
		[
			'label'  => 'MX19: Seeds',
			'value'  => 'seeds-19',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 5,
				'blobMaskPatternSeed' => 90,
				'blobMaskComplexity'  => 80,
				'blobMaskSmoothness'  => 100,
				'blobMaskRotation'    => 50,

				'blobsEnableDecoration' => true,
				'blobSides'             => 5,
				'blobPatternSeed'       => 40,
				'blobComplexity'        => 80,
				'blobSmoothness'        => 100,
				'blobRotation'          => 100,

				'blobsHorizontalDisplacement' => 30,
				'blobsVerticalDisplacement'   => 60,
				'blobsSizeBalance'            => 50,
			],
		],
		[
			'label'  => 'MX81: Ovoid',
			'value'  => 'ovoid-81',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 6,
				'blobMaskPatternSeed' => 10,
				'blobMaskComplexity'  => 100,
				'blobMaskSmoothness'  => 100,
				'blobMaskRotation'    => 100,

				'blobsEnableDecoration' => true,
				'blobSides'             => 3,
				'blobPatternSeed'       => 50,
				'blobComplexity'        => 100,
				'blobSmoothness'        => 50,
				'blobRotation'          => 40,

				'blobsHorizontalDisplacement' => 40,
				'blobsVerticalDisplacement'   => 30,
				'blobsSizeBalance'            => 45,
			],
		],
		[
			'label'  => 'MX76: Leaf',
			'value'  => 'leaf-76',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 3,
				'blobMaskPatternSeed' => 100,
				'blobMaskComplexity'  => 100,
				'blobMaskSmoothness'  => 60,
				'blobMaskRotation'    => 80,

				'blobsEnableDecoration' => true,
				'blobSides'             => 6,
				'blobPatternSeed'       => 70,
				'blobComplexity'        => 100,
				'blobSmoothness'        => 100,
				'blobRotation'          => 10,

				'blobsHorizontalDisplacement' => 40,
				'blobsVerticalDisplacement'   => 40,
				'blobsSizeBalance'            => 45,
			],
		],
		[
			'label'  => 'MX19: Ruby',
			'value'  => 'ruby-19',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 5,
				'blobMaskPatternSeed' => 0,
				'blobMaskComplexity'  => 0,
				'blobMaskSmoothness'  => 0,
				'blobMaskRotation'    => 10,

				'blobsEnableDecoration' => true,
				'blobSides'             => 5,
				'blobPatternSeed'       => 0,
				'blobComplexity'        => 0,
				'blobSmoothness'        => 0,
				'blobRotation'          => 40,

				'blobsHorizontalDisplacement' => 40,
				'blobsVerticalDisplacement'   => 30,
				'blobsSizeBalance'            => 50,
			],
		],
		[
			'label'  => 'MX41: Diagonal',
			'value'  => 'diagonal-41',
			'preset' => [
				'blobsEnableMask'     => true,
				'blobMaskSides'       => 8,
				'blobMaskPatternSeed' => 0,
				'blobMaskComplexity'  => 0,
				'blobMaskSmoothness'  => 0,
				'blobMaskRotation'    => 0,

				'blobsEnableDecoration' => true,
				'blobSides'             => 4,
				'blobPatternSeed'       => 60,
				'blobComplexity'        => 100,
				'blobSmoothness'        => 0,
				'blobRotation'          => 50,

				'blobsHorizontalDisplacement' => 55,
				'blobsVerticalDisplacement'   => 45,
				'blobsSizeBalance'            => 35,
			],
		],
	];
}

function novablocks_get_media_composition_markup_presets(): array {
	return [
		[
			'label'  => 'The Cloud Atlas',
			'value'  => 'the-cloud-atlas',
			'preset' => [
				'sizeContrast'       => 0,
				'positionShift'      => 0,
				'imageRotation'      => 0,
				'elementsDistance'   => 20,
				'placementVariation' => 25,
			],
		],
		[
			'label'  => 'Pride and Prejudice',
			'value'  => 'pride-and-prejudice',
			'preset' => [
				'sizeContrast'       => 60,
				'positionShift'      => 70,
				'imageRotation'      => 0,
				'elementsDistance'   => 40,
				'placementVariation' => 0,
			],
		],
		[
			'label'  => 'Brave New World',
			'value'  => 'brave-new-world',
			'preset' => [
				'sizeContrast'       => 20,
				'positionShift'      => 25,
				'imageRotation'      => 0,
				'elementsDistance'   => 20,
				'placementVariation' => 50,
			],
		],
		[
			'label'  => 'A Walk to Remember',
			'value'  => 'a-walk-to-remember',
			'preset' => [
				'sizeContrast'       => 100,
				'positionShift'      => 50,
				'imageRotation'      => 0,
				'elementsDistance'   => 20,
				'placementVariation' => 25,
			],
		],
		[
			'label'  => 'Racing in the Rain',
			'value'  => 'racing-in-the-rain',
			'preset' => [
				'sizeContrast'       => 80,
				'positionShift'      => 80,
				'imageRotation'      => 0,
				'elementsDistance'   => 40,
				'placementVariation' => 25,
			],
		],
		[
			'label'  => 'The Sun Also Rises',
			'value'  => 'the-sun-also-rises',
			'preset' => [
				'sizeContrast'       => 20,
				'positionShift'      => 75,
				'imageRotation'      => 40,
				'elementsDistance'   => 20,
				'placementVariation' => 25,
			],
		],
		[
			'label'  => 'Memoirs of a Geisha',
			'value'  => 'memoirs-of-a-geisha',
			'preset' => [
				'sizeContrast'       => 80,
				'positionShift'      => 0,
				'imageRotation'      => 0,
				'elementsDistance'   => 20,
				'placementVariation' => 50,
			],
		],
	];
}

function novablocks_get_space_and_sizing_presets(): array {
	return [
		[
			'label'  => esc_html__( 'Default Block Spacing', 'nova-blocks' ),
			'value'  => 'default',
			'preset' => [
				'blockTopSpacing'       => 1,
				'blockBottomSpacing'    => 0,
				'emphasisTopSpacing'    => 0,
				'emphasisBottomSpacing' => 0,
				'enableOverlapping'     => false,
				'verticalAlignment'     => 'center',
			],
		],
		[
			'label'  => esc_html__( 'Overlap Nearby Blocks / Bottom', 'nova-blocks' ),
			'value'  => 'overlap-nearby-2',
			'preset' => [
				'blockTopSpacing'       => 0,
				'blockBottomSpacing'    => - 2,
				'emphasisTopSpacing'    => 2,
				'emphasisBottomSpacing' => - 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'top',
			],
		],
		[
			'label'  => esc_html__( 'Overlap Nearby Blocks / Centered', 'nova-blocks' ),
			'value'  => 'overlap-nearby-1',
			'preset' => [
				'blockTopSpacing'       => - 2,
				'blockBottomSpacing'    => - 2,
				'emphasisTopSpacing'    => - 2,
				'emphasisBottomSpacing' => - 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'center',
			],
		],
		[
			'label'  => esc_html__( 'Overlap Nearby Blocks / Top', 'nova-blocks' ),
			'value'  => 'overlap-nearby-3',
			'preset' => [
				'blockTopSpacing'       => - 2,
				'blockBottomSpacing'    => 0,
				'emphasisTopSpacing'    => - 2,
				'emphasisBottomSpacing' => 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'bottom',
			],
		],
	];
}

function novablocks_get_space_and_sizing_advanced_presets(): array {
	return [
		[
			'label'  => esc_html__( 'Overlap 1 / Top Anchoring', 'nova-blocks' ),
			'value'  => 'overlap1',
			'preset' => [
				'blockTopSpacing'       => 0,
				'blockBottomSpacing'    => 2,
				'emphasisTopSpacing'    => - 2,
				'emphasisBottomSpacing' => - 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'top',
			],
		],
		[
			'label'  => esc_html__( 'Overlap 2 / Centered', 'nova-blocks' ),
			'value'  => 'overlap2',
			'preset' => [
				'blockTopSpacing'       => 1,
				'blockBottomSpacing'    => 1,
				'emphasisTopSpacing'    => - 2,
				'emphasisBottomSpacing' => - 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'center',
			],
		],
		[
			'label'  => esc_html__( 'Overlap 3 / Bottom Anchoring', 'nova-blocks' ),
			'value'  => 'overlap3',
			'preset' => [
				'blockTopSpacing'       => 2,
				'blockBottomSpacing'    => 0,
				'emphasisTopSpacing'    => - 2,
				'emphasisBottomSpacing' => - 2,
				'enableOverlapping'     => true,
				'verticalAlignment'     => 'bottom',
			],
		],
	];
}

function novablocks_disable_block_editor_layout( $settings, $context ) {
	$settings[ 'supportsLayout' ] = false;

	return $settings;
}
add_filter( 'block_editor_settings_all', 'novablocks_disable_block_editor_layout', PHP_INT_MAX, 2 );

function novablocks_get_facets() {
	$facetwp_settings_option = get_option( 'facetwp_settings' );
	$facetwp_settings = ( false !== $facetwp_settings_option ) ? json_decode( $facetwp_settings_option, true ) : [];

	if ( ! isset( $facetwp_settings['facets'] ) ) {
		$facetwp_settings['facets'] = [];
	}

	return apply_filters( 'facetwp_facets', $facetwp_settings['facets'] );
}

function novablocks_settings_add_facetwp_facets( $novablocks_settings ) {
	$facets = novablocks_get_facets();

	if ( ! empty( $facets ) ) {
		$novablocks_settings[ 'facetwp_facets' ] = $facets;
	}

	return $novablocks_settings;
}
add_filter( 'novablocks_block_editor_settings', 'novablocks_settings_add_facetwp_facets' );
