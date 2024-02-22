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
    $("#but_1").updateImg({
        elem_img : "#setImg",
        url_img  : "http://oxy.org.ua/wp-content/uploads/2009/08/d185d0b8.jpg"
    });

    $("#but_2").updateImg({
        elem_img : "#setImg",
        url_img  : "http://img0.joyreactor.cc/pics/post/full/Nyan-Cat-%D0%BE%D0%B1%D0%BE%D0%B8-%D0%BA%D1%80%D0%B0%D1%81%D0%B8%D0%B2%D1%8B%D0%B5-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%BA%D0%B8-art-851091.jpeg"
    });

    $("#but_3").updateImg({
        elem_img : "#setImg",
        url_img  : "http://www.yakako.ru/uploads/posts/2010-07/1277990808_kartinki-plamya-ognia-01.jpg"
    });
    $("#but_4").updateImg({
        elem_img : "#setImg",
        url_img  : "http://www.yakako.ru/uploads/posts/2010-07/1277990808_kartinki-plamya-ognia-01.jpg"
    });
});