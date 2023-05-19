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
			'keywords'			=> array( 'tariff' ),
		));

		acf_register_block(array(
			'name'				=> 'quote item',
			'title'				=> __('Цитата блок'),
			'description'		=> __('A custom block quote.'),
			'render_template'	=> 'template-parts/front-page-parts/fp-quote.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'quote' ),
		));

		acf_register_block(array(
			'name'				=> 'Clients item',
			'title'				=> __('Наши клиенты'),
			'description'		=> __('A custom block for clients.'),
			'render_template'	=> 'template-parts/front-page-parts/fp-our-clients.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'clients' ),
		));

		acf_register_block(array(
			'name'				=> 'Steps item',
			'title'				=> __('Блок Шаги'),
			'description'		=> __('A custom block steps.'),
			'render_template'	=> 'template-parts/front-page-parts/fp-steps.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'steps' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');



