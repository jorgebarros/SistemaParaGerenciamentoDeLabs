<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>

<?php
    session_start();
?>

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
                        <li><a href="CadastrarExperimento.php">Experimentos</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="VisualizarPecas.php">Pecas</a></li>
                            <li><a href="VisualizarUsuarios.php">Seus Dados</a></li>
                            <li><a href="VisualizarFornecedor.php">Fornecedores</a> </li>
                            <li><a href="VisualizarExperimento.php.php">Experimento</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Empréstimos Feitos </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","","db_Adler");
            $results = mysqli_query($connect,"SELECT id, NomeResponsavel, DataRetirada, DataEntrega, Motivo FROM tb_emprestimos ORDER BY NomeResponsavel");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_NomeResponsavel = $linhas['NomeResponsavel'];
                $results_DataRetirada = $linhas['DataRetirada'];
                $results_DataEntrega = $linhas['DataEntrega'];
                $results_Motivo = $linhas['Motivo'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail"  style="border: solid 3px">
                        <div class="container" style="width: 130px; height: 100px">
                            <img src="<?php echo $results_fotoPeca ?>" class="media-object img-rounded" width="100" height="100">
                        </div>
                        <div class="caption"style="text-align: center">
                            <h3> <?php echo $results_nomePeca ?></h3>
                            <a href="AlterarEmprestimo.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning col-md-6" role="button">
                                Alterar</a>
                            <a href="FunctionsEmprestimo.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger col-md-6" role="button">
                                Remover</a>
                            <hr>
                            <hr>
                            <hr>
                            <p style="text-align: center;">
                                <?php
                                echo $results_cadastroPeca
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>