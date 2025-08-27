<?php
/* Template Name: Главная */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'two' ); ?>
        <?php get_template_part( 'template-parts/content', 'img' ); ?>
        <?php get_template_part( 'template-parts/content', 'four' ); ?>
        <?php get_template_part( 'template-parts/content', 'five' ); ?>
        <?php get_template_part( 'template-parts/content', 'six' ); ?>
    </main>

<?php
get_footer();




