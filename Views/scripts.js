$(document).ready(function(){
    
    if($('[name="single"]').is(':checked')){
        $("#div-album").hide();
    }
    else{
        $("#div-imagem, #div-imagem2").hide();
    }
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

    $('#musica').select2({
        placeholder: "Selecione a música",
        allowClear: true,
        "language": {
            "noResults": function(){
                return "Nenhum resultado encontrado";
            }
        },
    });

    $('#tipo').change(function(){
        if ($(this).val() == 1) {
            $("#div-album").hide();
            $("#div-musica").show();
        }
        else{
            $("#div-album").show();
            $("#div-musica").hide();
        }
    });

    $("#tipo").val(1).trigger('change');
    $('[name="color"]').on("click", function(){
        $('[name="color"]').css("border", "3px solid black");
        $(this).css("border", "5px solid black");
        $('[name="cor"]').val($(this).css("background-color"));
    });
    $('[name="single"]').change(function(){
        if ($(this).is(':checked')) {
            $("#div-album").hide();
            $("#div-imagem, #div-imagem2").show();
        }
        else{
            $("#div-album").show();
            $("#div-imagem, #div-imagem2").hide();
        }
    });
});