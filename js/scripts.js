$(document).ready(function(){
    $('#telefone').mask('(00) 0000-00000');
    $('#data').mask('00/00/0000');
    $('#cpf').mask('000.000.000-00', {reverse: true});

    $(".cadastro").validate({
        rules:{
            txtnome: {
                required: true,
                minlength: 5
            },
            txtemail: {
                required: true,
                minlength: 3
            },
            txttelefone: {
                required: true
            },
            txtsenha:{
                required: true,
                minlength: 8
            },
            confirmsenha: {
                required: true,
                equalTo: "#senha"
            }
        },
        messages: {
            txtnome: {
                required: "Por favor, informe o seu nome.",
                minlength: "O nome deve ter pelo menos 5 caracteres."
            },
            txtemail: {
                required: "É necessário informar um email.",
                minlength: "Digite um email válido."
            },
            txttelefone: {
                required: "O telefone não pode ficar em branco."
            },
            txtsenha: {
                required: "Este campo não pode ficar em branco.",
                minlength: "A senha precisa ter pelo menos 8 caracteres."
            },
            confirmsenha: {
                required: "Este campo não pode ficar em branco.",
                equalTo: "A senha não é compatível."
            }
        }
    })
})