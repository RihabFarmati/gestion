$(document).ready(function () {
    
    $.ajax({
        url: 'GestionFind.php',
        data: {op: ''},
        type: 'POST',
        success: function (data) {
            var option = '<option selected>Choisi une fonction</option>';
            for (var i = 0; i < data.length; i++) {
                option += '<option value="' + data[i].code + '">' + data[i].code + '</option>';
            }
            var filiere=$('#filiere');
            filiere.html(option);
        },
        error: function ( textStatus) {
            console.log(textStatus);
        }
    });

    $('#filiere').change(function () {
        var filiere = $("#filiere");
       
            $.ajax({
                url: 'gestionFind2.php',
                data: {op: 'find', filiere: filiere.val()},
                type: 'POST',
                success: function (data) {
                    remplir(data);
                     filiere.val('');
                
                },
                error: function (textStatus) {
                    console.log(textStatus);
                }
            });
        
            
      });
    function remplir(data) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].id + '</th>';
            ligne += '<td>' + data[i].classe + '</td>';
            ligne += '<td>' + data[i].filiere + '</td></tr>';
           
        }
        contenu.html(ligne);
    }
});



