<?php
/*
Template Name: Партнерам
*/
?>

<?php get_header(); ?>

    <div class="wrapper">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="head_page"> <? the_title(); ?> </h2>
        <div class="cont_part">
            <p>Страница наполняется...</p>
            <? the_content();  ?>
        </div>

        <?endwhile; else: ?>
            <p>Страница наполняется...</p>
        <?php endif; ?>





    </div>
<?php get_footer(); ?>