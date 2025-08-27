<?php
$post_id = get_the_ID();
?>
<section class="img">
    <div class="img__container main-container">
        <img src="<?php echo get_field('fon_na_tretij_blok', $post_id)?>">
    </div>
</section>