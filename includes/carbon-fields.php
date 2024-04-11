<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'pwdsuurehitus_carbon_fields' );

function pwdsuurehitus_carbon_fields() {

	// Главная страница - услуги
	Container::make( 'post_meta', __( 'Услуги' ) )
	->where( 'post_type', '=', 'page')
	->where( 'post_template', '=', 'page-templates/page-home.php')
	->add_fields( array(

		Field::make('textarea', 'services_block_subtitle', 'Подзаголовок слева')->set_width(30),
		Field::make('textarea', 'services_block_title', 'Большой заголовок справа')->set_width(70),

		Field::make('complex', 'services_cards', 'Карточки услуг')
		->add_fields('services_card', 'Карточка услуги', array(
			Field::make('text', 'services_card_title', 'Название услуги')->set_width(25),
			Field::make('textarea', 'services_card_description', 'Описание услуги')->set_width(25),
			Field::make('image', 'services_card_image', 'Картинка услуги')->set_width(25),
			Field::make('text', 'services_card_btn_text', 'Текст в круглой кнопке')->set_width(25),
		))

	) );

		// Главная страница - прайс
		Container::make( 'post_meta', __( 'Прайс' ) )
		->where( 'post_type', '=', 'page')
		->where( 'post_template', '=', 'page-templates/page-home.php')
		->add_fields( array(
			Field::make('text', 'price_block_subtitle', 'Подзаголовок слева')->set_width(50),
			Field::make('textarea', 'price_block_description', 'Короткий текст под заголовком')->set_width(50),
			Field::make('complex', 'price_items', 'Раскрывающиеся пункты прайса')
			->add_fields('price_item', 'Раскрывающийся пункт прайса', array(
				Field::make('text', 'price_item_title', 'Название раскрывающегося пункта'),
				Field::make('complex', 'price_rows', 'Строки с ценами')
				->add_fields('price_row', 'Строка с ценой', array(
					Field::make('text', 'price_row_name', 'Название услуги')->set_width(25),
					Field::make('text', 'price_row_cost', 'Цена услуги')->set_width(25),
					Field::make('image', 'price_row_image', 'Картинка услуги')->set_width(25),
					Field::make('text', 'price_row_btn_text', 'Текст в кнопке')->set_width(25),
				))
			)),
		) );

}