<?php 
get_header();
?>

<!-- Slider -->

<div class="page-header">
<?php echo get_template_part('template-parts/header-image'); ?>
</div>
<div class="container py-5">
    <?php while(have_posts()) : the_post(); ?>
    <div class="row row-cols-md-2" style="margin-top: 50px">
        <div class="col-md-6 col-12 mx-auto">
            <div class="img-fluid">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-6 col-12 mx-auto class-class">
            <div class="class-content">
                <h2><?php echo the_title(); ?></h2>
                <p><?php echo the_content(); ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php get_template_part('template-parts/hero-slider.php'); ?>
</div>

<?php get_footer(); ?>