<!-- Quote section -->
<section class="quote-section">

    <div class="wrapper">
        <div class="quote-block">
            <div class="quote__image">
                <?php echo wp_get_attachment_image( get_field('fp_quote_image'), 'full'); ?>
            </div>
            <div class="quote__text">
                <p><?php echo get_field('fp_quote_text'); ?></p>
            </div>
        </div>
    </div>

</section> <!-- Quote section end-->