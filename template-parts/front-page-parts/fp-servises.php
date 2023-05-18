<?php 
$image = get_field('servises_image');
$img = wp_get_attachment_image($image, 'full');
?>
<div class="container">

    <!-- Serveses section -->
    <section class="servises-section">

        <div class="wrapper">

            <div class="section__head"><?php echo get_field('servises_heading'); ?></div>

            <div class="servises-section-content">

                <div class="servises-section-text">

                    <?php if (have_rows('servises_content')) :
                        while (have_rows('servises_content')) : the_row();
                    ?>
                            <div class="servises-section-text-block">
                                <div class="servises-section__text-head">
                                    <h2><?php echo get_sub_field('servises_content_head'); ?></h2>
                                </div>
                                <div class="servises-section__text-content">
                                    <p><?php echo get_sub_field('servises_content_text'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div class="servises-section__image">
                    <?php echo wp_get_attachment_image(get_field('servises_image'), 'full'); ?>
                </div>

            </div>
        </div>

    </section>