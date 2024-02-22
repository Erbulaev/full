<?php
/*
Template Name: Импортерам
*/
?>
<?php
$array = "orderby=date&order=ASC&cat=15&showposts=15";
?>

<?php get_header(); ?>
    <div class="wrapper">
        <h2 class="head_page">Импортерам</h2>

        <div class="service_tabs">
            <div class="tabs-container">
                <?php query_posts('cat=15');
                while (have_posts()) : the_post(); ?>

                    <label for="<? the_field('id_import') ?>" class="label_gr"><?php the_title(); ?></label>

                <?
                endwhile;
                wp_reset_query();
                ?>
                <?php the_content(); ?>
            </div>

            <?php query_posts($array);
            while (have_posts()) : the_post(); ?>

                <input name="tab" id="<? the_field('id_import') ?>" type="radio" checked />
                <section class="tab-content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </section>
            <?
            endwhile;
            wp_reset_query();
            ?>



        </div>






        <div class="main_form">
            <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer"><h3><? the_field('h1_form') ?></h3></label>
                <div class="faq-drawer__content-wrapper">
                    <div class="faq-drawer__content">
                        <div class="cont_forms">
                            <div class="side_cont_forms">


                                <div class="inputs">
                                    <?php echo do_shortcode('[contact-form-7 id="8f673e8" title="Заявки Импортерам"]'); ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mob_form">
            <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer_mob" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer_mob"><h3><? the_field('h1_form') ?></h3></label>
                <div class="faq-drawer__content-wrapper">
                    <div class="faq-drawer__content">
                        <div class="cont_forms">
                            <div class="side_cont_forms">


                                <div class="inputs">
                                    <?php echo do_shortcode('[contact-form-7 id="e613dc3" title="Заявки Импортерам_mob"]'); ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
<?php get_footer(); ?>