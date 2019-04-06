<?php get_header(); ?>

<div class="middle">

    <div class="container">
        <main class="content">
        <?php the_post();?>
        <?php the_content();?>
    </div><!-- .container-->

    <aside class="left-sidebar">
        <strong>Left Sidebar:</strong> Integer velit. Vestibulum nisi nunc, accumsan ut, vehicula sit amet, porta a, mi. Nam nisl tellus, placerat eget, posuere eget, egestas eget, dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In elementum urna a eros. Integer iaculis. Maecenas vel elit.
        <a href="#" class="expand">Expand column</a>		</aside><!-- .left-sidebar -->

</div><!-- .middle-->

<?php get_footer()?>
