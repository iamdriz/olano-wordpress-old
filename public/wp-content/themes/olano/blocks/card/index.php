<?php

function olano_card_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'olano-card-block',
		get_stylesheet_directory_uri() . '/blocks/card/block.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/card/block.js' )
	);

	register_block_type( 'olano/olano-card-block', array(
		'editor_script' => 'olano-card-block', // enqueues the script after register
	) );

}
add_action( 'init', 'olano_card_register_block' );