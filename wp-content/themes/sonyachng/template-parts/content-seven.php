<?php
$post_id = get_the_ID();
?>
<section class="seven"  id="dis">
    <div class="seven__img">
        <img src="<?php echo get_field('fon_sedmogo_bloka', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_bloka_7', $post_id)));?>">
    </div>
    <div class="seven__container main-container">
        <div class="seven__left">
            <?php
            if( have_rows('elementy_bloka_7',$post_id) ):
                while( have_rows('elementy_bloka_7',$post_id) ) : the_row();
                    $icon = get_sub_field('ikonka_elementa');
                    $desc = get_sub_field('opisanie_elementa');
                    ?>
                    <div class="seven__left-item">
                        <img src="<?php echo $icon;?>">
                        <p><?php echo $desc;?></p>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="seven__right">
            <h2 class="seven__title section-title"><?php echo get_field('zagolovok_bloka_7', $post_id)?></h2>
            <p class="seven__desc section-desc"><?php echo get_field('opisanie_bloka_7', $post_id)?></p>
            <div class="seven__button button button-white js-get">
                <span><?php echo get_field('tekst_uznat_stoimost_stanczii', $post_id)?></span>
            </div>
        </div>
    </div>

</section>