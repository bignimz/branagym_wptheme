<?php 

/*
* Template Name: Classes Page.
*
* @package branaeaglesgym
*/

get_header();
?>

<!-- Header Image -->

<div class="page-header">
    <?php echo get_template_part('template-parts/header-image'); ?>
</div>

<div class="container py-5">
    <section class="classes">
        <h1 class="mt-3 mb-5 text-center fw-bold">Our Gym Classes</h1>
        <?php branaeagles_classes_list(); ?>
    </section>
</div>

<?php get_footer(); ?>