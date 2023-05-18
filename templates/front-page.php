<?php
/*
Template Name: front_page
Template Post Type: page
*/
?>

<?php //get_header(); ?>

<?php
//if (function_exists('acf_get_field_group')) {
    //$field_group = acf_get_field_group('group_6464abbe7c168');

    //if (acf_get_field_group('group_6464abbe7c168')) {
        //get_template_part('template-parts/front-page-parts/fp-servises');
    //}
//}


//get_template_part('template-parts/front-page-parts/fp-green-tariff');
//get_template_part('template-parts/front-page-parts/fp-quote');
//get_template_part('template-parts/front-page-parts/fp-our-clients');
//get_template_part('template-parts/front-page-parts/fp-steps');
?>



<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
