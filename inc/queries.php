<!-- Classes List -->

<?php function branaeagles_classes_list() { ?>

    <div class="row row-cols-lg-3">
        <?php 
            $args = array(
                'post_type' => 'gymfitness_clases', // Custom taxonomy class coming from the plugin
            );

            $classes = new WP_Query($args); // Instantiate a new classes query

            while($classes->have_posts()): $classes->the_post(); // Loop through the classes
        
        ?>

        <div class="col-md-5 col-12 mx-auto mb-4  card shadow">
            <a class="nav-link" href="<?php the_permalink(); ?>">
                <img class="img-fluid" src="<?php the_post_thumbnail(); ?>">
                <div class="card-body">
                    <h4 class="card-title class-title"><?php the_title(); ?></h4>
                </div>
            </a>
            <div class="day-time">
                <p class="fs-5 day"><?php the_field('class_days'); ?></p>
                <?php 
                    $start_time = get_field('start_time');
                    $end_time = get_field('end_time');
                ?>
                <p class="fw-bold"><?php echo $start_time . " to " . $end_time ?></p>
            </div>
        </div>

        

        <?php endwhile; wp_reset_postdata(); ?> 

    </div>
        
<?php } ?>


<!-- Features List -->
<?php function branaeagles_features_list() { ?>

<div class="row row-cols-lg-4">
    <?php 
        $args = array(
            'post_type' => 'gymfitness_features', // Custom taxonomy class coming from the plugin
        );

        $features = new WP_Query($args); // Instantiate a new features query

        while($features->have_posts()): $features->the_post(); // Loop through the features
    
    ?>

    <?php 
        $feature_icon = get_field('feature_icon');
        $feature_text = get_field('feature_text');
    ?>

    <div class="col-md-6 mx-auto">
            <div class="card shadow my-2 mx-2 text-center p-3">
                <div class="choose-icons mb-3 text-center">
                    <?php echo $feature_icon; ?>
                </div>
                <h2 class="choose-card mb-3"><?php the_title(); ?></h2>
                <p class="my-2 choose-text">
                    <?php echo the_content(); ?>
                </p>
            </div>
        </div>

    

    <?php endwhile; wp_reset_postdata(); ?> 

    </div>
    
<?php } ?>