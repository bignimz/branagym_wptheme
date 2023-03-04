    <footer class="bg-dark text-light py-3">
        <div class="container footer-container text-center">

            <p>
                <?php 
                            
                    $args = array(
                        "theme_location" => "main-menu",
                        "container" => "div",
                        "container_class" => "main-menu navbar-nav text-center mb-2 mb-lg-0"
                    );
        
                    wp_nav_menu($args);
                                
                ?>
            </p>

            <p>Copyright <script>document.write(new Date().getFullYear());</script> | <?php echo get_bloginfo('name'); ?></p>
        </div>
    </footer>
</body>
</html>

<?php wp_footer(); ?>