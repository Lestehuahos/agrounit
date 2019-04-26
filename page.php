<?php get_header(); ?>

<!--<div class="middle">-->

    <div class="content">
            <?php the_post();?>
            <?php the_content();?>
    </div><!-- .container-->

    <!-- <div class="left-sidebar"> -->
        <?php
        /*wp_nav_menu(array(
                'theme_location' => 'left_menu',
                //'items_wrap' => 'left_menu',
                //'menu_class' => 'left_menu',
        ));*/
        ?>
    <!-- </div> -->

<!--</div>--><!-- .middle-->

<?php get_footer()?>
