<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta content="text/html; charset=<?php bloginfo('charset'); ?>" http-equiv="Content-type">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0"/>

    <title>
        <?php wp_title('  ', true, 'left');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen"/>
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/editor-style.css" type="text/css" media="screen"/>-->

    <!--[if IE 6]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css"/>
    <![endif]-->


    <?php wp_head();?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js?t=<?php print date('YmdHis'); ?>"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jqt.js"></script>

    <!--noindex-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/googleAnalytics.js?t=<?php print date('YmdHis'); ?>"></script>
    <!--/noindex-->
</head>
<body <?php body_class("newbody"); ?>>

<div class="page main">
    <div id="header" class="clearfix">
        <div class="logo">
            <a href="http://skefi.com.ua/" title="Заправка и восстановление картриджей, обслуживание оргтехники, ремонт компьютеров и ноутбуков">
               <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"/>
            </a>
            <div class="slogan">
                <p>ЧП "КБ СЕРВИС"</p>
                <p>СЕРВИСНЫЙ ЦЕНТР</p>
                <p>Сделаем все! И немного больше...</p>
            </div>
        </div>
        <?php
        wp_nav_menu(
            array(
                'container_class' => 'main_menu grid_13',
                'container_id' => 'top_menu',
                'menu' => 'Main menu',
                'menu_class' => 'menu_items_list',
                'echo' => true,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

            ));
        ?>
        <div class="icons_block">

            <div id="top_boxs">
                <ul>
                    <li id="top_box_1"><a class="sprite"
                                          href="http://skefi.com.ua/zapravka-i-vostanovlenie-lazernyx-kartridzhej.html"
                                          title="Заправка и восстановление картриджей в Днепропетровске и Днепродзержинске">
                        &nbsp;</a></li>
                    <li id="top_box_2"><a class="sprite" href="http://skefi.com.ua/remont-lazernyx-printerov.html"
                                          title="Ремонт принтеров и оргтехники в Днепропетровске и Днепродзержинске">
                        &nbsp;</a></li>
                    <li id="top_box_3"><a class="sprite" href="http://skefi.com.ua/remont-komputerov.html"
                                          title="Ремонт компьютеров и ноутбуков в Днепропетровске и Днепродзержинске">
                        &nbsp;</a></li>
                </ul>
            </div>
            <div class="info_line">Заправка картриджей в Днепродзержинске: +38 (095) 092-42-94, +38 (067) 980-99-84</div>
        </div>
    </div>
    <!-- eof head -->