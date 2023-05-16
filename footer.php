<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solar
 */

?>

<!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="wrapper">
			<div class="footer-block">
				<div class="footer-form">
					<div class="footer__head">ОСТАВИТЬ ЗАЯВКУ</div>
					<div class="footer_successfully" style="display: none;">Спасибо, мы свяжемся с вами в ближайшее время</div>
					<form class="footer-form__fields" action="" method="POST">
						<input type="text" name="footer-name" placeholder="Имя">
						<input type="text" name="footer-phone" placeholder="Телефон">
						<div class="footer-form__fields-button">
							<button>&#8594;</button>
							<p>оставить заявку</p>
						</div>
					</form>
				</div>
				<div class="footer-contacts">
					<div class="footer__head">КОНТАКТЫ</div>
					<div>Центральный офис:<br>
						г. Москва, ул,Гоголя 13, 1й этаж
					</div>
					<div>Представительство в Киеве:<br>
						г. Киев, ул. Є. Коновальця, 103 оф. 410
					</div>
					<div>Представительства в Харькове, Одессе, Ростове, Сочи, Белгороде</div>
					<div>+7 987 654-54-56<br>
						+38 067 504-32-57
					</div>
					<div>Ежедневно 08:00 - 20:00</div>
				</div>
			</div>
			<div class="footer-social">
				<a href="#">Политика конфиденциальности</a>
				<div>SOLAR EXE</div>
				<div class="footer-social__image">
					<a href="#"><img src="./assets/image/instagram.png" alt=""></a>
					<a href="#"><img src="./assets/image/telegram.png" alt=""></a>
					<a href="#"><img src="./assets/image/whatsapp.png" alt=""></a>
					<a href="#"><img src="./assets/image/facebook.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>