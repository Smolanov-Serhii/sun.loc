<?php
$post_id = get_the_ID();
?>
<section class="grid">
    <div class="grid__container main-container">
        <div class="grid__top">
            <h2 class="grid__list-item grid__title section-title"><?php echo get_field('zagolovok_vosmogo_bloka', $post_id)?></h2>
            <p class="grid__list-item grid__desc section-desc"><?php echo get_field('opisanie_vosmogo_bloka', $post_id)?></p>
        </div>
        <div class="grid__list">
            <?php
            if( have_rows('kejsy_vosmogo_bloka',$post_id) ):
                while( have_rows('kejsy_vosmogo_bloka',$post_id) ) : the_row();
                    $img = get_sub_field('kartinka_dlya_elementa');
                    $title = get_sub_field('zagolovok_elementa');
                    $desc = get_sub_field('opisanie_elementa');
                    ?>
                    <div class="grid__list-item">
                        <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                        <h3><?php echo $title;?></h3>
                        <p><?php echo $desc;?></p>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

</section>