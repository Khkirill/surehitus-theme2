<?php

// Функция для распечатки различных массивов с информацией
function pwdsuurehitus_debug( $data ) {
	echo '<pre>' . print_r( $data, 1 ) . '</pre>';
}

/* Отключение панели администратора на фронтенде сайта */
add_filter( 'show_admin_bar', '__return_false' );

/* Отключение jquery-migrate.min.js */
add_filter( 'wp_default_scripts', 'pwd_suurehitus_remove_jquery_migrate' );

function pwd_suurehitus_remove_jquery_migrate( $scripts ) {
	if ( empty( $scripts->registered['jquery'] ) || is_admin() ) {
		return;
	}
	$deps = & $scripts->registered['jquery']->deps;
	$deps = array_diff( $deps, [ 'jquery-migrate' ] );
}


/* Подключение стилей и скриптов */
add_action( 'wp_enqueue_scripts', 'pwd_suurehitus_scripts_and_styles' );

function pwd_suurehitus_scripts_and_styles() {
    // Подключаем GSAP первым
    wp_enqueue_script( 'pwd-suurehitus-gsap', get_template_directory_uri() . '/assets/libs/gsap/js/gsap.min.js', array(), null, true );
	wp_enqueue_script( 'pwd-suurehitus-gsap-scrolltrigger', get_template_directory_uri() . '/assets/libs/gsap/js/ScrollTrigger.min.js', array(), null, true );
    wp_enqueue_script( 'pwd-suurehitus-gsap-scrollsmoother', get_template_directory_uri() . '/assets/libs/gsap/js/ScrollSmoother.min.js', array(), null, true );
		        


    // Подключаем остальные скрипты
    wp_enqueue_style( 'pwd-suurehitus-gfonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', array(), '1.0' );
    wp_enqueue_style( 'pwd-suurehitus-bootstrap-reboot', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap-reboot.min.css', array(), '1.0' );
    wp_enqueue_style( 'pwd-suurehitus-swiper-bundle', get_template_directory_uri() . '/assets/libs/swiper/css/swiper-bundle.css', array(), '1.0' );
    wp_enqueue_style( 'pwd-suurehitus-main-styles', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', false, null, true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-form' );
    wp_enqueue_script( 'first-form', get_stylesheet_directory_uri() . '/assets/js/first-form.js', array( 'jquery' ), time(), true );
    wp_localize_script(
        'first-form',
        'modal_form_object',
        array(
            'url'   => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'first-form-nonce' ),
        )
    );
    wp_enqueue_script( 'pwd-suurehitus-swiper-bundle', get_template_directory_uri() . '/assets/libs/swiper/js/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'pwd-suurehitus-micromodal', get_template_directory_uri() . '/assets/libs/micromodal/js/micromodal.js', array(), null, true );
    wp_enqueue_script( 'pwd-suurehitus-maska-nomera', get_template_directory_uri() . '/assets/libs/maska-nomera/js/maska-nomera.js', array( 'jquery' ), time(), true );
    wp_enqueue_script( 'pwd-suurehitus-main-scripts', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'pwd-suurehitus-custom-animation', get_template_directory_uri() . '/assets/js/custom-animation.js', array( 'jquery' ), null, true );
	//wp_enqueue_script( 'pwd-suurehitus-custom-animation2', get_template_directory_uri() . '/assets/js/custom-animation2.js', array( 'jquery' ), null, true );
}



/* Импорт строк для переводов - Polylang */
require get_template_directory() . '/includes/polylang-strings.php';

// Подключение настроек плагина Carbon Fields из файла
require_once get_stylesheet_directory(). '/includes/carbon-fields.php';

/* Подключение меню */
register_nav_menus(array(
	'languages_menu' => 'Меню выбора языка',
));


/* Включение миниатюр записей и регистрация новых размеров */
add_action( 'after_setup_theme', 'pwd_suurehitus_setup' );

function pwd_suurehitus_setup() {
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_image_size( 'photo', 1200, 600, true );
	add_image_size( 'avatar', 200, 200, true );
}


/* Валидация и отправка формы */
add_action( 'wp_ajax_first_form', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_first_form', 'ajax_action_callback' );

function ajax_action_callback() {

	// Массив ошибок
	$err_message = array();

	// Проверяем nonce. Если проверка не прошла, то блокируем отправку.
	if ( ! wp_verify_nonce( $_POST['nonce'], 'first-form-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса!' );
	}

	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку.
	if ( false === $_POST['art_anticheck'] || ! empty( $_POST['art_submitted'] ) ) {
		wp_die( 'А вот не надо нам тут спамить!' );
	}

	// Проверяем поле имени, если пустое, то пишем сообщение в массив ошибок.
	if ( empty( $_POST['art_name'] ) || ! isset( $_POST['art_name'] ) ) {
		$err_message['name'] = $_POST[ 'name-error-text' ];
	} else {
		$art_name = sanitize_text_field( $_POST['art_name'] );
	}

	// Проверяем поле телефона, если пустое, то пишем сообщение в массив ошибок.
	if ( empty( $_POST['art_tel'] ) || ! isset( $_POST['art_tel'] ) ) {
		$err_message['tel'] = $_POST[ 'name-error-tel' ];
	} else {
		$art_tel = sanitize_text_field( $_POST['art_tel'] );
	}

	// Проверяем поле емайла, если пустое, то пишем сообщение в массив ошибок.
	if ( empty( $_POST['art_email'] ) || ! isset( $_POST['art_email'] ) ) {
		$err_message['email'] = $_POST[ 'name-error-email' ];
	} elseif ( ! preg_match( '/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i', $_POST['art_email'] ) ) {
		$err_message['email'] = $_POST[ 'name-incorrect-email' ];
	} else {
		$art_email = sanitize_email( $_POST['art_email'] );
	}

	// Проверяем поле темы письма, если пустое, то пишем сообщение по умолчанию.
	if ( empty( $_POST['art_subject'] ) || ! isset( $_POST['art_subject'] ) ) {
		$art_subject = 'Заявка с сайта';
	} else {
		$art_subject = sanitize_text_field( $_POST['art_subject'] );
	}

	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		// Указываем адресата
		$email_to = 'suurehitusou@gmail.com';

		// Если адресат не указан, то берем данные из настроек сайта
		if ( ! $email_to ) {
			$email_to = get_option( 'admin_email' );
		}

		$body    = "Имя: $art_name \nEmail: $art_email \nТелефон: $art_tel";

		// Отправляем письмо
		wp_mail( $email_to, $art_subject, $body, $headers );

		// Отправляем сообщение об успешной отправке
		// $message_success = 'Собщение отправлено! Но перезванивать мы вам не будем!';
		$message_success = $_POST[ 'success-text' ];
		wp_send_json_success( $message_success );
	}

	// На всякий случай убиваем еще раз процесс ajax
	wp_die();

}