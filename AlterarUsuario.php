<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style type="text/css">
        .centro {
            height:41.42em;
            left:50%;
            margin-left:-15em;
            position:absolute;
            top:15%;
            width:30em;
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Física</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="CadastrarEmprestimo.php">Empréstimos</a></li>
                            <li><a href="CadastrarPecas.php">Pecas</a></li>
                            <li><a href="CadastrarFornecedor.php">Fornecedor</a></li>
                            <li><a href="CadastrarEquipamentos.php">Equipamentos</a></li>
                            <li><a href="CadastrarExperimento.php">Experimentos</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="VisualizarEmprestimos.php">Empréstimos</a></li>
                                <li><a href="VisualizarPecas.php">Pecas</a></li>
                                <li><a href="VisualizarUsuarios.php">Seus Dados</a></li>
                                <li><a href="VisualizarFornecedor.php">Fornecedor</a></li>
                                <li><a href="VisualizarEquipamentos.php">Equipamentos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 15px; color: #5e5e5e">
                        Seja bem vindo <strong><?php echo $_SESSION['nome'] ?></strong>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="centro">
        <form role="form" method="post" action="Functions.php?escolha=alterar&id= <?php echo $_SESSION['id']?>">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" id="InputNome" name="InputNome" value="<?php echo $_SESSION['nome'] ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataDeNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="InputDataDeNascimento" name="InputDataDeNascimento" value="<?php echo $_SESSION['dataNascimento'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCpf">Cpf</label>
                    <input type="text" class="form-control" id="InputCpf" name="InputCpf" value="<?php echo $_SESSION['cpf'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputEndereco">Endereco</label>
                    <input type="text" class="form-control" id="InputEndereco" name="InputEndereco" value="<?php echo $_SESSION['endereco'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputTelefone">Telefone</label>
                    <input type="tel" class="form-control" id="InputTelefone" name="InputTelefone" value="<?php echo $_SESSION['telefone'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputInstituicao">Instituição</label>
                    <input type="text" class="form-control" id="InputInstituicao" name="InputInstituicao" value="<?php echo $_SESSION['Instituicao'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" value="<?php echo $_SESSION['email'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputSenha">Senha</label>
                    <input type="password" class="form-control" id="InputSenha" name="InputSenha" value="<?php echo $_SESSION['password'] ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputFoto">Foto</label>
                    <input type="text" class="form-control" id="InputFoto" name="InputFoto" value="<?php echo $_SESSION['foto'] ?>">
                    <input type="submit" class="btn btn-primary col-md-11" style="margin-top : 30px">
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>