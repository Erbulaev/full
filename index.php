
<?php get_header(); ?>
<div class="intro">
    <div class="intro_main">
        <div class="side_intro">
            <div class="text_intro">
                <?php query_posts('cat=3');
                while (have_posts()) : the_post(); ?>

                    <h2><span>Услуги фулфилмента</span>&nbsp;для производителей</h2>
                    <p><? the_field('intro_text') ?></p>
                    <a href=""><? the_field('intro_btn') ?></a>

                <?
                endwhile;
                wp_reset_query();
                ?>

            </div>
        </div>
        <div class="side_intro">
            <div class="globe-container">
                <div class="globe">
                    <div class="globe-sphere"></div>
                    <div class="globe-outer-shadow"></div>
                    <div class="globe-worldmap">
                        <div class="globe-worldmap-back"></div>
                        <div class="globe-worldmap-front"></div>
                    </div>
                    <div class="globe-inner-shadow"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="opp">
        <h2><span>НИЗКАЯ</span>&nbsp; СТОИМОСТЬ,&nbsp;<span>БЫСТРАЯ</span>&nbsp;ДОСТАВКА</h2>
        <div class="opp_cont">
            <?php query_posts('cat=4');
            while (have_posts()) : the_post(); ?>

                <div class="opp_card">
                    <?php the_content(); ?>

                </div>

            <?
            endwhile;
            wp_reset_query();
            ?>


        </div>
    </div>

</div>
<div class="location">
    <div class="locations">
        <div class="head_loc">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            <div class="btns_loc">
                <div class="btn_loc">
                    <a href="">Lorem ipsum</a>
                </div>
                <div class="btn_loc">
                    <a href="">Lorem ipsum</a>
                </div>
                <div class="btn_loc">
                    <a href="">Lorem ipsum</a>
                </div>
                <div class="btn_loc">
                    <a href="">Lorem ipsum</a>
                </div>
                <div class="btn_loc">
                    <a href="">Lorem ipsum</a>
                </div>
            </div>
        </div>
        <div class="bottom_loc">
            <div class="side_location">
                <img src="img/russia.svg" alt="russia" width="795" height="493" style="pointer-events: none" class="map_svg">
            </div>
            <div class="side_location">
                <div class="text_side_loc">
                    <h2>LOREM IPSUM</h2>
                    <p>LOREM IPSUM</p>
                    <p>Lorem ipsum dolor set amet</p>
                    <div class="dotted_loc">
                        <div class="cont_dott">
                            <div class="dott">
                                <img src="img/dott.svg" alt="dott" width="20" height="21">
                                <p>Lorem ipsum</p>
                            </div>
                            <div class="dott">
                                <img src="img/dott.svg" alt="dott" width="20" height="21">
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="cont_dott">
                            <div class="dott">
                                <img src="img/dott.svg" alt="dott" width="20" height="21">
                                <p>Lorem ipsum</p>
                            </div>
                            <div class="dott">
                                <img src="img/dott.svg" alt="dott" width="20" height="21">
                                <p>Lorem ipsum</p>
                            </div>
                        </div>


                    </div>
                    <div class="tabs">
                        <img src="img/dhl.svg" alt="dhl" width="116" height="40">
                        <img src="img/sdek.png" alt="sdek" width="112" height="24">
                    </div>
                    <div class="btn_side_loc">
                        <a href="">ОСТАВИТЬ ЗАЯВКУ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider">
    <div class="head_slider">
        <?php
        query_posts('p=58');
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <h2><? the_field('slider_h2') ?></h2>
                <p><? the_field('slider_text') ?></p>
                <?php
            endwhile;
        endif;
        ?>

    </div>

    <div class="conveer_block">
        <div class="items-wrap">
            <div class="items marquee">
                <?php query_posts('cat=5');
                while (have_posts()) : the_post(); ?>


                    <div class="item">
                        <div class="conveer_img">
                            <?php the_content(); ?>
                        </div>
                        <?php the_title(); ?>
                    </div>


                <?
                endwhile;
                wp_reset_query();
                ?>


            </div>
            <div aria-hidden="true" class="items marquee">
                <?php query_posts('cat=5');
                while (have_posts()) : the_post(); ?>


                    <div class="item">
                        <div class="conveer_img">
                            <?php the_content(); ?>
                        </div>
                        <?php the_title(); ?>
                    </div>


                <?
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
        <div class="conveer_block_anim">
            <div class="conveer">
                <video src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm" autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm" data-wf-ignore="true">
                </video>
            </div>
            <div class="conveer">
                <video src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm" autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm" data-wf-ignore="true">
                </video>
            </div>
        </div>
    </div>
