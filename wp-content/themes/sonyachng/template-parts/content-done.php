 <?php
$post_id = get_the_ID();
?>
<section class="done" id="projects">
    <div class="done__container">
        <div class="done__list swiper-container">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('slajder_11_bloka',$post_id) ):
                    while( have_rows('slajder_11_bloka',$post_id) ) : the_row();
                        $img = get_sub_field('kantinka_dlya_slajda');
                        $title = get_sub_field('zagolovok_slajda');
                        $subtitle = get_sub_field('dobzagolovok_slajda');
                        $object = get_sub_field('obekt');
                        $desc = get_sub_field('opisanie_obekta');
                        ?>
                        <div class="two swiper-slide">
                            <div class="two__container main-container">
                                <h2 class="two__title section-title"><?php echo $title; ?></h2>
                                <p class="two__subtitle section-desc"><?php echo $subtitle; ?></p>
                            </div>
                            <div class="two__img">
                                <div class="two__img-bg">
                                    <img src="<?php echo $img; ?>">
                                </div>
                                <div class="two__img-container">
                                    <div class="two__img-container-wrap main-container">
                                        <div class="two__img-title">
                                            <?php echo $object; ?>
                                        </div>
                                        <div class="two__img-desc">
                                            <?php echo $desc; ?>
                                        </div>
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
    </div>
</section>