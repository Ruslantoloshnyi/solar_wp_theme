<!-- Steps section -->
<section class="steps section">
    <div class="container">
        <div class="wrapper">
            <div class="steps-content">
                <div class="steps-content-block">
                    <div class="section__head"><?php echo get_field('fp_steps_heading'); ?></div>
                    <?php if (have_rows('fp_steps_content')) :
                        while (have_rows('fp_steps_content')) : the_row();
                    ?>
                            <div class="steps-content__text">
                                <h2><?php echo get_sub_field('fp_steps_content_head'); ?></h2>
                                <p><?php echo get_sub_field('fp_steps_content_text'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="steps__image">
                    <?php echo wp_get_attachment_image( get_field('fp_steps_image'), 'full'); ?>
                </div>
            </div>
        </div>
    </div>
</section>