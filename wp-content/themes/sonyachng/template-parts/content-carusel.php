<?php
$post_id = get_the_ID();
?>
<section class="carusel">
    <div class="carusel__container main-container">
        <h2 class="carusel__title section-title"><?php echo get_field('zagolovok_devyatogo_bloka', $post_id)?></h2>
        <p class="carusel__desc section-desc"><?php echo get_field('opisanie_devyatogo_bloka', $post_id)?></p>
        <div class="carusel__list swiper-container">
            <div class="carusel__wrapper swiper-wrapper">
                <?php
                if( have_rows('logotipy_devyatogo_bloka',$post_id) ):
                    while( have_rows('logotipy_devyatogo_bloka',$post_id) ) : the_row();
                        $img = get_sub_field('logotip');
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <img src="<?php echo $img;?>">
                        </div>
                    <?php
                    endwhile;
                    while( have_rows('logotipy_devyatogo_bloka',$post_id) ) : the_row();
                        $img = get_sub_field('logotip');
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <img src="<?php echo $img;?>">
                        </div>
                    <?php
                    endwhile;
                    while( have_rows('logotipy_devyatogo_bloka',$post_id) ) : the_row();
                        $img = get_sub_field('logotip');
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <img src="<?php echo $img;?>">
                        </div>
                    <?php
                    endwhile;
                    while( have_rows('logotipy_devyatogo_bloka',$post_id) ) : the_row();
                        $img = get_sub_field('logotip');
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <img src="<?php echo $img;?>">
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>