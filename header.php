<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title; ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <div class="site-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/branagym-logo.png' ?>" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php 
                    
                    $args = array(
                        "theme_location" => "main-menu",
                        "container" => "div",
                        "container_class" => "main-menu navbar-nav ms-auto mb-2 mb-lg-0"
                    );

                    wp_nav_menu($args);
                    
                    ?>

                </div>
            </div>
        </nav>
    </div>
    
    
