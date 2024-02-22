<?php
/*
Template Name: Услуги
*/
?>

<?php get_header(); ?>

    <div class="wrapper">

        <h2 class="head_page">Услуги</h2>

        <div class="service_tabs">
            <div class="tabs-container">
                <?php query_posts('cat=17');
                while (have_posts()) : the_post(); ?>

                    <label for="<? the_field('id_service') ?>" id="label" class="label_gr"><?php the_title(); ?></label>

                <?
                endwhile;
                wp_reset_query();
                ?>
                <?php the_content(); ?>
            </div>

            <?php query_posts('cat=17');
            while (have_posts()) : the_post(); ?>

                <input name="tab" id="<? the_field('id_service') ?>" type="radio" checked />
                <section class="tab-content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </section>
            <?
            endwhile;
            wp_reset_query();
            ?>



        </div>

    </div>
<?php get_footer(); ?>