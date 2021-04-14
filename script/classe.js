$(document).ready(function () {
    $.ajax({
        url: 'gestionClasse.php',
        data: {op:''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            remplir(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });
     $.ajax({
        url: 'GestionFind.php',
        data: {op: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            var option = '<option selected>Choisi une fonction</option>';
            for (var i = 0; i < data.length; i++) {
                option += '<option value="' + data[i].code + '">' + data[i].code + '</option>';
            }
            var filiere=$('#filiere');
            filiere.html(option);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });

    $('#btn').click(function () {
        var classe = $("#classe");
        var filiere = $("#filiere");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'gestionClasse.php',
                data: {op: 'add', filiere: filiere.val(), classe: classe.val()},
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    remplir(data);
                    classe.val('');
                    filiere.val('');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });
        }

    });

    $(document).on('click', '.supprimer', function () {
        var id = $(this).closest('tr').find('th').text();
        $.ajax({
            url: 'gestionClasse.php',
            data: {op: 'delete', id: id},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                remplir(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
    });

    $(document).on('click', '.modifier', function () {
        var btn = $('#btn');
        var id = $(this).closest('tr').find('th').text();
        var classe = $(this).closest('tr').find('td').eq(0).text();
        var filiere = $(this).closest('tr').find('td').eq(1).text();
        btn.text('Modifier');
        $("#classe").val(classe);
        $("#filiere").val(filiere);
        $("#id").val(id);
        btn.click(function () {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'gestionClasse.php',
                    data: {op: 'update', id: $("#id").val(), classe: $("#classe").val(), filiere: $("#filiere").val()},
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        remplir(data);
                        $("#classe").val('');
                        $("#filiere").val('');
                        btn.text('Ajouter');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                    }
                });
            }
        });
    });
    function remplir(data) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].id + '</th>';
            ligne += '<td>' + data[i].classe + '</td>';
            ligne += '<td>' + data[i].filiere + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});



