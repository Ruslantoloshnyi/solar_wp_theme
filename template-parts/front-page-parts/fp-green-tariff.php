<!-- Green tariff section -->
<section class="green-tariff-section">
    <div class="wrapper">
        <div class="section__head"><?php echo get_field('green_tariff_heading'); ?></div>
        <div class="green-tariff-subhead">
            <div class="green-tariff__link">
                <p data-linkNum="1"><?php echo get_field('num_link_one'); ?></p>
                <p data-linkNum="2"><?php echo get_field('num_link_two'); ?></p>
                <p data-linkNum="3"><?php echo get_field('num_link_three'); ?></p>
            </div>

            <div class="green-tariff__text">
                <p><?php echo get_field('green_tariff_text'); ?></p>
            </div>
        </div>

        <div class="green-tariff-content">
            <div class="green-tariff-content-block green-tariff-content-block_one" data-linkNum="1">

                <div class="green-tariff-content-slider">
                    <div class="green-tariff-content-slider__image">
                        <?php echo wp_get_attachment_image(get_field('gt_slider_image_num_link_one'), 'full') ?>
                    </div>
                    <div class="green-tariff-content-slider__text">
                        <?php if (have_rows('gt_slider_content_num_link_1')) :
                            while (have_rows('gt_slider_content_num_link_1')) : the_row();
                        ?>
                                <p><?php echo get_sub_field('gt_slider_text_num_link_1'); ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="green-tariff-slider__arrow">
                            <div class="arrow_left-pointer">
                                <div class="arrow_left"></div>
                            </div>
                            <div class="arrow_right-pointer">
                                <div class="arrow_right"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="green-tariff-content__text">
                    <div>
                        <h2><?php echo get_field('gt_content_text_head_one_link_one'); ?></h2>
                        <p><?php echo get_field('gt_content_text_one_link_one'); ?></p>
                    </div>
                    <div>
                        <h2><?php echo get_field('gt_content_text_head_two_link_one'); ?></h2>
                        <p><?php echo get_field('gt_content_text_two_link_one') ?></p>
                    </div>
                </div>

                <div class="green-tariff-content__text">
                    <div>
                        <h2><?php echo get_field('gt_content_text_head_three_link_one') ?></h2>
                        <p><?php echo get_field('gt_content_text_three_link_one'); ?></p>
                    </div>
                    <div>
                        <h2><?php echo get_field('gt_content_text_head_four_link_one'); ?></h2>
                        <p><?php echo get_field('gt_content_text_four_link_one'); ?></p>
                    </div>
                </div>
            </div>

            <div class="green-tariff-content-block green-tariff-content-block_two" style="display: none;" data-linkNum="2">

                <div class="green-tariff-content-slider">
                    <div class="green-tariff-content-slider__image">
                        <?php echo wp_get_attachment_image(get_field('gt_slider_image_one_link_2'), 'full') ?>
                    </div>
                    <div class="green-tariff-content-slider__image">
                        <?php echo wp_get_attachment_image(get_field('gt_slider_image_two_link_2'), 'full') ?>
                    </div>

                </div>

                <?php if (have_rows('gt_content_link_2')) :
                    while (have_rows('gt_content_link_2')) : the_row();
                ?>
                        <div class="green-tariff-content__text">
                            <div>
                                <h2><?php echo get_sub_field('gt_content_head_one_link_2'); ?></h2>
                                <p><?php echo get_sub_field('gt_content_text_one_link_2'); ?></p>
                            </div>
                            <div>
                                <h2><?php echo get_sub_field('gt_content_head_two_link_2'); ?></h2>
                                <p><?php echo get_sub_field('gt_content_text_two_link_2'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="green-tariff-content-block green-tariff-content-block_three" style="display: none;" data-linkNum="3">

                <div class="green-tariff-content-slider">

                    <div class="green-tariff-content-slider__image green-tariff-content-slider__image_width">
                        <?php echo wp_get_attachment_image(get_field('gt_slider_image_link_3'), 'full'); ?>
                    </div>

                </div>

                <?php if (have_rows('gt_content_link_3')) :
                    while (have_rows('gt_content_link_3')) : the_row();
                ?>
                        <div class="green-tariff-content__text">
                            <div>
                                <h2><?php echo get_sub_field('gt_content_head_one_link_3'); ?></h2>
                                <p><?php echo get_sub_field('gt_content_text_one_link_3'); ?></p>
                            </div>
                            <div>
                                <h2><?php echo get_sub_field('gt_content_head_2_link_3'); ?></h2>
                                <p><?php echo get_sub_field('gt_content_text_2_link_3'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="green-tariff-content__image">
                <?php echo wp_get_attachment_image( get_field('green_tariff_content_image'), 'full'); ?>
            </div>
        </div>

    </div>
</section> <!-- Green tariff section end-->
</div>