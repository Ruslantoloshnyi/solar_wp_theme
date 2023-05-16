<?php

function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a header block
		acf_register_block(array(
			'name'				=> 'header item',
			'title'				=> __('Шапка сайта'),
			'description'		=> __('A custom block for header.'),
			'render_template'	=> 'header.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'header' ),
		));

        acf_register_block(array(
			'name'				=> 'footer item',
			'title'				=> __('Подвал сайта'),
			'description'		=> __('A custom block for footer.'),
			'render_template'	=> 'footer.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'footer' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');