<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>

<head>
    <?php wp_head();
    global $simple_event_data;
    ?>
</head>

<body class="<?php body_class() ?>">
    <div id="layout">
        <div id="header">
            <h1 id="logo">
                <a href="<?php echo esc_url(site_url()) ?>"><img src="<?php
                     echo get_theme_mod('header_area_simpleevent') ?>" alt="" id="LoGo-ImEgE"></a>
            </h1>
            <span id="slogan"><?php bloginfo('description') ?></span>
            <hr class="noscreen" />
            <div id="quicknav">

                <?php if (!empty($simple_event_data['simpleevent-fb-url'])) : ?>

                    <a href="<?php echo esc_url($simple_event_data['simpleevent-fb-url']); ?>"><i class="fa-brands fa-facebook"></i></a>

                <?php endif;

                if (!empty($simple_event_data['simpleevent-tt-url'])) : ?>

                    <a href="<?php echo esc_url($simple_event_data['simpleevent-tt-url']) ?>"><i
                    class="fa-brands fa-twitter"></i></a>

                <?php endif;

                if (!empty($simple_event_data['simpleevent-sy-url'])) : ?>

                    <a href="<?php echo esc_url($simple_event_data['simpleevent-sy-url']) ?>"><i
                    class="fa-brands fa-skype"></i></a>

                <?php endif; ?>

            </div>
            <div id="search">
                <form href="<?php get_theme_file_uri('search.php') ?>" method="post">
                    <fieldset>
                        <input type="text" id="phrase" name="phrase" value="search phrase" onfocus="if(this.value=='search phrase')this.value=''" />
                        <input type="submit" id="submit" value="SEARCH" />
                    </fieldset>
                </form>
            </div>
        </div>
        <hr class="noscreen" />
        <div id="nav" class="box <?php echo get_theme_mod('simple_menu_position') ?>">
            <?php
            if (has_nav_menu('simpleeventmenu')) {
                wp_nav_menu(array(
                    'theme-location' => 'simpleeventmenu',
                    'fallback_cb'     => 'customsimpleeventmenu',
                ));
            }; ?>
            <hr class="noscreen" />
        </div>

        <?php // print_r( $simple_event_data) 
        if(!empty($simple_event_data['simpleevent-img']['url'])):?>
        <img src="<?php echo $simple_event_data['simpleevent-img']['url'];?>" alt="">
        <?php endif;?>


        <?php if(!empty( $simple_event_data['simple-layout'])):?>
            <img src="<?php echo $simple_event_data['simple-layout']?>" alt="">
        <?php endif; 
        //echo $simple_event_data['simple-layout']?>
        
        
        