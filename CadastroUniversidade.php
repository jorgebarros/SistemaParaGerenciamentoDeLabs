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
                            <li><a href="CadastroUsuario.php">Universidade</a></li>
                            <li><a href="CadastrarPecas.php">Peças</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="VisualizarUsuarios.php">Usuários</a></li>
                                <li><a href="#">Peças</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form action ="logar.php" class="form-inline" role="form" style="margin-top: 8px">
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
    <div class="centro">
        <form role="form" method="post" action="FunctionsUniversidade.php?escolha=inserir">
           <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCnpj"><BR>DADOS DA UNIVERSIDADE </label>

                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNome_universidade" >Nome </label>

                    <input type="text" class="form-control" id="InputNome_universidade" name="Inputnome_universidade" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCnpj_universidade">CNPJ</label>
                    <input type="text" class="form-control" id="InputCnpj_universidade" name="InputCnpj_universidade"
                           onKeyPress="MascaraCNPJ(form1.cnpj);" maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputendereco_universidade">Endereço </label>
                    <input type="text" class="form-control" id="Inputendereco_universidade" name="Inputendereco_universidade">
                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcidade_universidade">Cidade </label>
                    <input type="text" class="form-control" id="Inputcidade_universidade" name="Inputcidade_universidade">
                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputuf_universidade">UF </label>
                    <select  type="combobox" class="form-control" id="Inputuf_universidade" name="Inputuf_universidade">
                        <option value="estado">Selecione o Estado</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>


                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcep_universidade">Cep </label>
                    <input type="text" class="form-control" id="Inputcep_universidade" name="Inputcep_universidade">
                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputtelefone_universidade">Telefone</label>
                    <input type="tel" class="form-control" id="Inputtelefone_universidade" name="Inputtelefone_universidade">
                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label ><BR>DADOS DO FUNCIONÁRIO RESPONSÁVEL  </label>

                </div>
            </div>


            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputnome_funcionario">Nome </label>
                    <input type="text" class="form-control" id="Inputnome_funcionario" name="Inputnome_funcionario">
                </div>
            </div>


            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputdata_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="Inputdata_nascimento" name="Inputdata_nascimento">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputcpf_funcionario">CPF</label>
                    <input type="text" class="form-control" id="Inputcpf_funcionario" name="Inputcpf_funcionario" onBlur="ValidarCPF(form1.cpf);
                    "onKeyPress="MascaraCPF(form1.cpf);"maxlength="14">
                </div>
            </div>

            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="Inputfuncao_funcionario">Função</label>
                    <select id="Inputfuncao_funcionario" class="img-rounded" name="Inputfuncao_funcionario" style="width: 360px; display: block; padding: 7px">
                        <option = "tec.administrativo">1 - Tec.Administrativo</option>
                        <option = "Professor">2 - Professor</option>
                        <option = "Outros">3 - Outros</option>


                        <input type="submit" class="btn btn-primary btn-block" style="margin-top: 15px">
                    </select>
                </div>
            </div>


        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
