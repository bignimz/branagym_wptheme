<?php 

/*
* Template Name: Home Page.
*
* 
*/

get_header();
?>
<!-- Hero slider -->
<?php echo get_template_part('template-parts/hero-slider'); ?>
<!-- Why Choose us -->
<?php echo get_template_part('template-parts/why-choose-us'); ?>

<!-- Classes  -->
<?php echo get_template_part('template-parts/our-classes'); ?>

<!-- Cta  -->
<?php echo get_template_part('template-parts/cta'); ?>

<!-- Pricing Plans -->
<?php echo get_template_part('template-parts/price-list'); ?>

<?php get_footer(); ?>