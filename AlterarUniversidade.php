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
                                <li><a href="VisualizarUsuarios.php">Usuários</a></li>
                                <li><a href="VisualizarFornecedor.php">Fornecedor</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="form-inline" role="form" style="margin-top: 8px">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </form>
                    </ul>
                </div>
            </div>
    </nav>

    <?php
   $id = $_GET['id'];

    $db = mysqli_connect("localhost","root","","db_adler");
    $results = mysqli_query($db, "SELECT * FROM tb_universidades WHERE id='$id'")or die ("erro de nada");
    while ($linha = mysqli_fetch_array($results)) {

        $alterar_nome_universidade = $linha['nome_universidade'];
        $alterar_cnpj_universidade = $linha['cnpj_universidade'];
        $alterar_endereco_universidade = $linha['endereco_universidade'];
        $alterar_cidade_universidade = $linha['cidade_universidade'];
        $alterar_uf_universidade = $linha['uf_universidade'];
        $alterar_cep_universidade = $linha['cep_universidade'];
        $alterar_telefone_universidade = $linha['telefone_universidade'];
        $alterar_nome_funcionario = $linha['nome_funcionario'];
        $alterar_data_nascimento = $linha['data_nascimento'];
        $alterar_cpf_funcionario = $linha['cpf_funcionario'];
        $alterar_funcao_funcionario = $linha['funcao_funcionario'];

    }
    ?>

    <div class="centro">
        <form role="form" method="post" action="FunctionsUniversidade.php?escolha=alterar&id= <?php echo $id?>">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputnome_universidade">Nome da universidade</label>
                    <input type="varchar" class="form-control" id="Inputnome_universidade" name="Inputnome_universidade" value="<?php echo $alterar_nome_universidade ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcnpj_universidade">Cnpj da universidade</label>
                    <input type="text" class="form-control" id="Inputcnpj_universidade" name="Inputcnpj_universidade" value="<?php echo $alterar_cnpj_universidade ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputendereco_universidade">Endereço da universidade</label>
                    <input type="text" class="form-control" id="Inputendereco_universidade" name="Inputendereco_universidade" value="<?php echo $alterar_endereco_universidade ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcidade_universidade">Cidade da universidade</label>
                    <input type="text" class="form-control" id="Inputcidade_universidade" name="Inputcidade_universidade" value="<?php echo $alterar_cidade_universidade ?>">

                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputuf_universidade">UF</label>
                    <input type="text" class="form-control" id="Inputuf_universidade" name="Inputuf_universidade" value="<?php echo $alterar_uf_universidade ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcep_universidade">Cep da universidade</label>
                    <input type="text" class="form-control" id="Inputcep_universidade" name="Inputcep_universidade" value="<?php echo $alterar_cep_universidade ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputtelefone_universidade">Telefone da universidade</label>
                    <input type="text" class="form-control" id="Inputtelefone_universidade" name="Inputtelefone_universidade" value="<?php echo $alterar_telefone_universidade ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputnome_funcionario">Nome do funcionário</label>
                    <input type="text" class="form-control" id="Inputnome_funcionario" name="Inputnome_funcionario" value="<?php echo $alterar_nome_funcionario ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputdata_nascimento">Data de nascimento</label>
                    <input type="text" class="form-control" id="Inputdata_nascimento" name="Inputdata_nascimento" value="<?php echo $alterar_data_nascimento ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcpf_funcionario">Cpf do funcionário</label>
                    <input type="text" class="form-control" id="Inputcpf_funcionario" name="Inputcpf_funcionario" value="<?php echo $alterar_cpf_funcionario ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputfuncao_funcionario">Função do funcionário</label>
                    <input type="text" class="form-control" id="Inputfuncao_funcionario" name="Inputfuncao_funcionario" value="<?php echo $alterar_funcao_funcionario ?>" >
                    <input type="submit" class="btn btn-warning btn-block col-md-11" value="Alterar" style="margin-top: 20px;">
                </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>
