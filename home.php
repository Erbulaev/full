<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="intro">
    <div class="intro_main">
        <div class="side_intro">
            <div class="text_intro">

                <h1><? the_field('intro_h1') ?></h1>
                <p><? the_field('intro_text') ?></p>
                <a href="https://fulfilment.top/%d1%83%d0%b7%d0%bd%d0%b0%d1%82%d1%8c-%d0%b1%d0%be%d0%bb%d1%8c%d1%88%d0%b5/"><? the_field('intro_btn') ?></a>


            </div>
        </div>
        <div class="side_intro">
            <canvas class="canvas"></canvas>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/earth.js"></script>



<!--            <div class="globe-container">-->
<!--                <div class="globe">-->
<!--                    <div class="globe-sphere"></div>-->
<!--                    <div class="globe-outer-shadow"></div>-->
<!--                    <div class="globe-worldmap">-->
<!--                        <div class="globe-worldmap-back"></div>-->
<!--                        <div class="globe-worldmap-front"></div>-->
<!--                    </div>-->
<!--                    <div class="globe-inner-shadow"></div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
<div class="slogan">
    <div class="wrapper">
<!--        <h3>Slogan</h3>-->
    </div>

</div>
<div class="wrapper">
    <div class="opp">
        <h2><span>НИЗКАЯ</span>&nbspСТОИМОСТЬ,&nbsp;<span>БЫСТРАЯ</span>&nbsp;ОТГРУЗКА</h2>
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
<div class="location" id="sklad">
    <div class="locations">
        <div class="head_loc">
            <h2><? the_field('h1_map') ?></h2>
            <div class="btn_loc">
                <?php query_posts('cat=6');
                while (have_posts()) : the_post(); ?>

                    <button id="<? the_field('link_btn') ?>" class="btn_off" onclick="hideDiv()"><?php the_title(); ?></button>


                <?
                endwhile;
                wp_reset_query();
                ?>

            </div>
        </div>
        <div class="bottom_loc">
            <div class="side_location">
                <img src="<? the_field('img_map_1') ?>" alt="russia" width="795" height="493" style="pointer-events: none"
                     class="map_svg map_1" id="setImg1" >
                <img src="<? the_field('img_map') ?>" alt="russia" width="795" height="493" style="pointer-events: none"
                     class="map_svg map_2" id="setImg" >
                <div class="points_cont" id="off">
                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/omsk.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>ОМСК</p>

                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gerb_tumenskoj_oblasti.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>ТЮМЕНЬ</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/spetersbur_g.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>САНКТ-ПЕТЕРБУРГ</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/omsk.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>НОВОСИБИРСК</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gerb-irkutska.jpg" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>ИРКУТСК</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Coat_of_arms_of_Ufa.svg.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>УФА</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Coat_of_Arms_of_Kazan_(Tatarstan)_(1990s).png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>КАЗАНЬ</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/1200px-Coat_of_Arms_of_Rostov-on-Don.svg.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>РОСТОВ-НА-ДОНУ</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Coat_of_Arms_of_Krasnodar_Kray.svg.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>КРАСНОДАР</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Coat_of_arms_of_Nizhny_Novgorod_Region.svg.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>НИЖНИЙ НОВГОРОД</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gerb_voronezhskoy_jblasti.png" alt="gerb" width="60" height="60">
                            <p>Скоро</p>
                            <p>ВОРОНЕЖ</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>

                    <div class="loc_point">
                        <div class="card_point">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Coat_of_Arms_of_Moscow.png" alt="gerb" width="60" height="60">
                            <p>МОСКВА</p>
                        </div>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d60000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                        </span>

                    </div>
                </div>
            </div>
            <div class="side_location">
                <div class="text_side_loc">
                    <h2 ><? the_field('sec_h1_map') ?></h2>
                    <span><? the_field('h2_map') ?></span>
                    <p><? the_field('text_map') ?></p>
                    <div class="dotted_loc">
                        <div class="cont_dott">
                            <?php query_posts('cat=7');
                            while (have_posts()) : the_post(); ?>

                                <div class="dott">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/dott.svg" alt="dott"
                                         width="20" height="21">
                                    <p><?php the_title(); ?></p>
                                </div>


                            <?
                            endwhile;
                            wp_reset_query();
                            ?>
                        </div>


                    </div>
                    <div class="tabs">
                        <?php query_posts('cat=8');
                        while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                        <?
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                    <div class="btn_side_loc">
                        <a href="#main_form"><? the_field('text_btn_map') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider" id="service">
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
                        <p><?php the_title(); ?></p>
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
                        <p><?php the_title(); ?></p>

                    </div>


                <?
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
        <div class="conveer_block_anim">
            <div class="conveer">
                <video src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm"
                       autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm"
                            data-wf-ignore="true">
                </video>
            </div>
            <div class="conveer">
                <video src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm"
                       autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/5eaac2620e0334334f8c4360_conveer%203-transcode.webm"
                            data-wf-ignore="true">
                </video>
            </div>
        </div>
    </div>
</div>

<div class="back_wrapper">
    <div class="wrapper">
        <h2>Внешняя&nbsp;<span>экономическая</span>&nbsp;деятельность</h2>
        <div class="ekonom">
            <div class="side_ekonom">
                <div class="items_manage ekom_cards">
                        <?php query_posts('cat=19');
                        while (have_posts()) : the_post(); ?>

                            <div class="item_manage ekonom_card">
                                <?php the_content(); ?>
                                <p><?php the_title(); ?></p>
                            </div>


                        <?
                        endwhile;
                        wp_reset_query();
                        ?>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <h2 style="font-style: italic;">Продвижение на&nbsp;<span>маркетплейсах</span></h2>
</div>



<div class="manage" id="part">
    <div class="manage_sides">
        <div class="side_manage">
            <div class="head_manage">
                <h2><? the_field('h1_mokup') ?></h2>
                <p><? the_field('text_mokup') ?></p>
            </div>
            <div class="items_manage">
                <?php query_posts('cat=9');
                while (have_posts()) : the_post(); ?>

                    <div class="item_manage">
                        <?php the_content(); ?>
                        <p><?php the_title(); ?></p>
                    </div>


                <?
                endwhile;
                wp_reset_query();
                ?>

            </div>

        </div>
        <div class="side_manage">
            <img src="<? the_field('img_mokup') ?>" alt="mokup" width="729" height="615" class="mokup">
        </div>
    </div>
</div>
<div class="wrapper">
    <h2 style="font-style: italic;">Статьи</h2>
    <div class="articles">
        <?php query_posts('cat=10');
        while (have_posts()) : the_post(); ?>

            <div class="article">
                <div class="head_article">
                    <img src="<? the_field('img_art') ?>" alt="article" width="640" height="220">
                </div>
                <div class="text_article">

                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="bottom_article">
                    <img src="<? the_field('img_logo') ?>" alt="logoar" width="105" height="60">
                </div>
            </div>

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
                                <?php echo do_shortcode('[contact-form-7 id="7349858" title="Заявки"]'); ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mob_form" id="main_form">
        <div class="faq-drawer">
            <input class="faq-drawer__trigger" id="faq-drawer_mob" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer_mob"><h3><? the_field('h1_form') ?></h3></label>
            <div class="faq-drawer__content-wrapper">
                <div class="faq-drawer__content">
                    <div class="cont_forms">
                        <div class="side_cont_forms">


                            <div class="inputs">
                                <?php echo do_shortcode('[contact-form-7 id="d48f679" title="Заявки_mob"]'); ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<? get_footer(); ?>
