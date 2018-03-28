//mon code est protegé
    $(document).ready(function () {


        console.log('rtgrtg');

    $('.home__nouveautes-hover').hide();

            $('.home__nouveautes-img').hover(
                function() {
                    $( this ).find( '.home__nouveautes-hover' ).fadeIn();
                }

            );

        $('.home__nouveautes-img').mouseleave(
            function() {
                $( this ).find( '.home__nouveautes-hover' ).fadeOut();
            }

        );


    });
