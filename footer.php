<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(() => {

        const onScrollHeader = () => {

            const header = $('header')

            let prevScroll = $(window).scrollTop()
            let currentScroll

            $(window).scroll(() => {

                currentScroll = $(window).scrollTop()

                const headerHidden = () => header.hasClass('header_hidden')

                if (currentScroll > prevScroll && !headerHidden()) {
                    header.addClass('header_hidden')
                }
                if (currentScroll < prevScroll && headerHidden()) {
                    header.removeClass('header_hidden')
                }

                prevScroll = currentScroll

            })

        }

        onScrollHeader()

    })
</script>
<script>
    (function($){

        $.fn.updateImg = function(conf){
            var defConf = {
                elem_img    : null,
                url_img     : null,
            }

            $.extend(defConf, conf);

            if( defConf.elem_img != null && defConf.url_img != null ) {
                $( this ).click(function() {
                    $( defConf.elem_img ).attr( "src", defConf.url_img );
                });
            }
        }

    })(jQuery);


    $(document).ready(function() {
        $("#doroj").updateImg({
            elem_img : "#setImg",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/1.jpg"
        });

        $("#vavil").updateImg({
            elem_img : "#setImg",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/2.jpg"
        });

        $("#nagor").updateImg({
            elem_img : "#setImg",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/3.jpg"
        });
        $("#lian").updateImg({
            elem_img : "#setImg",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/4.webp"
        });
        $("#doroj").updateImg({
            elem_img : "#setImg1",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/1.jpg"
        });

        $("#vavil").updateImg({
            elem_img : "#setImg1",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/2.jpg"
        });

        $("#nagor").updateImg({
            elem_img : "#setImg1",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/3.jpg"
        });
        $("#lian").updateImg({
            elem_img : "#setImg1",
            url_img  : "http://fulfilment.top/wp-content/uploads/2023/12/4.webp"
        });
    });
    $('button').on('click', function(){
        $(this).addClass('style_active').siblings().removeClass('style_active')
    })

    $('.label_gr').on('click', function(){
        $(this).addClass('style_active_label').siblings().removeClass('style_active_label')
    })
    var hov = document.querySelector('.label_gr');
    window.onload = () => {
        hov.className = 'style_active_label';
        console.log(hov)
    }


</script>
<script>
    function hideDiv() {


        document.getElementById('off').style.display = 'none';


    }
</script>
<script>
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
</script>
<script>
    $('#menuToggle').modal().on('shown', function(){
        $('body').css('overflow', 'hidden');
    }).on('hidden', function(){
        $('body').css('overflow', 'auto');
    })
</script>
<script>
    
