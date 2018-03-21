(function ($) {
    //mon code est protegé
    $(document).ready(function () {


        $('.btn-playlists').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.leftbar__playlists').hasClass("menu-apparition")) {
                $('.leftbar__playlists').removeClass("menu-apparition");
                $('.leftbar__playlists').addClass("menu-disparition");
            } else { //si non on le met
                $('.leftbar__playlists').addClass("menu-apparition");
                $('.leftbar__playlists').removeClass("menu-disparition");

                //si un au tre menu etait déjà ouvert
                if ($('*[class^="menu-"]:not(".menu-gris")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu-"]:not(".menu-gris")').addClass("menu-disparition");
                    $('*[class^="menu-"]:not(".menu-gris")').removeClass("menu-apparition");
                }
            }

        });


        $('.btn-vert').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.menu-vert').hasClass("menu-apparition")) {
                $('.menu-vert').removeClass("menu-apparition");
                $('.menu-vert').addClass("menu-disparition");
            } else { //si non on le met
                $('.menu-vert').addClass("menu-apparition");
                $('.menu-vert').removeClass("menu-disparition");

                //si un autre menu etait déjà ouvert
                if ($('*[class^="menu-"]:not(".menu-vert")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu-"]:not(".menu-vert")').addClass("menu-disparition");
                    $('*[class^="menu-"]:not(".menu-vert")').removeClass("menu-apparition");
                }
            }

        });


        $('.btn-bleu').on("click", function () {

            //si le menu est déjà la, on le ivre
            if ($('.menu-bleu').hasClass("menu-apparition")) {
                $('.menu-bleu').removeClass("menu-apparition");
                $('.menu-bleu').addClass("menu-disparition");
            } else { //si non on le met
                $('.menu-bleu').addClass("menu-apparition");
                $('.menu-bleu').removeClass("menu-disparition");

                //si un autre menu etait déjà ouvert
                if ($('*[class^="menu-"]:not(".menu-bleu")').hasClass("menu-apparition")) {
                    //on le fait disparaitre
                    $('*[class^="menu-"]:not(".menu-bleu")').addClass("menu-disparition");
                    $('*[class^="menu-"]:not(".menu-bleu")').removeClass("menu-apparition");
                }
            }

        });







        /* $('.btn-vert').on("click", function () {


             if ($('.menu-vert').hasClass("menu-apparition")) {
                 $('.menu-vert').removeClass("menu-apparition");
                 $('.menu-vert').addClass("menu-disparition");
             } else {
                 $('.menu-vert').addClass("menu-apparition");
                 $('.menu-vert').removeClass("menu-disparition");
                 $('.menu-gris').addClass("menu-disparition");
             }

         });*/





        //////////////////////////////////////////////////////////////////////////////////






    });
})(jQuery);
