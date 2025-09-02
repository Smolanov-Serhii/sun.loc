<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__img">
        <picture>
            <source srcset="<?php echo get_field('kartinka_v_banner', $post_id)?>" media="(min-width: 500px)" />
            <img src="<?php echo get_field('kartinka_v_banner_mob', $post_id)?>" />
        </picture>

    </div>
    <div class="banner__container main-container">
        <h1 class="banner__title section-title"><?php echo get_field('zagolovok_bloka_banner', $post_id)?></h1>
        <p class="banner__subtitle"><?php echo get_field('podzagolovok_bloka_banner', $post_id)?></p>
        <div class="banner__button button button-white js-get">
            <span><?php echo get_field('tekst_rasschitat_stancziyu', $post_id)?></span>
        </div>
        <div class="banner__rev">
            <div class="banner__rev-text"><?php echo get_field('otzyv_v_banner', $post_id)?></div>
        </div>
    </div>
</section>