<?php

return array(
	'dishes' => array(
		'name' => 'Recetas',
		'term' => 'Recetas Artículo',
		'term_plural' => 'Artículos',
		'order' => 'ASC',
		'has_single' => true,
		'post_options' => array('supports'=>array('title', 'editor', 'excerpt', 'thumbnail', 'comments'), 'taxonomies' => array('post_tag'), 'has_archive'=>true),
		'taxonomy_options' => array('show_ui'=>true),
		'icon' => 'icons/portfolio.png',
		'options' => array(
			'rating' => array(
				'type' => 'select',
				'label' => array('default' => 'Califica la Receta', 'excellente' => 'Excellente', 'muy bueno' => 'Muy bueno', 'bueno' => 'Bueno', 'justa' => 'Justa', 'pobre' => 'Pobre',),
				'title' => 'Califica la Receta'
			),
			'icon' => array(
				'type' => 'image',
				'description' => 'Icono del Tiempo de Cocion',
				'title' => 'Icono del Tiempo de Cocion',
				'default' => 'holder.js/240x240/auto'
			),
			'background' => array(
				'type' => 'image',
				'title' => 'Header Background',
				'default' => 'holder.js/840x240/auto'
			),
			'duration' => array(
				'type' => 'line',
				'title' => 'Cooking Time',
				'description' => ''	
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'food_and_drinks',
				'view' => 'views/dishes-view',
				'shortcode_defaults' => array(
					'title' => '',
					'nr'=> '6',
					'all_button'=> '',
					'all_icon'=> '',
				)
			),
			'single' => array(
				'shortcode' => 'recipe',
				'view' => 'views/dishes-single-view',
				'shortcode_defaults' => array(
					'title' => '',
					'nr'=> '6'
				)
			)
		)
	),
	'gallery' => array(
		'name' => 'Galeria',
		'term' => 'Imagen de la galeria',
		'term_plural' => 'Imagenes de la galeria',
		'order' => 'ASC',
		'has_single' => false,
		'post_options' => array('supports'=>array('title')),
		'taxonomy_options' => array('show_ui'=>true),
		'icon' => 'icons/portfolio.png',
		'options' => array(
			'photo' => array(
				'type' => 'image',
				'description' => 'Foto de la galeria',
				'title' => 'Foto de la galeria',
				'default' => 'holder.js/940x799/auto'
			),
			'size' => array(
				'type' => 'select',
				'label' => array('default' => 'Select Size', 'original' => 'Full Width', 'half' => 'A Half From Full Width', 'third' => 'A Third From Full Width'),
				'title' => 'Select Width Of Column'
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'cuisinier_gallery',
				'view' => 'views/gallery-view',
				'shortcode_defaults' => array(
					'title' => '',
					'all_button' => 'Todas'
				)
			)
		)
	),
	'offers' => array(
		'name' => 'Ofertas Deslizante',
		'term' => 'Ofertas Deslizante',
		'term_plural' => 'Ofertas Deslizante',
		'order' => 'ASC',
		'has_single' => false,
		'post_options' => array('supports'=>array('title', 'thumbnail')),
		'taxonomy_options' => array('show_ui'=>false),
		'icon' => 'icons/portfolio.png',
		'options' => array(
			'label' => array(
				'type' => 'image',
				'title' => 'Poner su etiqueta',
				'default' => 'holder.js/200x80/auto'
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'offer_slider',
				'view' => 'views/offer-view',
				'shortcode_defaults' => array(
					'title' => '',
					'description' => '',
					'link' => '#',
					'addclass' => ''
				)
			)
		)
	),
	'recipe_gallery' => array(
		'name' => 'Galeria de Recetas',
		'term' => 'Galeria Deslice',
		'term_plural' => 'Galeria Deslice',
		'order' => 'ASC',
		'has_single' => false,
		'post_options' => array('supports'=>array('title', 'thumbnail')),
		'taxonomy_options' => array('show_ui'=>false),
		'icon' => 'icons/portfolio.png',
		'options' => array(
			'link' => array(
				'type' => 'line',
				'title' => 'Ponga el enlace de la Receta o la Galeria',
				'default' => 'holder.js/200x80/auto'
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'recipe_gallery',
				'view' => 'views/recipe-gallery-view',
				'shortcode_defaults' => array(
					'title' => '',
					'description' => '',
					'addclass' => ''
				)
			)
		)
	)
);