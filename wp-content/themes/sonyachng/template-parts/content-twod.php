<?php
$post_id = get_the_ID();
?>
<section class="two">
    <div class="two__container main-container">
        <h2 class="two__title section-title"><?php echo get_field('zagolovok_bloka_14', $post_id)?></h2>
        <p class="two__subtitle section-desc"><?php echo get_field('opisanie_bloka_14', $post_id)?></p>
    </div>
    <div class="two__img">
        <div class="two__img-bg">
            <img src="<?php echo get_field('fon_na_blok_14', $post_id)?>">
        </div>
        <?php
        if ( wp_is_mobile() ) {
            ?>
            <div class="two__img-list main-container swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if( have_rows('elementy_bloka_14',$post_id) ):
                        while( have_rows('elementy_bloka_14',$post_id) ) : the_row();
                            $title = get_sub_field('zagolovok');
                            $desc = get_sub_field('opisanie');
                            ?>
                            <div class="two__list-item swiper-slide">
                                <h3 class="title"><?php echo $title;?></h3>
                                <p class="desc"><?php echo $desc;?></p>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination main-container"></div>
            </div>
            <?php
        } else {
            ?>
            <div class="two__img-list main-container">
                <?php
                if( have_rows('elementy_bloka_14',$post_id) ):
                    while( have_rows('elementy_bloka_14',$post_id) ) : the_row();
                        $title = get_sub_field('zagolovok');
                        $desc = get_sub_field('opisanie');
                        ?>
                        <div class="two__list-item">
                            <h3 class="title"><?php echo $title;?></h3>
                            <p class="desc"><?php echo $desc;?></p>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</section>