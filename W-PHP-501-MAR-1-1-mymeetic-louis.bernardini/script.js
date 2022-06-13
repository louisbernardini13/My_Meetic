
$(document).ready(function(){
    $("form").on("submit", function(e){
        $form = $(this);
        e.preventDefault();
        $.ajax({
            //L'URL de la requête 
            url: $form.attr('action'),
    
            //La méthode d'envoi (type de requête)
            method: $form.attr('method'),
    
            //Le format de réponse attendu
            dataType: "json",

            data: $form.serialize(),

        })
        //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
        /*On peut par exemple convertir cette réponse en chaine JSON et insérer
         * cette chaine dans un div id="res"*/
        .done(function(response){
            let data = JSON.stringify(response);
            $("div#res").append(data);
        })
    
        //Ce code sera exécuté en cas d'échec - L'erreur est passée à fail()
        //On peut afficher les informations relatives à la requête et à l'erreur
        .fail(function(error){
            alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
        })
    
        //Ce code sera exécuté que la requête soit un succès ou un échec
        .always(function(){
            alert("Requête effectuée");
        });
    })
});

