<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/assets/img/hero.jpg" alt="<?php the_title(); ?>" />
<?php } ?>