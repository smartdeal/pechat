<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru-RU">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon" type="image/png">
    <?php wp_head(); ?> 
</head>

<body id="to-top" <?php body_class(); ?>>
    <?php the_field('option_code_top','option'); ?>

<div class="header">
    <div class="header__inner">
        <div class="container">
            <div class="header__top">
                <div class="header__logo">
                    <?php if (!is_front_page()) { ?><a href="<?php echo home_url(); ?>"><?php } ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-red.png" alt="">
                    <?php if (!is_front_page()) { ?></a><?php } ?>
                    <div class="header__logo-txt">Минимальный заказ 1000 <span class="rub">P</span></div>
                </div>
                <div class="header__center">
                    <div class="header__tagline"><strong>Нанесение логотипов и символики на одежду и сувениры</strong><br>оптом сроком от 1-го дня с доставкой по Москве и России</div>
                    <div class="header__search">
                    <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ) ?>
                    <?php /*
                        <form class="header__search-form" role="search" method="get" action="/">
                            <input class="header__search-input" type="search" placeholder="Поиск: например, сигнальные жилеты" value="" name="s">
                            <button class="header__search-btn btn btn_c1 btn_search" type="submit"><span class="header__search-form-txt">Найти</span></button>
                        </form>
                        */ ?>
                    </div>
                </div>
                <div class="header__right"> 
                    <?php if ($main_email = get_field('option_email','option')): ?>
                        <a href="mailto:<?php echo $main_email ?>" class="header__email"><?php echo $main_email ?></a>
                    <?php endif; ?>
                    <?php if ($main_tel = get_field('option_tel','option')): ?>
                        <a class="header__tel" href="<?php the_tel_link($main_tel) ?>"><?php echo $main_tel; ?></a>
                    <?php endif; ?>
                    <div class="header__clock">Звоните с 09:00 до 19:00</div>
                    <a class="header__call-btn js-get-popup-form" href="#popup-form_feedback">Заказать звонок</a>
                </div>
                <a class="mmenu-btn js-mmenu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header__menu-wrap">
        <div class="container">
            <div class="header__menu js-header-menu">
                <?php 
                    if (function_exists('wp_nav_menu')) {
                        $add_menu = '<ul class="topmenu">';
                        $add_menu .= '<li id="menu-item-0000" class="menu-item wide menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-0000"><a href="#">Печать-Про</a>';
                        $add_menu .= wp_nav_menu( array( 'menu' => 5,   'container' => '', 'fallback_cb' => '', 'menu_class' => 'sub-menu', 'echo' => false ) );
                        $add_menu .='</li>';
                        $add_menu .= '<li id="menu-item-0001" class="menu-item wide menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-0001"><a href="/service/">Услуги печати</a>';
                        $add_menu .= wp_nav_menu( array( 'menu' => 6,   'container' => '', 'fallback_cb' => '', 'menu_class' => 'sub-menu', 'echo' => false ) );
                        $add_menu .='</li>';
                        $add_menu .= '<li id="menu-item-0002" class="menu-item wide menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-0002"><a href="/product/">Товары</a>';
                        $add_menu .= wp_nav_menu( array( 'menu' => 7,   'container' => '', 'fallback_cb' => '', 'menu_class' => 'sub-menu', 'echo' => false ) );
                        $add_menu .='</li>';
                        $add_menu .= wp_nav_menu( array( 'menu' => 2,   'container' => '', 'fallback_cb' => '', 'items_wrap' => '%3$s', 'menu_class' => '', 'echo' => false ) );
                        $add_menu .='</ul>';
                        echo($add_menu); 
                    }; 
                ?>
            </div>
        </div>
    </div>
</div>
<div class="main-layout">
<div class="content__inner">
    <div class="container">
        <div class="content__wrap">
            <?php get_sidebar(); ?>
            <div class="main-layout__content">
                <?php if ( !is_front_page() && function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>'); } ?>
                <?php get_template_part( 'inc/inc-get-calc' ); ?>
                <?php if (is_front_page()) { get_template_part( 'inc/inc-slider-main' ); } ?>