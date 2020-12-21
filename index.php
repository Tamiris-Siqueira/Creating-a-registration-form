<!DOCTYPE html>
<html lang="pt-br">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
        <script src="./js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
     
        <title>Tela de Cadastro</title>
    </head>
</head>
<body>
    <div class="fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
    </div>
    <div class="imgback">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <h2>Cadastre-se</h2> <span class="traco3"></span>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <div class="card mb-3" style="max-width: 19rem;">
                        <div class="card-body">
                            <h4 class="card-title">NOSSOS</h4> 
                            <h4 id="amarelo">CONTATOS</h4>
                            <div class="row">
                                <h6 class="traco"></h6>
                            </div>
                            <div class="row">
                                <img src="./imagem/phone.png" class="icon"> <b>Telefone</b>
                            </div>
                            <div class="row">
                                <p>(11) 9999-9999</p>
                            </div>
                            <div class="row">
                                <img src="./imagem/mail.png" class="icon"> <b>E-mail</b>
                            </div>
                            <div class="row">
                                <p>contato@hotmail.com</p>
                            </div>
                            <div class="row">
                                <img src="./imagem/linkedin.png" class="icon"> <b>LinkedIn</b>
                            </div>
                            <div class="row">
                                <p>@userlinkedin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form class="cadastro" action="sucess.php">
                        <div class="row">
                            <div class="col">
                                <label>Nome Completo</label><div class="break"></div>
                                <input type="text" name="txtnome" id="nome"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>CPF</label><div class="break"></div>
                                <input type="text" name="txtcpf" id="cpf"/>
                            </div>
                            <div class="col">
                                <label>Data de Nascimento</label>
                                <input type="text" name="datanascimento" id="data"/>
                            </div>
                            <div class="col">
                                <label>Telefone (Celular)</label>
                                <input type="tel" name="txttelefone" id="telefone"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Email</label><div class="break"></div>
                                <input type="email" name="txtemail" id="email" placeholder="email@hotmail.com"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Senha</label><div class="break"></div>
                                <input type="password" name="txtsenha" id="senha"/>
                            </div>
                            <div class="col">
                                <label>Confirme a senha</label><div class="break"></div>
                                <input type="password" name="confirmsenha" id="senha"/>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" name="btnenviar" id="enviar" value="Enviar"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</body>
</html>