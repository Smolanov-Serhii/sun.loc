 <?php
$post_id = get_the_ID();
?>
<section class="eco">
    <div class="eco__container main-container">
        <h2 class="eco__title section-title">
            <?php echo get_field('zagolovok_bloka_12', $post_id)?>
        </h2>
        <div class="eco__list">
            <?php
            if( have_rows('elementy_bloka_12',$post_id) ):
                while( have_rows('elementy_bloka_12',$post_id) ) : the_row();
                    $title = get_sub_field('zagolovok');
                    $desc = get_sub_field('opisanie');
                    ?>
                    <div class="eco__item">
                        <div class="eco__item-title">
                            <?php echo $title; ?>
                        </div>
                        <div class="eco__item-desc section-desc">
                            <?php echo $desc; ?>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>