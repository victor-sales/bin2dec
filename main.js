$(document).ready(function(){
    $(document).on('click', '#converter', function(){
        var bin = $('#binario').val();

        $.ajax({
            url: 'conversor.php',
            type: 'post',
            data: {
                bin: bin
            },
        }).done(function(decimal){
            if(decimal === 'Erro') {
                html = "";
                html += '<br>';
                html += '<div class="alert alert-danger" role="alert">';
                html += 'O número digitado é inválido';
                html += '</div>';
                $('#erro-conversao').html(html);
            } else {
                $('#erro-conversao').html("");
                $('#decimal').val(decimal);
            }
        }).fail(function(erro){
            alert(erro);
        });
    });
});