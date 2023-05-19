<!-- Our clients section -->
<section class="clients-section">

    <div class="container">
        <div class="wrapper">
            <div class="section__head"><?php echo get_field('fp_clients_heading') ?></div>
            <div class="clients-section-block">
                <div class="clietns-slider">
                    <div class="clients-slider__image">
                        <?php if (have_rows('fp_clients_slider')) :
                            while (have_rows('fp_clients_slider')) : the_row();
                                $attr = ['class' => 'clients-slide'];
                                echo wp_get_attachment_image(get_sub_field('fp_clients_slider_image'), 'full', true, $attr);
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="clients-slider__arrow">
                        <div class="arrow_left-pointer">
                            <div class="arrow_left"></div>
                        </div>
                        <div class="arrow_right-pointer">
                            <div class="arrow_right"></div>
                        </div>
                    </div>
                </div>

                <div class="clients-content">
                    <?php if (have_rows('fp_clients_slider')) :
                        while (have_rows('fp_clients_slider')) : the_row();
                    ?>
                            <div class="clients-content-slider">
                                <div class="clients-content__head">
                                    <p><?php echo get_sub_field('fp_slider_content_head'); ?></p>
                                </div>
                                <div class="clients-content__text">
                                    <p><?php echo get_sub_field('fp_slider_content_text'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="clients-content-show-form">
                        <button class="clients-content-show-form__button">&#8594;</button>
                        <p class="clients-content-show-form__text"><?php echo get_field('fp_clients_form_text'); ?></p>
                    </div>
                    <div class="clients-content_successfully" style="display: none;"><?php echo get_field('fp_clients_form_successfully'); ?></div>
                    <form class="clients-content-consultation-form" style="display: none;" action="" method="POST">
                        <input class="clients-content-consultation-form__input" type="text" name="name" placeholder="Имя">
                        <input class="clients-content-consultation-form__input" type="text" name="phone" placeholder="Телефон">
                        <input class="clients-content-consultation-form__button" type="button" value="Записаться">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Our clietns section end-->