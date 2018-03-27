


    //mon code est protegé
    $(document).ready(function () {


        console.log('rtgrtg');

    $('.home__nouveautes-hover').hide();

            $('.home__nouveautes li').hover(
                function() {
                    $( this ).find( '.home__nouveautes-hover' ).fadeIn();
                }

            );

        $('.home__nouveautes li').mouseleave(
            function() {
                $( this ).find( '.home__nouveautes-hover' ).fadeOut();
            }

        );










    });
