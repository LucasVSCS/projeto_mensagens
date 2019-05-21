$(document).ready(function() {
    $("#buttonForm").click(function() {

        var dados = {
            nome: $("#nome").val(),
            email: $("#email").val(),
            telefone: $("#telefone").val(),
            mensagem: $("#mensagem").val(),
            tipoRequisicao: $("#tipoRequisicao").val()
        };



        $.ajax({
            type: "post",
            url: "manipulaDados.php",
            data: dados,
            dataType: "html",
            success: function(result) {
                $("#retornoDados").html(result);
            },
            error: function(result) {
                console.log(result);
            }
        });

    });
});

$(document).ready(function() {

        var dados = {
            tipoRequisicao: "recuperaMensagens"
        };

        $.ajax({
            type: "post",
            url: "manipulaDados.php",
            data: dados,
            dataType: "html",
            success: function(result) {
                $("#retornoSelect").html(result);
            },
            error: function(result) {
                console.log(result);
            }
        });

});

function sucessoInsert() {

  
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      
      Toast.fire({
        type: 'success',
        title: 'Mensagem enviada com sucesso'
      })

}

function mensagemErro() {
    Swal.fire({
        title: 'Erro!',
        text: 'Preencha todos os campos!',
        type: 'error',
        confirmButtonText: 'Fechar'
      })
}