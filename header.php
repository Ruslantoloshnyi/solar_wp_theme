<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solar
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Solar</title>
	<?php wp_head(); ?>
</head>

<body>

	<!-- Header -->
	<header class="header">
		<div class="header-container">

			<h2 class="header-logo">SOLAR EXE</h2>

			<div class="header-content">
				<div class="header-content_one_size">Зеленый тариф для дома и бизнеса</div>
				<div class="header-content_two_size">Солнечная электростанция</div>
				<div class="header-content_three_size">с доходом от 1000 $ в месяц</div>
			</div>

			<div class="header-show-form">
				<button class="header-show-form__button">&#8594;</button>
				<p class="header-show-form_text">Записаться на консультацию</p>
			</div>

			<form class="header-consultation-form" style="display: none;" action="" method="POST">
				<input class="header-consultation-form__input" type="text" name="name" placeholder="Имя">
				<input class="header-consultation-form__input" type="text" name="phone" placeholder="Телефон">
				<input class="header-consultation-form__button" type="button" value="Записаться">
			</form>

			<div class="header-consultation_successfully" style="display: none;">Спасибо, мы перезвоним Вам в ближайшее
				время.</div>

			<div class="header-socials">
				<a href="#"><img class="header-socials_inst" src="./assets/image/instagram.png" alt=""></a>
				<a href="#"><img class="header-socials_tg" src="./assets/image/telegram.png" alt=""></a>
				<a href="#"><img class="header-socials_vb" src="./assets/image/whatsapp.png" alt=""></a>
				<a href="#"><img class="header-socials_fb" src="./assets/image/facebook.png" alt=""></a>
			</div>

		</div>
	</header> <!-- Header end -->