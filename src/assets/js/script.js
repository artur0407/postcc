function enableDisable(boolean, btn) {
    $("#input_taxa_positividade").prop('disabled', boolean);
    $("#input_taxa_uti").prop('disabled', boolean);
    $("#btn_processar").prop('disabled', boolean);
    $("#btn_processar").attr('class', btn);
}

function clearFields() {
    $("#input_taxa_positividade").val('');
    $("#input_taxa_uti").val('');
    $("#resultado_taxa_positividade").html('');
    $("#resultado_taxa_de_uti").html('');
    $("#resultado_risco").html('');
}

$(document).ready(function() {

    $("img#matriz").css("-webkit-filter", "grayscale(1)");

    $('#input_taxa_positividade, #input_taxa_uti').keyup(function() {
        $(this).val(this.value.replace(/\D/g, ''));
    });

    enableDisable(true, 'btn btn-dark');

    $("#selectProcessamento").change(function() {
        
        var tipoProcessamento = $(this).val();

        if (tipoProcessamento != "") {

            $("img#matriz").css("-webkit-filter", "grayscale(0)");

            if (tipoProcessamento == "processamentoEstrutural" || tipoProcessamento == "processamentoPadroes") {
                enableDisable(false, 'btn btn-primary');
                clearFields();
            }

        } else {
            $("img#matriz").css("-webkit-filter", "grayscale(1)"); 
            enableDisable(true, 'btn btn-dark');
            clearFields();
        }
    });

    $("#processar").submit(function(event) {

        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: "src/processamento/" + $( "#selectProcessamento" ).val() + ".php",
            data: {
                taxa_de_positividade: $("#input_taxa_positividade").val(),
                taxa_de_uti: $("#input_taxa_uti").val() 
            },
            beforeSend: function() {
                $("#btn_processar").html("Processando dados...");
            }
        }).done(function(msg){
            $("#btn_processar").html("Processamento realizado");
            var resultado = JSON.parse(msg);
            $("#resultado_taxa_positividade").html(resultado.taxa_de_positividade);
            $("#resultado_taxa_de_uti").html(resultado.taxa_de_uti);
            $("#resultado_risco").html(resultado.risco);
        }).fail(function(jqXHR, textStatus, msg){
            alert("Erro no processamento: " + msg);
        });
    });
});