</div>
<div class="manage">
    <div class="manage_sides">
        <div class="side_manage">
            <div class="head_manage">
                <h2>Manage Shipments & Inventory</h2>
                <p>With 24/7 access to our cloud-based order management platform, your
                    team will be a click away from the information that matters:</p>
            </div>
            <div class="items_manage">
                <div class="item_manage">
                    <img src="img/monitor.svg" alt="monitor" width="50" height="44">
                    <p>Monitor your inventory in real time</p>
                </div>
                <div class="item_manage">
                    <img src="img/view.svg" alt="view" width="50" height="44">
                    <p>View and verify your fulfillment & postage fees</p>
                </div>
                <div class="item_manage">
                    <img src="img/validate.svg" alt="validate" width="50" height="44">
                    <p>Validate addresses to reduce returns and chargebacks</p>
                </div>
                <div class="item_manage">
                    <img src="img/predict.svg" alt="predict" width="50" height="44">
                    <p>Predict product depletion and re-order dates</p>
                </div>
            </div>

        </div>
        <div class="side_manage">
            <img src="img/mokup.png" alt="mokup" width="729" height="615" class="mokup">
        </div>
    </div>
</div>
<div class="wrapper">
    <h2>Статьи</h2>
    <div class="articles">
        <div class="article">
            <div class="head_article">
                <img src="img/article1.png" alt="article" width="640" height="220">
            </div>
            <div class="text_article">
                <p>Our Fulfillment Company is a Proud Sponsor of Advocates of Love Charity</p>
                <p>Advocates of Love is the only children’s home to help orphan and vulnerable children in the
                    Samana Province, Dominican Republic. Founded by Mike Clark in 2013, this charity has provided
                    care and education for children in one of the most poverty-stricken areas.</p>
            </div>
            <div class="bottom_article">
                <a href="">Подробнее</a>
                <img src="img/logoar.png" alt="logoar" width="105" height="60">
            </div>
        </div>
        <div class="article">
            <div class="head_article">
                <img src="img/article2.png" alt="article" width="640" height="220">
            </div>
            <div class="text_article">
                <p>Our Fulfillment Company is a Proud Sponsor of Companions for Heroes</p>
                <p>Companions for Heroes (C4H) provides companion dogs, and on a case-by-case basis, service
                    dogs, obtained from shelters, rescues and humane societies, who might otherwise be
                    euthanized, free of charge to active duty military personnel, military veterans, first responders...</p>

            </div>
            <div class="bottom_article">
                <a href="">Подробнее</a>
                <img src="img/logoar2.png" alt="logoar" width="105" height="60">
            </div>
        </div>
    </div>
    <div class="cont_form">
        <div class="side_cont_form">
            <form action="">
                <h3>Закажите консультацию <span>прямо сейчас</span></h3>
                <div class="inputs">
                    <input type="text" placeholder="Имя">
                    <input type="text" placeholder="Телефон">
                </div>
                <div class="btn_form">
                    <a href="">ОСТАВИТЬ ЗАЯВКУ</a>
                    <p>Нажимая на кнопку, вы соглашаетесь с <span>политикой конфиденциальности</span> </p>
                </div>
            </form>
        </div>
        <div class="side_cont_form">
            <img src="img/form.png" alt="form" width="604" height="604">
        </div>
    </div>
</div>
<? get_footer(); ?>
