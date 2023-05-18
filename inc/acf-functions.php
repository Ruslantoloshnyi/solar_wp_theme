<?php

function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {		

		acf_register_block(array(
			'name'				=> 'servises item',
			'title'				=> __('Блок услуги'),
			'description'		=> __('A custom block servises.'),
			'render_template'	=> 'template-parts/front-page-parts/fp-servises.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'servises' ),
		));

		acf_register_block(array(
			'name'				=> 'green tariff item',
			'title'				=> __('Зеленый тариф'),
			'description'		=> __('A custom block green tariff.'),
			'render_template'	=> 'template-parts/front-page-parts/fp-green-tariff.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'servises' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');



