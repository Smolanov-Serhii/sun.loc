<?php
$post_id = get_the_ID();
?>
<section class="four main-container" id="about">
    <div class="four__img">
        <picture>
            <source srcset="<?php echo get_field('kartinka_v_chetvertyj_blok', $post_id)?>" media="(min-width: 500px)" />
            <img src="<?php echo get_field('kartinka_v_chetvertyj_blok_mob', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_v_chetvertyj_blok', $post_id)));?>">
        </picture>
        <div class="four__right">
            <?php echo get_field('vynoska_v_chetvertyj_bloke', $post_id)?>
        </div>
    </div>
    <div class="four__container">
        <div class="four__left padding-left padding-right">
            <svg width="49" height="38" viewBox="0 0 49 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.75 -1.53536e-06L48.3125 0L48.3125 12.5625C48.3125 17.6458 47.875 21.6458 47 24.5625C46.0833 27.5208 44.4167 30.1667 42 32.5C39.5833 34.8333 36.5 36.6667 32.75 38L29.3125 30.75C32.8125 29.5833 35.3333 27.9583 36.875 25.875C38.375 23.7917 39.1667 21.0208 39.25 17.5625L30.75 17.5625L30.75 -1.53536e-06ZM1.4375 -4.09794e-06L19 -2.56258e-06L19 12.5625C19 17.6875 18.5625 21.7083 17.6875 24.625C16.7708 27.5417 15.1042 30.1667 12.6875 32.5C10.2292 34.8333 7.14583 36.6667 3.4375 38L6.33815e-07 30.75C3.5 29.5833 6.02083 27.9583 7.5625 25.875C9.0625 23.7917 9.85417 21.0208 9.9375 17.5625L1.4375 17.5625L1.4375 -4.09794e-06Z" fill="#FEE900"/>
            </svg>
            <h2 class="four__title section-title"><?php echo get_field('zagolovok_v_chetvertyj_blok', $post_id)?></h2>
            <div class="four__subtitle section-desc"><?php echo get_field('podzagolovok_v_chetvertyj_blok', $post_id)?></div>
            <div class="four__button button button-white js-get">
                <span><?php echo get_field('tekst_rasschitat_stancziyu', $post_id)?></span>
            </div>
        </div>
        <div class="four__right">
            <?php echo get_field('vynoska_v_chetvertyj_bloke', $post_id)?>
        </div>
    </div>
</section>