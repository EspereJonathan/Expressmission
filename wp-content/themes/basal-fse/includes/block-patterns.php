<?php
/**
 * Basal FSE : Block Patterns
 *
 * @since Basal FSE 1.0
 */

function basal_fse_patterns_register_block_patterns() {
	$block_pattern_categories = array(
		'basal-fse' => array( 'label' => __( 'Basal FSE', 'basal-fse' ) ),
		'basal-fse-other-patterns' => array( 'label' => __( 'Basal FSE Theme Other Patterns', 'basal-fse' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Basal FSE 1.0
	 *
	 */
	$block_pattern_categories = apply_filters( 'basal_fse_patterns_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}

	$block_patterns = array(
		'basal-fse-header',	
		'basal-fse-hero-banner',
		'basal-fse-section1',
		'basal-fse-section2',
		'basal-fse-section3',
		'basal-fse-footer',	
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Basal FSE 1.0
	 * 
	 * @param array $block_patterns List of block patterns by name.
	 *
	 */
	$block_patterns = apply_filters( 'basal_fse_patterns_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'basal-fse/' . $block_pattern,
			require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'basal_fse_patterns_register_block_patterns', 9 );
