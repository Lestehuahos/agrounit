<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

    <div class="header wb_cont_bg">
        <div class="wb_cont_inner">
            <div id="wb_element_instance304" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong><font color="#ffffff">8(918) 932-32-47</font></strong></h1>
            </div>
            <div id="wb_element_instance305" class="wb_element wb_element_picture" title="">
            <a href="">
                <img alt="gallery/агросоюз логотип" src="<?php echo get_stylesheet_directory_uri() . '/images/1f830483bb3ebb371cdee1f66ecf4a5e_173x140.png'; ?>">
            </a>
            </div>
            <div id="wb_element_instance306" class="wb_element"><a class="wb_button" href=""><span>Главная</span></a></div>
            <div id="wb_element_instance307" class="wb_element"><a class="wb_button" href="contacts/"><span>Контакты</span></a></div>
            <div id="wb_element_instance310" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><strong><font color="#ffffff">Пн-Пт 8:00-18:00</font></strong></h3>
            </div>
        </div>
    </div><!-- .header-->

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'       => 'div',
        'container_class' => 'wb-menu',
        'container_id'    => 'wb_element_instance51',
        'menu_class'    => 'hmenu',
        //'items_wrap' => 'left_menu',
        //'menu_class' => 'left_menu',
    ));
    ?>