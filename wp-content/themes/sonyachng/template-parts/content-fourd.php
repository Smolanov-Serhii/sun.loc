<?php
$post_id = get_the_ID();
?>
<section class="fourd">
    <div class="fourd__list swiper-container">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('povtoritel_bloka_13',$post_id) ):
                while( have_rows('povtoritel_bloka_13',$post_id) ) : the_row();
                    $img = get_sub_field('kartinka_bloka_13');
                    $title = get_sub_field('zagolovok_bloka_13');
                    $desc = get_sub_field('podzagolovok_blokka_13');
                    ?>
                    <div class="four main-container swiper-slide">
                        <div class="four__img">
                            <img src="<?php echo $img;?>">
                        </div>
                        <div class="four__container">
                            <div class="four__left padding-left padding-right">
                                <h2 class="four__title section-title"><?php echo $title;?></h2>
                                <div class="four__subtitle section-desc"><?php echo $desc;?></div>
                                <div class="four__button button button-white js-get">
                                    <span><?php echo get_field('tekst_rasschitat_stancziyu', $post_id)?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="swiper-pagination main-container"></div>
    </div>
</section>