</script>
<footer>
    <div class="footer">
        <div class="side_footer">
            <div class="logo">
                <a href="/">
                    <svg width="157" height="50" viewBox="0 0 157 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#DE1820"/>
                        <path d="M75.64 36H60.376V11.988H65.488V31.5H75.64V36ZM89.6114 36.432C82.3754 36.432 77.0834 31.248 77.0834 24.012C77.0834 16.776 82.3754 11.592 89.6114 11.592C96.8834 11.592 102.175 16.776 102.175 24.012C102.175 31.248 96.8834 36.432 89.6114 36.432ZM89.6114 31.896C94.0394 31.896 96.9194 28.476 96.9194 24.012C96.9194 19.512 94.0394 16.128 89.6114 16.128C85.1834 16.128 82.3394 19.512 82.3394 24.012C82.3394 28.476 85.1834 31.896 89.6114 31.896ZM117.391 36.468C110.371 36.468 104.611 31.572 104.611 24.012C104.611 16.416 110.371 11.592 117.391 11.592C122.395 11.592 125.527 14.112 127.327 16.956L123.079 19.26C121.999 17.568 119.947 16.128 117.391 16.128C113.035 16.128 109.867 19.476 109.867 24.012C109.867 28.548 113.035 31.896 117.391 31.896C119.515 31.896 121.531 30.96 122.503 30.06V27.18H116.167V22.716H127.615V31.932C125.167 34.668 121.747 36.468 117.391 36.468ZM143.049 36.432C135.813 36.432 130.521 31.248 130.521 24.012C130.521 16.776 135.813 11.592 143.049 11.592C150.321 11.592 155.613 16.776 155.613 24.012C155.613 31.248 150.321 36.432 143.049 36.432ZM143.049 31.896C147.477 31.896 150.357 28.476 150.357 24.012C150.357 19.512 147.477 16.128 143.049 16.128C138.621 16.128 135.777 19.512 135.777 24.012C135.777 28.476 138.621 31.896 143.049 31.896Z" fill="white"/>
                    </svg>

                </a>
            </div>
            <div class="etc">
                <p>Все права защищены®</p>
                <p>©2024 Fulfillment.top</p>
            </div>
        </div>
        <div class="side_footer">
            <div class="foot_contact">
                <p>Контакты</p>
                <a href="tel:<? the_field('phone') ?>"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_120_1281)">
                            <path d="M4.86519 0.686434C5.55928 1.64356 6.38697 2.87975 7.3441 4.38965C7.58516 4.79815 7.54835 5.2874 7.23663 5.86275C7.11788 6.10381 6.81744 6.65303 6.33888 7.51753C6.86553 8.25972 7.66769 9.17231 8.74713 10.2488C9.82657 11.3252 10.7249 12.1304 11.4416 12.657C12.3025 12.1523 12.8553 11.8442 13.0969 11.7219C13.4087 11.555 13.7091 11.4695 13.9947 11.4695C14.2102 11.4695 14.4032 11.5176 14.57 11.6144C15.672 12.2859 16.9189 13.1136 18.3071 14.0933C18.5707 14.2863 18.7192 14.5499 18.756 14.8836C18.7934 15.2214 18.6889 15.5777 18.452 15.9636C18.3332 16.1305 18.1403 16.3757 17.8766 16.7022C17.613 17.0252 17.2158 17.4332 16.6891 17.923C16.1625 18.4128 15.7314 18.6616 15.3942 18.6616H15.3568C12.822 18.5613 9.69772 16.6613 5.99807 12.9616C2.29485 9.25781 0.394253 6.13706 0.298065 3.59878C0.298065 3.2645 0.54269 2.8269 1.03669 2.2854C1.52653 1.74746 1.93088 1.35737 2.23903 1.11631C2.55075 0.878809 2.81438 0.68584 3.02932 0.540965C3.29294 0.347996 3.59338 0.255371 3.92766 0.255371C4.33972 0.255371 4.64728 0.400246 4.86638 0.68584L4.86519 0.686434ZM3.67769 1.4399C3.173 1.79971 2.70157 2.20406 2.25625 2.64581C1.8145 3.09112 1.55503 3.41768 1.48438 3.63262C1.58116 5.86275 3.35825 8.70146 6.821 12.1529C10.2838 15.6044 13.1296 17.3892 15.3562 17.508C15.5491 17.4373 15.8644 17.1737 16.3097 16.7177C16.755 16.2617 17.1558 15.7825 17.5121 15.2814C17.5827 15.1846 17.6088 15.1033 17.5827 15.0291C16.1464 14.0232 14.9477 13.2217 13.987 12.6208C13.8902 12.6208 13.7714 12.6582 13.6272 12.7283C13.4116 12.847 12.8737 13.1475 12.0092 13.626L11.397 13.9858L10.7849 13.5886C9.9946 13.0394 9.03688 12.1856 7.90875 11.0355C6.78419 9.91093 5.94582 8.95025 5.39244 8.15937L4.96197 7.58403L5.32178 6.93803C5.80035 6.07709 6.10138 5.535 6.21953 5.32006C6.29019 5.17518 6.327 5.05643 6.327 4.96025C5.47319 3.59818 4.68291 2.3994 3.96328 1.36806H3.92588C3.83325 1.36806 3.74775 1.39418 3.6771 1.43871L3.67769 1.4399Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_120_1281">
                                <rect width="19" height="19" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <p><? the_field('phone') ?></p>
                </a>
                <a href="mailto:<? the_field('mail') ?>">
                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.3725 0.5C17.2866 0.5 18.06 1.27344 18.06 2.1875V12.3125C18.06 13.2617 17.2866 14 16.3725 14H1.7475C0.798279 14 0.0599976 13.2617 0.0599976 12.3125V2.1875C0.0599976 1.27344 0.798279 0.5 1.7475 0.5H16.3725ZM16.3725 2.1875H1.7475V3.62891C2.52094 4.29688 3.78656 5.28125 6.45844 7.39062C7.05609 7.84766 8.21625 8.97266 9.06 8.9375C9.86859 8.97266 11.0287 7.84766 11.6264 7.39062C14.2983 5.28125 15.5639 4.29688 16.3725 3.62891V2.1875ZM1.7475 12.3125H16.3725V5.80859C15.5639 6.44141 14.4037 7.35547 12.6811 8.72656C11.8725 9.32422 10.5366 10.6602 9.06 10.625C7.54828 10.6602 6.17719 9.32422 5.40375 8.72656C3.68109 7.35547 2.52094 6.44141 1.7475 5.80859V12.3125Z" fill="white"/>
                    </svg>
                    <p><? the_field('mail') ?></p>
                </a>

            </div>
            <div class="foot_soc">
                <a href="<? the_field('tg') ?>">
                    <svg version="1.1" id="Capa_1" width="16" height="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve"><g><g><path d="M501.974,41.949c-8.237-7.547-19.944-10.062-30.555-6.565L21.231,183.785c-12.269,4.044-20.589,14.996-21.196,27.899 c-0.606,12.904,6.649,24.589,18.483,29.768l90.405,39.554l266.17-147.723c6.501-3.608,14.66-1.922,19.2,3.961 c4.541,5.885,4.1,14.204-1.037,19.576L227.319,330.325L193.287,453.28l81.681-61.162l96.589,79.039 c5.626,4.606,12.502,7.008,19.513,7.008c3.338-0.001,6.708-0.545,9.986-1.657c10.166-3.447,17.702-11.744,20.159-22.193 l89.965-382.503C513.737,60.939,510.211,49.496,501.974,41.949z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></g></g><g><g><path d="M132.476,302.325l31.261,144.992l35.612-128.661c0.662-2.394,1.907-4.587,3.623-6.381l100.029-104.59L132.476,302.325z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></g></g></svg>
                </a>
                <a href="<? the_field('wtp') ?>">
                    <svg version="1.1" id="Capa_1" width="16" height="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"><path d="M30.5,0C14.233,0,1,13.233,1,29.5c0,5.146,1.346,10.202,3.896,14.65L0.051,58.684c-0.116,0.349-0.032,0.732,0.219,1 C0.462,59.889,0.728,60,1,60c0.085,0,0.17-0.011,0.254-0.033l15.867-4.175C21.243,57.892,25.86,59,30.5,59 C46.767,59,60,45.767,60,29.5S46.767,0,30.5,0z M48.908,42.895l-1.758,1.759C44.93,46.874,42.453,48,39.79,48c0,0,0,0,0,0 c-3.59,0-7.461-2.05-11.503-6.093L18.093,31.714c-3.188-3.188-5.147-6.285-5.823-9.206c-0.82-3.547,0.215-6.796,3.077-9.657 l1.759-1.759c1.131-1.131,2.96-1.409,4.377-0.659c2.662,1.409,5.42,6.025,5.726,6.547c0.552,0.967,0.721,1.967,0.483,2.824 c-0.182,0.655-0.592,1.189-1.188,1.552c-0.808,0.676-1.755,1.518-1.922,1.732c-1.016,1.499-0.9,2.65,0.409,3.96l7.962,7.962 c1.32,1.321,2.451,1.43,3.974,0.398c0.201-0.157,1.042-1.104,1.718-1.912c0.505-0.835,1.332-1.292,2.338-1.292 c0.659,0,1.36,0.2,2.027,0.58c0.532,0.313,5.149,3.071,6.557,5.732C50.337,39.972,50.073,41.73,48.908,42.895z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></svg>
                </a>
            </div>
            <div class="foot_text">
                <p><? the_field('info_foot') ?></p>
            </div>
        </div>
        <div class="side_footer">
            <div class="foot_nav">
                <p>Навигация</p>
                <? wp_nav_menu('menu=Меню футер'); ?>
            </div>
            <div class="author">
                <p>Сайт разработан Web-студией:</p>
                <a href="http://webkurkin.ru/">WEBKURKIN</a>
            </div>
        </div>

    </div>
</footer>
</body>
</html>
