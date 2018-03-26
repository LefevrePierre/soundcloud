(function ($) {
    //mon code est protegé
    $(document).ready(function () {


        $('.btn-playlists').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.menu__playlists').hasClass("menu-apparition")) {
                $('.menu__playlists').removeClass("menu-apparition");
                $('.menu__playlists').addClass("menu-disparition");
            } else { //si non on le met
                $('.menu__playlists').addClass("menu-apparition");
                $('.menu__playlists').removeClass("menu-disparition");

                //si un au tre menu etait déjà ouvert
                if ($('*[class^="menu__"]:not(".menu__playlists")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu__"]:not(".menu__playlists")').removeClass("menu-apparition");
                    $('*[class^="menu__"]:not(".menu__playlists")').addClass("menu-disparition");

                }
            }

        });


        $('.btn-search').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.menu__search').hasClass("menu-apparition")) {
                $('.menu__search').removeClass("menu-apparition");
                $('.menu__search').addClass("menu-disparition");
            } else { //si non on le met
                $('.menu__search').addClass("menu-apparition");
                $('.menu__search').removeClass("menu-disparition");

                //si un au tre menu etait déjà ouvert
                if ($('*[class^="menu__"]:not(".menu__search")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu__"]:not(".menu__search")').removeClass("menu-apparition");
                    $('*[class^="menu__"]:not(".menu__search")').addClass("menu-disparition");
                }
            }

        });



        $('.btn-upload').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.menu__upload').hasClass("menu-apparition")) {
                $('.menu__upload').removeClass("menu-apparition");
                $('.menu__upload').addClass("menu-disparition");
            } else { //si non on le met
                $('.menu__upload').addClass("menu-apparition");
                $('.menu__upload').removeClass("menu-disparition");

                //si un au tre menu etait déjà ouvert
                if ($('*[class^="menu__"]:not(".menu__upload")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu__"]:not(".menu__upload")').removeClass("menu-apparition");
                    $('*[class^="menu__"]:not(".menu__upload")').addClass("menu-disparition");
                }
            }

        });



        $('.container__c').on("click", function () {
            $('*[class^="menu__"]').removeClass("menu-apparition");
            $('*[class^="menu__"]').addClass("menu-disparition");

        });

    });
})(jQuery);