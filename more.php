<?php
/*
Template Name: Узнать больше
*/
?>

<?php get_header(); ?>
    <div class="wrapper">
        <div class="cont_card_about">
            <?php query_posts('cat=13');
            while (have_posts()) : the_post(); ?>

                <div class="card_about">

                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>

                </div>

            <?
            endwhile;
            wp_reset_query();
            ?>

        </div>


    </div>
<?php get_footer(); ?>