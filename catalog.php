<?php
/*
Template Name: Каталог
*/
?>

<?php get_header(); ?>
    <div class="wrapper">
        <div class="cont_catalog">
            <div class="left_side_cat">
                <p>Категории</p>
                <?php query_posts('cat=11');
                while (have_posts()) : the_post(); ?>

                    <div class="item_manage">

                        <a><?php the_title(); ?></a>
                    </div>


                <?
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="right_side_cat">
                <div class="cards_catalog">
                    <?php query_posts('cat=12');
                    while (have_posts()) : the_post(); ?>


                        <div class="card_catalog">
                            <div class="head_card">
                                <img src="<? the_field('img') ?>" alt="korobka" width="330" height="230">
                            </div>
                            <div class="bottom_card">
                                <div class="text_card_catalog">
                                    <p><?php the_title(); ?></p>
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="cost_catalog">
                                    <p><? the_field('cost') ?></p>
                                    <a href="">Заказать</a>
                                </div>
                            </div>
                        </div>

                    <?
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>