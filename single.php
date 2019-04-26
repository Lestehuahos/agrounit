<?php get_header(); ?>

<div class="middle">
    <div class="container">
        <div class="content">
            <?php the_post();?>
            <h1 class="wb-stl-heading1" style="text-align: center;"><?php echo get_the_title() ?></h1>
            <?php
            $images = get_post_meta(get_the_ID(), 'vdw_gallery_id');
            //var_dump($images);
            //foreach ($images[0] as $image) {
                //echo '<img src='.wp_get_attachment_url($image).'>';
                //echo wp_get_attachment_image($image, 'full');
            //}
            ?>
            <?php the_content();?>
        </div><!-- .content-->
    </div><!-- .container-->

    <div class="left-sidebar">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'left_menu',
            //'items_wrap' => 'left_menu',
            //'menu_class' => 'left_menu',
        ));
        ?>
    </div><!-- .left-sidebar -->
</div><!-- .middle-->

<?php get_footer()?>
