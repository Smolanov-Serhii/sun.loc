<?php
/* Template Name: Главная */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'two' ); ?>
        <?php get_template_part( 'template-parts/content', 'four' ); ?>
        <?php get_template_part( 'template-parts/content', 'five' ); ?>
        <?php get_template_part( 'template-parts/content', 'six' ); ?>
        <?php get_template_part( 'template-parts/content', 'seven' ); ?>
        <?php get_template_part( 'template-parts/content', 'grid' ); ?>
        <?php get_template_part( 'template-parts/content', 'carusel' ); ?>
        <?php get_template_part( 'template-parts/content', 'prop' ); ?>
        <?php get_template_part( 'template-parts/content', 'done' ); ?>
        <?php get_template_part( 'template-parts/content', 'eco' ); ?>
        <?php get_template_part( 'template-parts/content', 'fourd' ); ?>
        <?php get_template_part( 'template-parts/content', 'twod' ); ?>
        <?php get_template_part( 'template-parts/content', 'sixd' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
    </main>

<?php
get_footer();




