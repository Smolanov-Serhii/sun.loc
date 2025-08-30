<?php
$post_id = get_the_ID();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__abs">
        <div class="header__container main-container">
            <a href="<?php echo get_home_url(); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri() . '/img/header/Logo-header.svg'; ?>" alt="SUN">
            </a>
            <div class="header__wrapper">
                <nav class="header__nav">
                    <div class="header__nav-close">
                        <svg width="50" height="49" viewBox="0 0 50 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.015625" width="49" height="49" fill="transparent"/>
                            <path d="M47 1.75586L1.76231 46.9935" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <path d="M46.9961 46.9932L1.75841 1.75547" stroke="white" stroke-width="3"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
                <a class="header__call" href="tel:+380987006700" title="+38 (098) 700 6 700">+38 (098) 700 6 700</a>
                <div class="header__get js-get">
                    <span><?php echo get_field('tekst_poluchit_raschyot', $post_id)?></span>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="16" fill="#FEE900"/>
                        <path d="M9 16H23" stroke="#0F0F12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 12L23 16L19 20" stroke="#0F0F12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="header__language">
                    <?php
                    qtranxf_generateLanguageSelectCode('short');
                    ?>
                </div>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>