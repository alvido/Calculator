<?php
/*
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="dorobalo">
    <meta name="robots" content="index, follow">
    <meta name="description" content="My test site">
    <meta name="keywords" content="Web Development, Cloud Solutions, Cyber Security, Data Analytic, Software Development, Digital Marketing">

    <title>
        <?php bloginfo('name'); ?> |
        <?php bloginfo('description'); ?>
    </title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__inner container">
            <?php if (get_theme_mod('header_logo')) : ?>
                <a class="header__logo logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    <img class="logo__image" src="<?php echo esc_url(get_theme_mod('header_logo')); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
                <?php else :
                if (function_exists('the_custom_logo')) :
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if ($logo) : ?>
                        <a class="header__logo logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
            <?php endif;
                endif;
            endif; ?>

            <nav class="header__nav navigation">
                <?php
                $menu = wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => 'ul',
                    'menu_class' => 'navigation__list',
                ]);
                if ($menu) {
                    echo $menu;
                }
                ?>
            </nav>

            <div class="header__actions actions">
                <div class="search__form">
                    <button class="search__open" id="searchOpen" type="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.0004 21.0004L16.6504 16.6504" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <form method="get" class="search" id="search" role="search" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
                        <button class="search__submit" id="searchButton" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.0004 21.0004L16.6504 16.6504" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="header__button">
                    <a href="/" class="button">Калькулятор</a>
                </div>
                <button class="header__burger burger" id="burgerButton">
                    <span>Menu</span>
                </button>
            </div>

        </div>
    </header>
