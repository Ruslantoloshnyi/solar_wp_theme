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
					<div class="footer__head"><?php echo get_field('footer_heading'); ?></div>
					<div class="footer_successfully" style="display: none;"><?php echo get_field('footer_successfully'); ?></div>
					<form class="footer-form__fields" action="" method="POST">
						<input type="text" name="footer-name" placeholder="Имя">
						<input type="text" name="footer-phone" placeholder="Телефон">
						<div class="footer-form__fields-button">
							<button>&#8594;</button>
							<p><?php echo get_field('footer_button_text'); ?></p>
						</div>
					</form>
				</div>
				<div class="footer-contacts">
					<div class="footer__head"><?php echo get_field('footer_contacts_heading'); ?></div>
					<div><?php echo get_field('footer_contacts_content'); ?></div>
				</div>
			</div>
			<div class="footer-social">
				<a href="#">Политика конфиденциальности</a>
				<div><?php echo get_field('footer_logo'); ?></div>
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