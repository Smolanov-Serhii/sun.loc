<?php
$post_id = get_the_ID();
?>
<section class="six">
    <div class="six__dec">
        <svg width="306" height="312" viewBox="0 0 306 312" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.04" d="M245.064 162.243V172.15H291.296V311.946H137.189V162.243C137.189 58.7718 179.018 0.431641 263.777 0.431641C267.079 0.431641 286.892 2.6332 290.195 4.83469L305.605 102.802C301.202 100.601 295.699 100.601 289.094 100.601C258.273 100.601 245.064 116.011 245.064 162.243ZM24.9121 162.243V172.15H71.144V311.946H-82.9622V162.243C-82.9622 58.7718 -41.1334 0.431641 43.625 0.431641C46.9273 0.431641 66.7409 2.6332 70.0432 4.83469L85.4538 102.802C81.0508 100.601 75.547 100.601 68.9424 100.601C38.1212 100.601 24.9121 116.011 24.9121 162.243Z" fill="#0F0F12"/>
        </svg>
    </div>
    <div class="six__container">
        <div class="six__left main-container">
            <svg width="49" height="38" viewBox="0 0 49 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.75 -1.53536e-06L48.3125 0L48.3125 12.5625C48.3125 17.6458 47.875 21.6458 47 24.5625C46.0833 27.5208 44.4167 30.1667 42 32.5C39.5833 34.8333 36.5 36.6667 32.75 38L29.3125 30.75C32.8125 29.5833 35.3333 27.9583 36.875 25.875C38.375 23.7917 39.1667 21.0208 39.25 17.5625L30.75 17.5625L30.75 -1.53536e-06ZM1.4375 -4.09794e-06L19 -2.56258e-06L19 12.5625C19 17.6875 18.5625 21.7083 17.6875 24.625C16.7708 27.5417 15.1042 30.1667 12.6875 32.5C10.2292 34.8333 7.14583 36.6667 3.4375 38L6.33815e-07 30.75C3.5 29.5833 6.02083 27.9583 7.5625 25.875C9.0625 23.7917 9.85417 21.0208 9.9375 17.5625L1.4375 17.5625L1.4375 -4.09794e-06Z" fill="#0EB83D"/>
            </svg>
            <h2 class="six__title section-title"><?php echo get_field('zagolovok_bloka_15', $post_id)?></h2>
            <div class="six__desc">
                <p><?php echo get_field('opisanie_bloka_15', $post_id)?></p>
                <div class="six__desc-right">
                    — <?php echo get_field('imya_bloka_15', $post_id)?>
                </div>
            </div>
        </div>
        <div class="six__right">
            <img src="<?php echo get_field('kartinka_bloka_15', $post_id)?>" alt="<?php echo trim(strip_tags(get_field('zagolovok_bloka_15', $post_id)));?>">
        </div>
    </div>

</section>