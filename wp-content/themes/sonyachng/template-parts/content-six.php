<?php
$post_id = get_the_ID();
?>
<section class="six">
    <div class="six__img">
        <img src="<?php echo get_field('kartinka_v_pyatyj_blok', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_v_pyatyj_blok', $post_id)));?>">
    </div>
    <div class="six__container">
        <div class="six__left main-container">
            <h2 class="six__title section-title"><?php echo get_field('zagolovok_v_pyatyj_blok', $post_id)?></h2>
            <div class="six__desc">
                <?php echo get_field('zagolovok_v_pyatyj_blok', $post_id)?>
            </div>
        </div>
        <div class="six__right">
            <img src="<?php echo get_field('kartinka_v_pyatyj_blok', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_v_pyatyj_blok', $post_id)));?>">
        </div>
    </div>

</section>