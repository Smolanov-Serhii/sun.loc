<?php
$post_id = get_the_ID();
?>
<section class="two">
    <div class="two__container main-container">
        <h2 class="two__title section-title"><?php echo get_field('zagolovok_vtorogo_bloka', $post_id)?></h2>
        <p class="two__subtitle section-desc"><?php echo get_field('opisanie_vtorogo_bloka', $post_id)?></p>
    </div>
    <div class="two__img">
        <div class="two__img-bg">
            <img src="<?php echo get_field('fon_na_tretij_blok', $post_id)?>">
        </div>
    </div>
</section>