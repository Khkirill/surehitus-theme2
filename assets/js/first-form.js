jQuery(document).ready(function ($) {
	var add_form = $('#firts-form');

	// Сброс значений полей
	$('#firts-form input, #firts-form textarea').on('blur', function () {
			$('#firts-form input, #firts-form textarea').removeClass('error');
			$('.error-name,.error-tel,.error-email,.error-comments,.form__success').remove();
	});

	// Отправка значений полей
	var options = {
		url: modal_form_object.url,
		data: {
			action: 'first_form',
			nonce: modal_form_object.nonce
		},
		type: 'POST',
		dataType: 'json',
		success: function (request, xhr, status, error) {
			if (request.success === true) {
				// Если все поля заполнены, отправляем данные, показываем уведомление
				add_form.before('<div class="form__success">' + request.data + '</div>').slideDown();
			} else {
				// Если поля не заполнены, выводим сообщения
				$.each(request.data, function (key, val) {
						$('.art_' + key).addClass('error');
						$('.art_' + key).after('<span class="error-' + key + '">' + val + '</span>');
				});
			}
			// При успешной отправке сбрасываем значения полей
			$('#firts-form')[0].reset();
		},
	};
	// Отправка формы
	add_form.ajaxForm(options);
});