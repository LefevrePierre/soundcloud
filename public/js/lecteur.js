$(document).ready(function(){
    $('#app').on('click','a.chanson',function(){
        var f = $(this).attr('data-file');
        console.log(f);
        var audio=$('#audio');
        audio.attr('src', f);
        audio[0].load();
        audio[0].play();

    });

    $('.suivre').click(function(e){
        e.preventDefault(); //Ne fait pas le comportement par default des liens
        var leA = $(this);
        var lien =leA.attr('href');
         console.log('lien');
    $.ajax({
            type: "GET", // Le type de ma requete
            url: lien, // L url vers laquelle la requete sera envoyee

            success: function(data, textStatus, jqXHR) {
               if(leA.text()=="Suivre")
                   leA.text("Arreter de suivre");
               else
                   leA.text('Suivre');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Une erreur sest produite lors de la requete
            }
        });

    });
    });
