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
                                <li><a href="VisualizarExperimento.php">Experimentos</a></li>
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
        <form role="form" method="post" action="FunctionsEmprestimo.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNomeResponsavel">Nome do Responsável</label>
                    <input type="text" class="form-control" id="InputNomeResponsavel" name="InputNomeResponsavel" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataRetirada">Data de Retirada</label>
                    <input type="date" class="form-control" id="InputDataRetirada" name="InputDataRetirada">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataEntrega">Data de Entrega</label>
                    <input type="date" class="form-control" id="InputDataEntrega" name="InputDataEntrega">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownPeca">Peças cadastradas</label>
                    <select id="DropDownPeca" class="img-rounded" name="DropDownPeca" style="width: 360px; display: block; padding: 7px">
                        <?php
                        $connect = mysqli_connect("localhost","root","","db_Adler");
                        $results = mysqli_query($connect,"SELECT nomePeca, fotoPeca FROM tb_pecas ORDER BY nomePeca");
                        while ($linhas = mysqli_fetch_array($results))
                        {
                            $results_nomePeca = $linhas['nomePeca'];
                        ?>
                            <option =" <?php echo $results_nomePeca; ?> "> <?php echo $results_nomePeca; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputMotivo">Motivo</label>
                    <input type="text" class="form-control" id="InputMotivo" name="InputMotivo">
                    <input type="submit" class="btn btn-primary btn-block col-md-11" style="margin-top: 20px;">
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>