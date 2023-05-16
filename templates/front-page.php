<?php
/*
Template Name: front_page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php
get_template_part('template-parts/front-page-parts/fp-servises');
get_template_part('template-parts/front-page-parts/fp-green-tariff');
get_template_part('template-parts/front-page-parts/fp-quote');
get_template_part('template-parts/front-page-parts/fp-our-clients');
get_template_part('template-parts/front-page-parts/fp-steps');
?>

<?php get_footer(); ?>