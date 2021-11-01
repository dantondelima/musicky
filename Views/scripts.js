$(document).ready(function(){
    $("#div-imagem").hide();
    $('#album').select2({
        placeholder: "Selecione o álbum",
        allowClear: true,
        "language": {
            "noResults": function(){
                return "Nenhum resultado encontrado";
            }
        },
    });

    $('#artista').select2({
        placeholder: "Selecione o(s) artista(s)",
        allowClear: true,
        "language": {
            "noResults": function(){
                return "Nenhum resultado encontrado";
            }
        },
    });
    
    $('[name="single"]').change(function(){
        if ($(this).is(':checked')) {
            $("#div-album").hide();
            $("#div-imagem").show();
        }
        else{
            $("#div-album").show();
            $("#div-imagem").hide();

        }
    });
});