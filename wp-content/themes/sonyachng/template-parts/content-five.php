<?php
$post_id = get_the_ID();
?>
<section class="five">
    <div class="five__img">
        <picture>
            <source srcset="<?php echo get_field('kartinka_v_pyatyj_blok', $post_id)?>" media="(min-width: 500px)" />
            <img src="<?php echo get_field('kartinka_v_pyatyj_blok_mob', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_v_pyatyj_blok', $post_id)));?>">
        </picture>
    </div>
    <div class="five__container main-container">
        <h2 class="five__title section-title"><?php echo get_field('zagolovok_v_pyatyj_blok', $post_id)?></h2>
        <div class="five__list">
            <div class="five__list-item"><?php echo get_field('punkt_1_v_pyatyj_blok', $post_id)?></div>
            <div class="five__list-item"><?php echo get_field('punkt_2_v_pyatyj_blok', $post_id)?></div>
            <div class="five__list-item"><?php echo get_field('punkt_3_v_pyatyj_blok', $post_id)?></div>
        </div>
    </div>
</section>