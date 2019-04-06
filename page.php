<?php get_header(); ?>

<div class="middle">

    <div class="container">
        <div class="content">
            <?php the_post();?>
            <?php the_content();?>
           </div><!-- .content-->
    </div><!-- .container-->

    <div class="left-sidebar">
    </div><!-- .left-sidebar -->

</div><!-- .middle-->

<?php get_footer()?>
